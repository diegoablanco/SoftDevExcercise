<?php
class Router
{
    private $router;
    private $match;

    private function setRoutes(){
        $this->router->map('GET', '/', 'home#index');
        $this->router->map('POST', '/', 'home#filter');
        $this->router->map('GET', 'rankings', 'ranking#get');
    }
    private function setControllerAndAction(){
        if(!$this->match){
            $this->match = $this->getNotFound();
            return;
        }
        [$controller, $action] = explode('#', $this->match['target']);
        $this->match['controller'] = $controller;
        $this->match['action'] = $action;
    }
    private function getNotFound(){
        return [
            'controller' => 'home',
            'action' => 'notFound',
            'params' => []
        ];
    }
    public function match()
    {
        $this->router = new AltoRouter();
        $this->setRoutes();
        $url = isset($_GET['url']) ? $_GET['url'] : '/';
        $this->match = $this->router->match($url);
        $this->setControllerAndAction();
        return $this->match; 
    }
}
?>