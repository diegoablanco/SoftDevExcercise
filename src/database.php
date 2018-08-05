<?php
$config = require('../config/config.php');
return new PDO('mysql:host='. $config['host'] .';dbname='. $config['dbname'] .'', $config['user'], $config['pass']);
?>