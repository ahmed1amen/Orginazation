<?php

class DBClass
{
    public static $dsn = 'mysql:host=localhost;dbname=orgdb';
    public static $usr = 'root';
    public static $pass = '123456';
    public static $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    public static $con;

    public static function connect()
    {
        try {
            DBClass::$con = new PDO(DBClass::$dsn, DBClass::$usr, DBClass::$pass, DBClass::$option);
            DBClass::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo 'Failed To Connect ' . $e->getMessage();
        }

    }


}

?>