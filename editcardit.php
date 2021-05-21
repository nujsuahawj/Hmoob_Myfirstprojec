<?php 
include('connect.php');

$userpass=$_GET['id'];

$cardit=$_POST['textcardit'];
$sql="UPDATE customer SET 	cardit='$cardit' WHERE password='$userpass';  ";
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
    echo "alert('muaj qhees yam tsis yog lawm');";
    echo "window.location = 'selectacount.php?id=$userpass'; ";
    echo "</script>";
   }
?>