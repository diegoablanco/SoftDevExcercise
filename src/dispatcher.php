<?php
require('request.php');
require('router.php');

class Dispatcher
{
    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $controller = $this->request->controller;
        $file = 'controllers/' . $controller . '.php';
        require($file);
        $controller = new $controller();
        return $controller;
    }

}
?>