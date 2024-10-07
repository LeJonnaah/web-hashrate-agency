<?php

	// Handler para acceder a los diversos valores en el archivo de configuración en cualquier parte del código.

	function getVideoId($int, $where) {
		if ($where == "index") {
			$data = file_get_contents('./assets/settings.json'); 
		} else {
			$data = file_get_contents('../settings.json'); 
		}
		$json = json_decode($data);

		return $json->videos[$int]->id;
	}
?>
