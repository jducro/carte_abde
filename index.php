<?php
/**
 * User: julien
 * Date: 13/12/14
 * Time: 17:04
 */
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
}

include('template.php');
