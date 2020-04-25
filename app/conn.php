<?php 
$serverName =   "localhost";
$dbName     =   "inegi_datos";
$username   =   "root";
$pass       =   "root";

$conn = mysqli_connect($serverName,$username,$pass,$dbName);

if(!$conn){

    die("Connection Failed : ".mysqli_connect_error());
}
echo "Connection Successfull <br>";






?>