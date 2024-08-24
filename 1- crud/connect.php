<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crudoperation" ;

$conn = mysqli_connect($servername, $username, "", $db_name);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

