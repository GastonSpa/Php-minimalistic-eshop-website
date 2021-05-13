<?php

namespace Core;

use PDO;
use App\Config;

abstract class Model{

    //Get the PDO database connection
    // from root user & password
    protected static function getDb(){
        static $db = null;

        if ($db === null){
            $dsn = "mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME . ";charset=utf8";
            $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $db;
    }

    protected static function addlink2($pdo_array){
        
        foreach ($pdo_array as $key => $value) {
            $value['link'] = '/p?id=' . $value['id'];
        }
        return $pdo_array;
    }

}
// inherit none
// called in App/Controllers/Login