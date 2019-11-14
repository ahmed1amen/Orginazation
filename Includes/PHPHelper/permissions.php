<?php
/**
 * Created by PhpStorm.
 * User: Dr.Ahmed Amen
 * Date: 11/14/2019
 * Time: 5:32 PM
 */

class permissions extends DBConfig
{


    public function hasPermission($username)
    {

        include dirname(__DIR__) . '../../config.php';

        $smt = DBClass::$con->prepare("SELECT Donner_Name From donors");


        return true;


    }


}