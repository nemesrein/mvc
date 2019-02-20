<?php
    class View
    {  
        function __construct(){
        }
        public function render($view,$data=null){
            require 'view/'.$view.'.php';
        }
    }
?>