<?php
    class Request
    {
        public $url;

        public function __construct()
        {
            $this->url = isset($_GET['url']) ? $_GET['url'] : '';
        }
    }

?>