<?php
class rankingController
{
    function get()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes', [
            'query' => [
                'q' => 'inauthor:Tolkien',
                'maxresults' => '10',
                'orderBy' => 'newest',
                'filter' => 'ebooks'
                ]
        ]);
        $body = json_decode($res->getBody(), true);
        $books = array_map(function($book){
            $volumeInfo = $book['volumeInfo'];
            return [
                'title' => $volumeInfo['title'],
                'previewLink' => $volumeInfo['previewLink']                
            ]; }, 
            $body['items']);
        echo(json_encode($books));
    }
}
?>