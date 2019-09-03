<?php

    class Database{
        
        private static $dbHost = "localhost";
        private static $dbName = "cvbastie_burgerFood";
        private static $dbuser = "cvbastie_Bastie";
        private static $dbUserPasswd= "151092Br.";
        private static $connection = null;

        public static function connect(){
            try{
                self::$connection= new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbuser, self::$dbUserPasswd);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
            return self::$connection;
        }
        
        public static function disconnect(){
            self::$connection = null;
        }

    }

    Database::connect();
 


?>