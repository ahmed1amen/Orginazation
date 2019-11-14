<?php
/**
 * Created by PhpStorm.
 * User: Dr.Ahmed Amen
 * Date: 11/1/2019
 * Time: 10:25 AM
 */

include dirname(__DIR__) . '../../config.php';


$smt = DBClass::$con->prepare("SELECT Group_Name From groups");

$smt->execute();

$rows = $smt->fetchAll();


foreach ($rows as $row) {

    echo ' <option>' . $row['Group_Name'] . '</option>';
}


?>




