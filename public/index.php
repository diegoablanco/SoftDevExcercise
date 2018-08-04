<?php
require '../vendor/autoload.php';
$config = require('../config/config.php');
$klein = new \Klein\Klein();

echo($config['host']);
echo($_GET['url']);

$klein->respond('[**:name]', function ($request) {
    // var_dump($request);
    echo('Route is ' . $request->name);
});
$klein->dispatch();
?>