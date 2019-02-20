<?php
    Class Inventory_model extends Model
    {
        function __construct()
        {
            echo 'inventory model';
            parent::__construct();
        }
        public function hello(){
            echo 'hello';
        }
    }
?>