<?php 
include('connect.php');

$userpass=$_GET['id'];

$textvilage=$_POST['textvilage'];
$sql="UPDATE customer SET 	vilage='$textvilage' WHERE password='$userpass';  ";
$result=mysqli_query($con,$sql);
mysqli_close($con);
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