<?php
    class Controller {
        public static function CreateView($viewName){
            // echo "View created!!!";
            require_once("./Views/$viewName.php");
        }
    }
?>