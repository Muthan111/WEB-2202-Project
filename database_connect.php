<?php

$servername = "localhost";
$uname = "root";
$pass = "";
$dbname = "user";
$conn = mysqli_connect($servername, $uname,$pass,$dbname);

if (!$conn){
    echo "Connection failed";
}
else{
    echo "connection Successfull";
}