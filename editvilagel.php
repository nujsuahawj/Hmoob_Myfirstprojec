<?php 
include('connect.php');

$userpass=$_GET['id'];

$textvilage=$_POST['textvilage'];
$sql="UPDATE customer SET 	vilage='$textvilage' WHERE password='$userpass';  ";
$result=mysqli_query($con,$sql);
mysqli_close($con);
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