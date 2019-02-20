<?php
    class Inventory extends Controller{
        function __construct(){
            parent::__construct();
            $this->loadmodel("inventory_model");
            $this->model->hello();
        }
    }
?>