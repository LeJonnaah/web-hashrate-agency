<?php

	// Handler para los webhooks de Discord, se encarga de enviar los mensajes.

	function sendWebhookAllData($name, $email, $information, $lang) {
		$webhook_url = "https://discord.com/api/webhooks/934939157657186314/_s6pDlzJN7998vxGuQX4oSKyjinTmTyvFQ6pwkaAk97ekoSmwtXgOb_rxzlfNNgrO_1V";

		//=======================================================================================================
		// Compose message. You can use Markdown
		// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
		//========================================================================================================

		if ($lang == "es") {
			$contact_lang = "Español :flag_es:";
		} else {
			$contact_lang = "Ingles :flag_gb:";
		}

		$timestamp = date("c", strtotime("now"));

		$json_data = json_encode([
			// Message
			"content" => "",

			// Text-to-speech
			"tts" => false,

			// Embeds Array
			"embeds" => [
				[
					// Embed Title
					"title" => "Acaban de contactar con HASHRATE STUDIOS",

					// Embed Type
					"type" => "rich",

					// Embed Description
					"description" => "A continuación se listarán los datos de contacto:",

					// Timestamp of embed must be formatted as ISO8601
					"timestamp" => $timestamp,

					// Embed left border color in HEX
					"color" => hexdec( "ffbc75" ),

					// Additional Fields array
					"fields" => [
						// Field 1
						[
							"name" => "Nombre 🗒️",
							"value" => "$name",
							"inline" => false
						],

						// Field 2
						[
							"name" => "Dirección de correo electrónico 📬",
							"value" => "$email",
							"inline" => false
						],

						// Field 3
						[
							"name" => "Datos de contacto especificados ✍️",
							"value" => "$information",
							"inline" => false
						],

						// Field 4
						[
							"name" => "Idioma de contacto 🏳️",
							"value" => "$contact_lang",
							"inline" => false
						]
					]
				]
			]

		], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


		$ch = curl_init( $webhook_url );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

		$response = curl_exec( $ch );
		curl_close( $ch );
	}

	function sendWebhookMailOnly($email, $lang) {
		$webhook_url = "https://discord.com/api/webhooks/934939157657186314/_s6pDlzJN7998vxGuQX4oSKyjinTmTyvFQ6pwkaAk97ekoSmwtXgOb_rxzlfNNgrO_1V";

		if ($lang == "es") {
			$contact_lang = "Español :flag_es:";
		} else {
			$contact_lang = "Ingles :flag_gb:";
		}

		//=======================================================================================================
		// Compose message. You can use Markdown
		// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
		//========================================================================================================

		$timestamp = date("c", strtotime("now"));

		$json_data = json_encode([
			// Message
			"content" => "",

			// Text-to-speech
			"tts" => false,

			// Embeds Array
			"embeds" => [
				[
					// Embed Title
					"title" => "Un individuo/empresa desea contactar con HASHRATE STUDIOS",

					// Embed Type
					"type" => "rich",

					// Embed Description
					"description" => "A continuación se listarán los datos de contacto:",

					// Timestamp of embed must be formatted as ISO8601
					"timestamp" => $timestamp,

					// Embed left border color in HEX
					"color" => hexdec( "ffbc75" ),

					// Additional Fields array
					"fields" => [
						// Field 1
						[
							"name" => "Dirección de correo electrónico 📬",
							"value" => "$email",
							"inline" => true
						],

						// Field 2
						[
							"name" => "Idioma de contacto 🏳️",
							"value" => "$contact_lang",
							"inline" => true
						]
					]
				]
			]

		], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


		$ch = curl_init( $webhook_url );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

		$response = curl_exec( $ch );
		curl_close( $ch );
	}
?>
