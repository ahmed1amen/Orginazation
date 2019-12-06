<?php


$smt = DBClass::$con->prepare("SELECT employee_name From employee_data");

$smt->execute();

$rows = $smt->fetchAll();


foreach ($rows as $row) {

    echo ' <option>' . $row['employee_name'] . '</option>';
}


?>




