<?php
    class Route{
        function __construct()
        {
            $this->get_controller();
        }
        public function get_controller()
        {
            if(!empty($_SERVER['PATH_INFO']))
            {
                $this->search_controller();
            }
            else
            {
                $this->default_controller();
            }
        } 
        public function default_controller()
        {
            include "controller/home.php";
            $controller = new Home;
        }
        public function search_controller()
        {
            $url = explode('/',$_SERVER['PATH_INFO']);
            $length = count($url);
            if($length >= 4 && file_exists("controller/".$url[1].".php"))
            {
                require "controller/".$url[1].".php";
                $controller = new $url[1];
                $method = $url[2];
                $controller->$method($url[3]);
            }
            else if($length === 3 && file_exists("controller/".$url[1].".php"))
            {
                require "controller/".$url[1].".php";
                $controller = new $url[1];
                $method = $url[2];
                $controller->$method();
            }
            else if($length === 2 && file_exists("controller/".$url[1].".php"))
            {
                require "controller/".$url[1].".php";
                $controller = new $url[1];
            }
            else{
                require 'controller/Errored.php';
                $controller = new Errored;
            }
        }
    }
    $routes = new Route;
?>