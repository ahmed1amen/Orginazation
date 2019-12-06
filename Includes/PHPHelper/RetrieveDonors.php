<?php
/**
 * Created by PhpStorm.
 * User: Dr.Ahmed Amen
 * Date: 11/1/2019
 * Time: 10:25 AM
 */


if (isset($_GET["P1"])) {


    if (!file_exists("config.php")) {
        include dirname(__DIR__) . '/config.php';
        DBClass::connect();
    }

}
$smt = DBClass::$con->prepare("SELECT Donner_Name From donors");

$smt->execute();

$rows = $smt->fetchAll();


foreach ($rows as $row) {

    echo ' <option>' . $row['Donner_Name'] . '</option>';
}


?>




