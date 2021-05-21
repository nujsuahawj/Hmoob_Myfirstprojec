<?php
include('connect.php');

$userpass=$_GET['id'];

$sql="UPDATE customer SET fileupload='' WHERE password='$userpass'  ";
$result=mysqli_query($con,$sql);
if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ສຳເລັດແລ້ວ');";
  echo "window.location = 'selectacountl.php?id=$userpass'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ເກີດຂໍ້ຜິດພາບ');";
  echo "window.location = 'selectacountl.php?id=$userpass'; ";
  echo "</script>";
 }
 ?>