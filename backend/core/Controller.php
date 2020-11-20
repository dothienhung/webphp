<?php
//File controller tao ra de rewrite model va view vao controller
class Controller {

    public function getModel($model){

        require_once "./backend/models/".$model.".php";
        return new $model;

    }

    public function getView($view,$context =[]){

        require_once "./backend/views/".$view.".php";
        
    }
}
;?>