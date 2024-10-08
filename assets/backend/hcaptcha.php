<?php

	// Mejor hacer una función para verificar el captcha, más fácil y lo puedo llamar desde cualquier parte del código :D
	
	function hCaptcha($hcaptcha) {
		$secret = "0x0000000000000000000000000000000000000000";
	
		$data = array(
			'secret' => $secret,
			'response' => $hcaptcha
		);
	
		$verify = curl_init();
		curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
		curl_setopt($verify, CURLOPT_POST, true);
		curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($verify);
				
		$responseData = json_decode($response);
		$success = $responseData->success;
	
		return $success;
	}
?>
