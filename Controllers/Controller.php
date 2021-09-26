<?php
    class Controller extends Database {

        public static function CreateView($viewName){
            // echo "View created!!!";
            require_once("./Views/$viewName.php");
            static::doSomething();
        }
    }
?>