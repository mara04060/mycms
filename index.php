<?php

;

error_reporting(-1);

    //load all classes
    function my_autoloader($class)
    {
        $file_class =  __DIR__.'/' . $class . '.php';
        $file_class = str_replace('\\','/', $file_class);
        if(file_exists($file_class))
        {
            require_once($file_class);
        }
    }
    spl_autoload_register('my_autoloader');


    $route = $_GET['route'] ?? '';

    $setting = Services\Settings::getInstance();
// All route
    $routes = $setting->setting['routes'];

    $isRouteFound = false;
    foreach ($routes as $pattern => $controllerAndAction) {
        preg_match($pattern, $route, $matches);
        if (!empty($matches)) {
            $isRouteFound = true;
            break;
        }
    }

    if (!$isRouteFound) {
        header("HTTP/1.0 404 Not Found");
        $template = new \View\Template(__DIR__.'/View/');
        return $template->renderHtml('404.php', ['data' => '404']);
    }

    unset($matches[0]);

    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];


    $controller = new $controllerName();
    $news = $controller->$actionName(...$matches);