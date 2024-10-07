<?php

	// Handler para dividir y verificar la data enviada al back-end.
	// Este archivo se encarga de evitar exploits/ataques y enviarle el feedback al usuario.
	// Así que, por favor, NO TOCAR. Gracias <3.

	// Posibles agregados:
	//	* Verificar la dirección IP de la request. En caso de ser un VPN/Proxy o una IP con ruta de salida a TOR, bloquear la query directamente.
	//		Aunque es bastante overkill si te la ponés a pensar, ya está puesto el captcha...
	//		No es dificil de hacer, pero le podría llegar a agregar un tiempo de espera al usuario hasta que se complete la request...

	/*
		Códigos (ints) de callback y significados:
		0 = success | 1 = invalid captcha | 2 = invalid email | 3 = invalid data | 999 = unknown error
	*/

	// Verificamos que la request sea POST.
	// A su vez, nos aseguramos de que cierta información obligatoria haya sido enviada en el form-data
	if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['contactForm']) && isset($_POST['mail']) && isset($_POST['captcha'])) {
		
		// Definimos el header (se utilizará la para la respuesta al front-end) e importamos las dependencias
		header('Content-type: application/json');
		require('./hcaptcha.php');
		require('./util.php');
		require('./contact-handler.php');

		// Verificamos la autenticidad del token asignado por el captcha
		if (!hCaptcha($_POST['captcha'])) {
			$response = array('code' => 1);
			echo json_encode($response);
			return;
		}

		// Verificamos la validez del email
		if (!isEmailValid($_POST['mail'])) {
			$response = array('code' => 2);
			echo json_encode($response);
			return;
		}
		
		// Dividimos las request entre ambos formularios.
		// En este caso, esta condición corresponde al footer (formulario de contacto)
		if ($_POST['contactForm'] === "true") {

			// Evitamos un posible ataque (o un error del usuario) basado en la falta de datos de una query (podría floodear los logs de error de PHP)
			if (isSetAndNotEmpty($_POST['name']) && isSetAndNotEmpty($_POST['information'])) {
				
				// Enviamos la payload con los datos a otra parte del back-end
				// Este formulario corresponde al footer
				contactFormAllData($_POST['name'], $_POST['mail'], $_POST['information']);
				$response = array('code' => 0);
				echo json_encode($response);
				return;
			}

			// Faltan datos por parte del cliente
			$response = array('code' => 3);
			echo json_encode($response);
			return;
		}

		// Lo mismo de antes, pero para el otro formulario (index/main/principal)
		if ($_POST['contactForm'] === "false") {

			// Enviamos la payload con los datos a otra parte del back-end
			// Este formulario corresponde al index/main (principio de la página)
			contactFormMailOnly($_POST['mail']);
			$response = array('code' => 0);
			echo json_encode($response);
			return;
		}

		// Este código jamás debería ser ejecutado, posiblemente se trate de un atacante.
		$response = array('code' => 999);
		echo json_encode($response);
		return;
	}
?>
