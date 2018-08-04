<?php
require '../vendor/autoload.php';
require '../src/dispatcher.php';

$dispatch = new Dispatcher();
$dispatch->dispatch();
?>