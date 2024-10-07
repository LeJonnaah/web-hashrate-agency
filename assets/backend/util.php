<?php

	// Utilidades, para verificar el mail, debugear, etc...

	function consoleLog($msg, $scriptTags) {
		if ($scriptTags) {
			echo "<script>";
		};

		echo "console.log(`$msg`);";

		if ($scriptTags) {
			echo "</script>";
		};
	}

	function isSetAndNotEmpty($var) {
		if (isset($var) && !empty($var)) {
			return true;
		}

		return false;
	}

	function isEmailValid($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		};

		return false;
	}
?>
