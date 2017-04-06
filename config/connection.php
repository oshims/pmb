<?php
$username = "root";
$password = "7Bionic.";
$hostname = "localhost";
$dbname = "uts_dboshi";

$dbhandle = mysql_connect($hostname, $username, $password);
if (!$dbhandle) {
    die('Could not connect: ' . mysql_error());
}
$selected = mysql_select_db($dbname,$dbhandle) or die("Could not select database");
//mysql_close($link);
?>
