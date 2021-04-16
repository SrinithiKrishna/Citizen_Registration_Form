<?php
error_reporting(1);
include_once('connection.php');
session_start();
if($_POST['submit'])
{
  if($_POST['id']=="" || $_POST['pwd']=="")
  {
    $err="fill your id and password first";
    echo($err);
  }
  else
  {
  //$lid = $_POST['id'];
  $eid = stripslashes($_REQUEST['id']);
  $que= "SELECT email,password FROM login where email='$eid'";
  $data = mysqli_query($conn, $que);
  if($data)
    {
      $row=mysqli_fetch_object($data);
      $fid=$row->email;
      $fpass=$row->password;
      if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
      {
        echo "<h1>Login Successfull! Welcome user<a href = 'welcome.html'> </a></h1>﻿";
      }
      else
      {
        echo "<h1>Login denied!!invalid username and password..</h1>";
      }
    }
}
}

?>

