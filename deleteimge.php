<?php
include('connect.php');

$userpass=$_GET['id'];

$sql="UPDATE customer SET fileupload='' WHERE password='$userpass'  ";
$result=mysqli_query($con,$sql);
if($result){
  echo "<script type='text/javascript'>";
  echo "alert('finish');";
  echo "window.location = 'selectacounte.php?id=$userpass'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error change to again');";
  echo "window.location = 'selectacounte.php?id=$userpass'; ";
  echo "</script>";
 }
 ?>