<?php

	// Handleamos que hacen ambos formularios tras haber sido completados

	// Importamos dependencias
	require('./webhook.php');
	require('./send-email.php');

	// First form (index/main/first page)
	function contactFormMailOnly($email) {
		// sendWebhookMailOnly($email);
		sendMailEmailOnly($email);
	}

	// Second form (contact us/contactanos/latest page)
	function contactFormAllData($name, $email, $information) {
		// sendWebhookAllData($name, $email, $information);
		sendMailAllData($name, $email, $information);
	}
?>
