<?php
include('connect.php');

$userpass=$_GET['id'];

$sql="UPDATE customer SET fileupload='' WHERE password='$userpass'  ";
$result=mysqli_query($con,$sql);
if($result){
  echo "<script type='text/javascript'>";
  echo "alert('tiav lawm');";
  echo "window.location = 'selectacount.php?id=$userpass'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('muaj qhees yam tsi yog lawm');";
  echo "window.location = 'selectacount.php?id=$userpass'; ";
  echo "</script>";
 }
 ?>