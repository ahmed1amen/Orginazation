<?php
session_start();


if ($_SESSION['UserType'] == 'employee' ){

    session_destroy();
    header('Location:EmpLogin.php');


}
else

{

    session_destroy();
    header('Location:Login.php');
}





exit();