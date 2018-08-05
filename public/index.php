<?php
require '../vendor/autoload.php';
require '../src/dispatcher.php';

define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

$dispatch = new Dispatcher();
$dispatch->dispatch();
?>