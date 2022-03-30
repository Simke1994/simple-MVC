<?php

class PageController {
    public static function CreateView($viewName){
        require_once ("./folder1/$viewName.php");
    }
    public static function CreateAnotherView($viewName){
        require_once ("./folder2/$viewName.php");
    }
}

?>