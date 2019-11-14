<?php
include 'Includes/config.php';
DBClass::connect();
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["Password"])) {


        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        // Check if user in DB
        $stmt = DBClass::$con->prepare("SELECT * FROM Org_Users WHERE username = '$Username' AND Password = '$Password'");
        $stmt->execute();
        $row = $stmt->fetch();

        //Check If User Correct
        if ((count($row['username']) == 1)) {
            $_SESSION['Username'] = $row['username'];   // Register Session Name
            $_SESSION['UserRoles'] = $row['roles'];   // Register UserType
            unset($_SESSION['ERROR']);
            echo "1";
        } else {
            $_SESSION['ERROR'] = "ERROR";
            echo "ERROR";
        }
    }
}
?>





