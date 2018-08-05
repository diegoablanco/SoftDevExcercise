<?php
require('router.php');

class Dispatcher
{
    private $request;

    public function dispatch()
    {
        $router = new Router();
        $match = $router->match();

        $controller = $this->loadController($match['controller']);

        call_user_func_array([$controller, $match['action']], $match['params']);
    }

    public function loadController($controller)
    {
        $controllerName = $controller . 'Controller';
        $file = 'controllers/' . $controllerName . '.php';
        require($file);
        return new $controllerName();
    }

}
?>