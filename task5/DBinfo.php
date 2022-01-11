<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="php_mys_conn";

$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(!$conn){
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>