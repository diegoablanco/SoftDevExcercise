<?php
require '../vendor/autoload.php';
require '../src/dispatcher.php';
phpinfo();
$dispatch = new Dispatcher();
$dispatch->dispatch();
?>