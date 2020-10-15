<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

include_once ROOT.'/src/config.php';
include_once ROOT.'/src/functions.php';

header("Cache-Control: no-store, no-cache, must-revalidate");

ob_start();
error_reporting(E_ALL);

include ROOT.'/view/header.php';
include ROOT.'/view/page.php';
include ROOT.'/view/footer.php';

$content = ob_get_contents();
ob_end_clean();
echo $content;
?>