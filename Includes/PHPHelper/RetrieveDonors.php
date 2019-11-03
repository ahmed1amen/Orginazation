<?php
/**
 * Created by PhpStorm.
 * User: Dr.Ahmed Amen
 * Date: 11/1/2019
 * Time: 10:25 AM
 */

include dirname(__DIR__) . '../../config.php';
$smt = $con->prepare("SELECT Donner_Name From donors");

$smt->execute();

$rows = $smt->fetchAll();


foreach ($rows as $row) {

    echo ' <option>' . $row['Donner_Name'] . '</option>';
}


?>




