<?php

function __autoload($class_name)
{
    //class directories
    $directorys = array(
        'config/',
        'model/',
        'controller/'
    );

    //for each directory
    foreach($directorys as $directory)
    {
        if(file_exists($directory.$class_name . '.php'))
        {
            require_once($directory.$class_name . '.php');
            return;
        }
    }
}