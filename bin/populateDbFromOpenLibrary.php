<?php
require 'vendor/autoload.php';
$db = require('src/database.php');
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