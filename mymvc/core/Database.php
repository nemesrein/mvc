<?php
    class Database{
        private $localhost = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'persweb';
        function __construct()
        {
            $conn = new mysqli($this->localhost,$this->username,$this->password,$this->database);
            if($conn)
            {
                return $conn;
            }
        }
    }
?>