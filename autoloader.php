<?php
spl_autoload_register(function ($class) {
    $prefix = 'Whiteplaid\\';
    $baseDir = __DIR__ . '/classes/';
    $len = strlen($prefix);
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});