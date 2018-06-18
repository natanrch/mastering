<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

spl_autoload_register('loadClass');

function loadClass($className) {
	if (file_exists('class/'.$className.'.php')) {
		require_once 'class/'.$className.'.php';
	}
}