<?php
    spl_autoload_register (function (string $className) {
        require_once __DIR__.'/src/'.str_replace('\\', '/', $className).'.php';
    });

    $author = new \my_project\models\user\User(
        'Иван'
    );

    $article = new \my_project\models\article\Article (
        'Заголовок',
        'Lorem ipsum lorem lorem',
        $author
    );

    // $controller = new \my_project\controllers\MainController;

    // if(!empty($_GET['name'])) {
    //     $controller -> sayHello($_GET['name']);
    // } else {
    //     $controller -> main();
    // }

    $route = $_GET['route'] ?? '';

    $routes = require __DIR__.'/src/routes.php';

    $isRouteFound = false;

    foreach ($routes as $pattern => $controllerAndAction) {
        preg_match($pattern, $route, $matches);

        if (!empty($matches)) {
            $isRouteFound = true;
            break;
        }
    }

    if (!$isRouteFound) {
        echo 'page found';
    }
    unset($matches[0]);

    $controllerName = $controllerAndAction[0]; //magic numbers
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName;
    $controller -> $actionName(...$matches);

?>