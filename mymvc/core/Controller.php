<?php
    class Controller
    {
        function __construct()
        {
            $this->view = new View;
        }
        public function loadmodel($model){
            require 'model/'.$model.'.php';
            $this->model = new $model;
        }
        // public function loadhelper($helper){
        //     require 'helper/'.
        // }
    }
?>