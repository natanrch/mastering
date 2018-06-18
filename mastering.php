<?php

$startTime = new DateTime();
echo "Started at: ".$startTime->format('Y-m-d H:i:s')."\n";
echo "Counting work time...\n";

do {
	$finish = readline("Type 's' to stop the counter:");
} while ($finish != 's');

$endTime = new DateTime();
//var_dump($endTime->diff($startTime, true));

$diff = $endTime->diff($startTime, true);

echo "Horas: ".$diff->h."\n";
echo "Minutos: ".$diff->i."\n";
echo "Segundos: ".$diff->s."\n";

$hoursToSec = $diff->h * 3600;
$minToSec = $diff->i * 60;
$sec = $diff->s;

$totalSec = $hoursToSec+$minToSec+$sec;

echo "Segundos totais:".$totalSec."\n";