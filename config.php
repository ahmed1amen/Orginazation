<?php
/*Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');
define('DB_NAME', 'orgdb');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
*/
$dsn = 'mysql:host=localhost;dbname=orgdb';
$usr = 'root';
$pass = '123456';

$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $con = new PDO($dsn, $usr, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 'YOU Are Connected';

}
catch (PDOException $e)
{
    echo 'Failed To Connect '. $e->getMessage();
}

?>