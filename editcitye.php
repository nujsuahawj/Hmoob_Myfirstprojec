<?php 
include('connect.php');

$userpass=$_GET['id'];

$textcity=$_POST['textcity'];
$sql="UPDATE customer SET 	city='$textcity' WHERE password='$userpass';  ";
$result=mysqli_query($con,$sql);
mysqli_close($con);
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