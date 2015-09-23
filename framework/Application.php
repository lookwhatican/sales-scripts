<?php

class Application
{
    public function run()
    {
        $router = new Router;
        $arr = $router->parseUrl();
        extract($arr);
        $this->callController($controller, $method, $param);
    }

    public function callController($ctrl, $method, $param = null)
    {
        if(class_exists($ctrl)) {
            $controller = new $ctrl;
        }

        if(method_exists($ctrl, $method)) {
            $controller->$method($param);
        }
    }
}