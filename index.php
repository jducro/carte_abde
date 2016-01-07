<?php
/**
 * User: julien
 * Date: 13/12/14
 * Time: 17:04
 */

// @TODO remplacer ces valeurs
$sender = "test@test.fr";
$subject = "##SENDER## vous a envoyé une carte de vœux";
$message = 'Bonjour ##NAME##, <br />  <br /> ##SENDER## vous a envoyé une carte de vœux. <a href="##LINK##">Cliquez ici</a> pour la voir. <br /> <br /> <br /> Avec les compliments de <a href="http://www.rungis.fr">la Ville de Rungis</a>';



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

	$to      = $_POST['recipient'] . ' <' .$_POST['email'] . '>';
	$sender  = $_POST['sender'] . ' <' . $sender . '>';
	$reply_to = $_POST['sender'] . ' <' . $_POST['sender_email'] . '>';
	$subject = str_replace('##SENDER##', $_POST['sender'], $subject);
	$message = str_replace('##SENDER##', $_POST['sender'], $message);
	$message = str_replace('##NAME##', $_POST['recipient'], $message);
	$message = str_replace('##LINK##', $link, $message);

	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

	$headers .= 'From: ' . $sender . "\r\n" .
		'Reply-To: ' .  $reply_to . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}

include('template.php');
