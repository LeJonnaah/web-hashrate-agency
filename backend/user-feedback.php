<?php

	// Diversas funciones para facilitarme la vida a la hora de enviar feedback al usuario :P

	function invalidData($scriptTags) {
		if ($scriptTags) {
			echo "<script>";
		};

			echo "
			Swal.fire({
				icon: 'error',
				title: 'Datos incompletos',
				text: 'Por favor, completa todos los datos para continuar.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function invalidEmail($scriptTags) {
		if ($scriptTags) {
			echo "<script>";
		};

			echo "
			Swal.fire({
				icon: 'error',
				title: 'Correo electrónico inválido',
				text: 'Por favor, utiliza un correo electrónico válido.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function invalidCaptcha($scriptTags) {
		if ($scriptTags) {
			echo "<script>";
		};

			echo "
			Swal.fire({
				icon: 'error',
				title: 'Captcha inválido',
				text: 'Por favor, intenta nuevamente.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function unknownError($scriptTags) {
		if ($scriptTags) {
			echo "<script>";
		};

			echo "
			Swal.fire({
				icon: 'error',
				title: 'Error desconocido',
				text: 'Hubo un error desconocido, por favor intenta nuevamente.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function successForm($scriptTags) {
		if ($scriptTags) {
			echo "<script>";
		};

			echo "
			Swal.fire({
				icon: 'success',
				title: '¡Enviado!',
				text: 'Tus datos han sido enviados satisfactoriamente.',
				confirmButtonColor: '#e19e57',
				confirmButtonText: 'Cerrar'
			})
			";

		if ($scriptTags) {
			echo "</script>";
		};
	}


?>
