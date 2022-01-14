<?php

namespace App\Core;

class Model{

    private static $instance;

    public static function getConn(){

        if (!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=mvc;', 'root', '');
        endif;
        
        return self::$instance;
    }
}

?>