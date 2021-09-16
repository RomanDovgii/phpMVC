<?php
    namespace my_project\controllers;

    class MainController {
        public function main() {
            include __DIR__ . '\..\..\templates\main.php';
        }

        public function sayHello (string $name) {
            echo 'Hello,' . $name;
        }
    }
?>