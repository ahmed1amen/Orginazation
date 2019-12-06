<?php
/**
 * Created by PhpStorm.
 * User: Dr.Ahmed Amen
 * Date: 11/1/2019
 * Time: 10:25 AM
 */


$smt = DBClass::$con->prepare("SELECT employee_name From employee_data");

$smt->execute();

$rows = $smt->fetchAll();


foreach ($rows as $row) {

    echo ' <option>' . $row['employee_name'] . '</option>';
}


?>




