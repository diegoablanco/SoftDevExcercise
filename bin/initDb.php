<?php
require 'vendor/autoload.php';

$db = require('src/database.php');
$createTable = "CREATE TABLE `books` ( 
    `id` int(11) NOT NULL,
    `author` varchar(1000) NOT NULL,
    `title` varchar(1000) NOT NULL,
    `publish_year` varchar(10) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$db->query($createTable);

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'http://openlibrary.org/search.json', [
    'query' => ['author' => 'J. R. R. Tolkien']
]);
$body = json_decode($res->getBody(), true);

$insert = $db->prepare("INSERT INTO books SET title = :title, publish_year = :publish_year, author = :author");

foreach ($body['docs'] as $book) {
    $insert->bindValue(':title', $book['title']);
    $insert->bindValue(':publish_year', $book['first_publish_year']);
    $insert->bindValue(':author', $book['author_name'][0]);
    $insert->execute();
};
?>