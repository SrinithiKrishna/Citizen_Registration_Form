<?php
include_once('connection.php');
error_reporting(1);
if($_POST['submit'])
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	$phone = $_POST['phno'];
	$aadhar = $_POST['adno'];
	$passport = $_POST['passno'];
	$email= $_POST['email'];
	$gender= $_POST['gender'];
	$address=$_POST['address'];
	$ch=$_POST['ch'];
	$question=implode(",",$ch);
	echo($question);
	$medical=$_post["medical"];
	$r=mysqli_query("SELECT * FROM register where email='{$_POST['email']}'");
	$t=mysqli_num_rows($r);
	if($t==1)
	{
		$err="This Email id already registered";
		echo($err);
	}
	elseif($t==0)
	{
		$que = "INSERT INTO register VALUES ('$name','$password','$phone','$aadhar','$passport','$email','$gender','$address''$question','$medical')";
		$data = mysqli_query($conn, $que);
	
		if($data)
			{
				
				echo "<script>alert('Thanks for taking up this form!!registered successfully')</script>﻿";
			header("location:welcome.php");
			
			}
	}
	else
	{
		echo("Error description: " . mysqli_error($conn));
	}
}
?>
