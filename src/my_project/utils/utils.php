<?php
    function (string $className) {
        require_once __DIR__.'/src/'.str_replace('\\', '/', $className).'.php';
    }
?>