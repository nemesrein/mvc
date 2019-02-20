<?php
    class Session{
        public static function init()
        {
            session_start();
        }
        public static function set($key,$value)
        {
            $key = $value;
        }
        public static function get($key)
        {
            return $key;
        }
        public static function unset($key)
        {
            unset($key);
        }
        public static function destroy()
        {
            session_destroy();
        }
    }
?>