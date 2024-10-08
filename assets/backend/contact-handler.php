<?php

	// Handleamos que hacen ambos formularios tras haber sido completados

	// Importamos dependencias
	require('./webhook.php');
	require('./send-email.php');

	// First form (index/main/first page)
	function contactFormMailOnly($email, $lang) {
		sendWebhookMailOnly($email, $lang);
		sendMailEmailOnly($email, $lang);
	}

	// Second form (contact us/contactanos/latest page)
	function contactFormAllData($name, $email, $information, $lang) {
		sendWebhookAllData($name, $email, $information, $lang);
		sendMailAllData($name, $email, $information, $lang);
	}
?>
