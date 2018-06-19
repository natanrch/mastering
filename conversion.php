<?php

require_once 'global.php';

function convertToSec($hour, $min, $sec) {
	$hoursToSec = $hour * 3600;
	$minToSec = $min * 60;
	$totalSec = $hoursToSec+$minToSec+$sec;
	return $totalSec;
}

function calcHoursWorked($sum) {
	$sec = $sum[0]["total_sec"];
	$hours = $sec/3600;
	$floorHours = floor($hours);
	return $floorHours;
}