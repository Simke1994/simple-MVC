<?php

require_once('routes.php');

function __autoload($class_name){
    if(file_exists('./class/'.$class_name.'.php')){
        require_once './class/'.$class_name.'.php';
    }
    else if(file_exists('./controller/'.$class_name.'.php')){
        require_once './controller/'.$class_name.'.php';
    }
}