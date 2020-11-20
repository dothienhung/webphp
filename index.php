<?php
    session_start();
    require_once('./backend/Brige.php');
    $controllerName = ($_REQUEST['controller']??'Welcome') .'Controller';
    $actionName = ($_REQUEST['action']??'getAllPost') ;
    require "./backend/controllers/${controllerName}.php";
    $controlObject = new $controllerName;
    $controlObject ->$actionName();
;?>