<?php

$host = "localhost";
$name = "root";
$pass = "1";
$db = "test";


$con = mysqli_connect($host, $name, $pass) or die ('Database error !.');
mysqli_select_db($con, $db);

/*
//Below others function
$connect = mysqli_connect($host, $name, $pass, $db);
if(!$connect){
    echo "Database Connected Error !.".$connect;
}*/

?>