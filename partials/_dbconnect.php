<?php

$che=false;
//function to return conn 

// $server = "localhost";
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "id16023371_info";

$conn = mysqli_connect($server, $username, $password, $database);
// if ($conn -> connect_errno) {
//     echo "##############################################";
//     echo "Failed to connect to MySQL: " . $conn -> connect_error;
//     exit();
//   }
 if (!$conn){

     die("Error". mysqli_connect_error());
 }


?>
