<?php
/**
 * User: julien
 * Date: 13/12/14
 * Time: 17:04
 */

// @TODO remplacer ces valeurs
$sender = "test@test.fr";
$subject = "Test sujet email";
$message = "Bonjour ##NAME##, Exemple de message où le lien est ##LINK##";



if (!empty($_GET['card'])) {
	$data = json_decode(base64_decode($_GET['card']));
	if ($data) {
		$card_variables = $data;
	}
}

if (!empty($_POST['new_card'])) {
	$data = array();
	$data['message'] = $_POST['message'];
	$link = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].'?card='.base64_encode(json_encode($data));

	$to      = $_GET['email'];
	$message = str_replace('##NAME##', $link, $_GET['recipient']);
	$message = str_replace('##LINK##', $link, $message);
	$headers = 'From: ' . $sender . "\r\n" .
		'Reply-To: ' .  $sender . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}

include('template.php');
