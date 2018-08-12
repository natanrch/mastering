<?php
require_once 'global.php';

function insertField($totalSec, $today) {
	$field = null;
	while ($field == null) {

		echo "Choose the field:\n";
		$option = readline("1 - Coding    2 - UX    3 - SEO    4 - Engineering: ");

		switch ($option) {
			case 1:
				$field = 'coding';
				break;
			case 2:
				$field = 'ux';
				break;
			case 3:
				$field = 'seo';
				break;
			case 4:
				$field = 'engineering';
				break;
			case 5:
				$field = 'design';
			case 6: 
				$field = 'wordpress';
			default:
				$field = null;
				echo "Please, choose the right field\n";
		}
	}
	Connection::insert($field, $today, $totalSec);
	echo "Choosen field: ".$field."\n";
	if ($field == 'coding') {
		$language = insertLanguage($totalSec, $today);
		return array($field, $language);
	}
	return array($field);
}

function insertLanguage($totalSec, $today) {
	$language = null;
	while ($language == null) {

		echo "Choose the language:\n";
		$option = readline("1 - PHP    2 - Java: ");

		switch ($option) {
			case 1:
				$language = 'php';
				break;
			case 2:
				$language = 'java';
				break;
			default:
				$language = null;
				echo "Please, choose the right language\n";
		}
	}
	Connection::insert($language, $today, $totalSec);
	echo "Choosen language: ".$language."\n";
	return $language;
}
