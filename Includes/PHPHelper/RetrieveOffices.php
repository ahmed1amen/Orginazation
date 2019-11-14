<?php
/**
 * Created by PhpStorm.
 * User: Dr.Ahmed Amen
 * Date: 11/1/2019
 * Time: 10:25 AM
 */

include dirname(__DIR__) . '../../config.php';
$smt = DBClass::$con->prepare("SELECT Office_Name From office_data");

$smt->execute();

$rows = $smt->fetchAll();


foreach ($rows as $row) {

    echo ' <option>' . $row['Office_Name'] . '</option>';
}


?>




