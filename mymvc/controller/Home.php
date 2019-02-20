<?php
    class Home extends Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->show_header();
        }
        public function show_header()
        {
            $data['name'] = 'reiner';
            $data['lastname'] = 'asis';
            $this->view->render("header",$data);
        }
    }
?>