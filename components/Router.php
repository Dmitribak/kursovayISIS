<?php

class Router
{
    private $routes;

    //подключаем маршруты, из адресной строки
    public function _construct()
    {
        $routesPath = ROOT.'config/routes.php';
        $this->routes = include($routesPath);
    }

    //получаем частmь URI
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    // Основная часть роутера
    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("`$uriPattern`", $uri)) {

                //получаем внутренний путь
                $internalRoute = preg_replace("`$uriPattern`", $path, $uri);

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'actoin'.ucfirst(array_shift($segments));

                $parametrs = $segments;

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parametrs);

                if ($result != null) {
                    break;
                }
            }
        }
    }
}