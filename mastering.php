<?php

require_once 'global.php';
require_once 'database.php';
require_once 'conversion.php';

$startTime = new DateTime();
echo "Started at: ".$startTime->format('Y-m-d H:i:s')."\n";
echo "Counting work time...\n";

do {
	$finish = readline("Type 's' to stop the counter: ");
} while ($finish != 's');

$endTime = new DateTime();

$diff = $endTime->diff($startTime, true);

echo "Hours: ".$diff->h."\n";
echo "Minutes: ".$diff->i."\n";
echo "Seconds: ".$diff->s."\n";

$totalSec = convertToSec($diff->h, $diff->i, $diff->s);

$now = time();
$today = date("Y-m-d", $now);


Connection::insert('web_development', $today, $totalSec);
$sum = Connection::selectSum('web_development');
$hoursWorked = calcHoursWorked($sum);

$tables = insertField($totalSec, $today);

foreach ($tables as $t) {
	$tableSum = Connection::selectSum($t);
	echo "Total hours worked with ".$t.": ". calcHoursWorked($tableSum)."\n";
}

echo "Total hours worked as a web developer: ".$hoursWorked."\n";
