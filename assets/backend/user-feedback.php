<?php

	// Diversas funciones para facilitarme la vida a la hora de enviar feedback al usuario :P

	function invalidData($scriptTags, $lang) {
		if ($scriptTags) {
			echo "<script>";
		};

		if ($lang == "es") {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Datos incompletos',
				text: 'Por favor, completa todos los datos para continuar.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";
		} else {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Incomplete data',
				text: 'Please complete all the information to continue.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Close'
			})
			";
		}

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function invalidEmail($scriptTags, $lang) {
		if ($scriptTags) {
			echo "<script>";
		};

		if ($lang == "es") {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Correo electrónico inválido',
				text: 'Por favor, utiliza un correo electrónico válido.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";
		} else {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Invalid email',
				text: 'Please use a valid email address.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Close'
			})
			";
		}

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function invalidCaptcha($scriptTags, $lang) {
		if ($scriptTags) {
			echo "<script>";
		};

		if ($lang == "es") {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Captcha inválido',
				text: 'Por favor, intenta nuevamente.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";
		} else {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Invalid captcha',
				text: 'Please try again.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Close'
			})
			";
		}

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function unknownError($scriptTags, $lang) {
		if ($scriptTags) {
			echo "<script>";
		};

		if ($lang == "es") {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Error desconocido',
				text: 'Hubo un error desconocido, por favor intenta nuevamente.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";
		} else {
			echo "
			Swal.fire({
				icon: 'error',
				title: 'Unknown error',
				text: 'There was an unknown error, please try again.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Close'
			})
			";
		}

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function successForm($scriptTags, $lang) {
		if ($scriptTags) {
			echo "<script>";
		};

		if ($lang == "es") {
			echo "
			Swal.fire({
				icon: 'success',
				title: '¡Enviado!',
				text: 'Tus datos han sido enviados satisfactoriamente.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";
		} else {
			echo "
			Swal.fire({
				icon: 'success',
				title: 'Sent!',
				text: 'Your data has been sent successfully.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Close'
			})
			";
		}

		if ($scriptTags) {
			echo "</script>";
		};
	}


?>
