<?php
date_default_timezone_set('Europe/Moscow');
setlocale(LC_ALL, 'ru_RU.UTF-8');
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));	
ini_set('error_reporting', E_ERROR | E_WARNING);
ini_set('magic_quotes_runtime', 0); 
ini_set('magic_quotes_sybase', 0);

include_once ROOT.'/src/var.php';
?>