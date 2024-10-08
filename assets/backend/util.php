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

	function getUserLanguage() {
		$langs = array();

		if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
			preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i',
			$_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);
			if (count($lang_parse[1])) {
				$langs = array_combine($lang_parse[1], $lang_parse[4]);
				foreach ($langs as $lang => $val) {
					if ($val === '') $langs[$lang] = 1;
				}
				arsort($langs, SORT_NUMERIC);
			}
		}
		foreach ($langs as $lang => $val) { break; }
		if (stristr($lang,"-")) { $tmp = explode("-",$lang); $lang = $tmp[0]; }
		return $lang; 
	}

	function supportedLang($lang) {
		if ($lang == "es" || $lang == "en") {
			return true;
		}

		return false;
	}
?>
