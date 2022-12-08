<?php
require_once '../app/config/config.php';
require_once '../app/helpers/session.php';
require_once '../app/helpers/redirect.php';


spl_autoload_register(function($classname){
    require_once '../app/libraries/' . $classname . '.php';
});