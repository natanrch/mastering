<?php

require_once 'global.php';

$startTime = new DateTime();
echo "Started at: ".$startTime->format('Y-m-d H:i:s')."\n";
echo "Counting work time...\n";

do {
	$finish = readline("Type 's' to stop the counter:");
} while ($finish != 's');

$endTime = new DateTime();

$diff = $endTime->diff($startTime, true);

// echo "Hours: ".$diff->h."\n";
// echo "Minutes: ".$diff->i."\n";
// echo "Seconds: ".$diff->s."\n";

$hoursToSec = $diff->h * 3600;
$minToSec = $diff->i * 60;
$sec = $diff->s;

$totalSec = $hoursToSec+$minToSec+$sec;



insertField($totalSec);

Connection::insert('web_development', '2018-06-18', $totalSec);

function insertField($totalSec) {
	$field = null;
	while ($field == null) {

		echo "Choose the field:\n";
		$option = readline("1 - Coding 	2 - UX    3 - SEO    4 - Engineering\n");

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
			default:
				$field = null;
				echo "Please, choose the right field\n";
		}
	}
	Connection::insert($field, '2018-06-18', $totalSec);
	echo "Chosen field: ".$field."\n";
	if ($field == 'coding') {
		insertLanguage($totalSec);
	}

	return $field;
}

function insertLanguage($totalSec) {
	$language = null;
	while ($language == null) {

		echo "Choose the language:\n";
		$option = readline("1 - PHP    2 - Java\n");

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
	Connection::insert($language, '2018-06-18', $totalSec);
	echo "Chosen language: ".$language."\n";
}

