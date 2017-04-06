<?php
$username = "root";
$password = "7Bionic.";
$hostname = "localhost";
$dbname = "uts_dboshi";

$link = mysqli_connect($hostname, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//$dbhandle = mysqli_connect($hostname, $username, $password);
//if (!$dbhandle) {
//    die('Could not connect: ' . mysql_error());
//}
//mysqli_select_db($dbname) or die("Could not select database");
//mysql_close($link);
?>
