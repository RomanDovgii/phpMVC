<?php
    return [
        '~^hello/(.*)$~' => [\my_project\controllers\MainController::class, 'sayHello'],
        '~^$~' => [\my_project\controllers\MainController::class, 'main'],
    ];
?>