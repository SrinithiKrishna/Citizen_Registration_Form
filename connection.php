<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="myform";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo("connection failed!" .mysqli_connect_error());
} 
else
	echo("connection created");
?>