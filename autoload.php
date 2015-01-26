<?php

spl_autoload_register(function($className)
{
    $class = __DIR__ . '/' . str_replace("Repartee\\", '', $className) . '.php';

    # Check if Class Exists & Include
    if (file_exists($class))
        require($class);
});
