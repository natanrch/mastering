<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

spl_autoload_register('carregarClasse');

function carregarClasse($nomeClasse) {
	if (file_exists('classes/'.$nomeClasse.'.php')) {
		require_once 'classes/'.$nomeClasse.'.php';
	}
}