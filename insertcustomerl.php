<?php
include('connect.php');

$name_lastname=$_POST['name_lastname'];
$nunberphome=$_POST['numberphome'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "INSERT INTO customer (name_lasname,numberphome,email,password) VALUES('$name_lastname','$nunberphome','$email','$password')";
 $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);

if($result){
 echo "<script type='text/javascript'>";
 //echo "alert('change image finish');";
 echo "window.location = 'selectacountl.php?id=$password'; ";
 echo "</script>";
 }
 else{
 echo "<script type='text/javascript'>";
 echo "alert('ເກີດຂໍ້ຜິດພາບ');";
 echo "window.location = 'siginl.html'; ";
 echo "</script>";
}
?>