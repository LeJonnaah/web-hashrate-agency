<?php
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	require './PHPMailer/Exception.php';
	require './PHPMailer/PHPMailer.php';
	require './PHPMailer/SMTP.php';

	function sendMailAllData($name, $email, $information) {
		
		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
			$mail->SMTPDebug = false;                      //Enable verbose debug output (default: SMTP::DEBUG_SERVER)
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'localhost';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = false;                                   //Enable SMTP authentication
			$mail->Username   = 'user@example.com';                     //SMTP username
			$mail->Password   = 'secret';                               //SMTP password
			$mail->SMTPSecure = false;            //Enable implicit TLS encryption (default: PHPMailer::ENCRYPTION_SMTPS)
			$mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` (default: 465)

			//Recipients
			// $mail->setFrom('web@hashratestudios.com', 'HASHRATE STUDIOS');
			// $mail->setFrom('web@localhost/hashrate/', 'HASHRATE AGENCY');
			$mail->setFrom('http://127.0.0.1:5500/index.html', 'HASHRATE AGENCY');
			// $mail->addAddress('hi@hashratestudios.com');     //Add a recipient
			$mail->addAddress('jonathanandueza1201@gmail.com');     //Add a recipient

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = "Acaban de contactar con HASHRATE AGENCY";
			$mail->Body    = "
				<html>
					<head>
						<link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" />
						<style>
							body {
								font-family: 'Lato', sans-serif;
							}
						</style>
					</head>
					<body>
						<li><b>Nombre 🗒️:</b> $name</li>
						<br>
						<li><b>Dirección de correo electrónico 📬:</b> $email</li>
						<br>
						<li><b>Información de contacto ✍️:</b> $information</li>
					</body>
				</html>
			";
			$mail->AltBody = "Nombre: $name - Dirección de correo electrónico: $email - Información de contacto: $information";

			$mail->send();
			//echo 'Message has been sent';
			return true;
		} catch (Exception $e) {
			//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			return false;
		}
	}

	function sendMailEmailOnly($email) {
		
		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
			$mail->SMTPDebug = false;                      //Enable verbose debug output (default: SMTP::DEBUG_SERVER)
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'localhost';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = false;                                   //Enable SMTP authentication
			$mail->Username   = 'user@example.com';                     //SMTP username
			$mail->Password   = 'secret';                               //SMTP password
			$mail->SMTPSecure = false;            //Enable implicit TLS encryption (default: PHPMailer::ENCRYPTION_SMTPS)
			$mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` (default: 465)

			//Recipients
			// $mail->setFrom('web@hashratestudios.com', 'HASHRATE STUDIOS');
			// $mail->setFrom('web@localhost/hashrate/', 'HASHRATE AGENCY');
			$mail->setFrom('http://127.0.0.1:5500/index.html', 'HASHRATE AGENCY');
			// $mail->addAddress('hi@hashratestudios.com');     //Add a recipient
			$mail->addAddress('jonathanandueza1201@gmail.com');     //Add a recipient

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = "Un individuo/empresa desea contactar con HASHRATE STUDIOS";
			$mail->Body    = "
				<html>
					<head>
						<link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" />
						<style>
							body {
								font-family: 'Lato', sans-serif;
							}
						</style>
					</head>
					<body>
						<li><b>Dirección de correo electrónico 📬:</b> $email</li>
					</body>
				</html>
			";
			$mail->AltBody = "Dirección de correo electrónico: $email";

			$mail->send();
			//echo 'Message has been sent';
			return true;
		} catch (Exception $e) {
			//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			return false;
		}
	}
?>
