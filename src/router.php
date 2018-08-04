<?php
class Router
{
    static public function parse($url, $request)
    {
        $url = trim($url);
        
        if (empty($url))
        {
            $request->controller = 'indexController';
            $request->action = 'index';
            $request->params = [];
        }
        else
        {
            $segments = explode('/', $url);            
            $request->controller = $segments[0] . 'Controller';
            $request->action = isset($segments[1]) ? $segments[1] : 'index';
            $request->params = array_slice($segments, 2);;
        }

    }
}
?>