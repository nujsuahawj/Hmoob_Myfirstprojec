<?php 
include('connect.php');


$userpass=$_GET['id'];

$fileupload =(isset($_POST['fileupload'])?$_POST['fileupload'] : ''); 	

date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	

$numrand = (mt_rand());

$upload=$_FILES['fileupload'];
if($upload !='') {   

$path="img/";  


$type = strrchr($_FILES['fileupload']['name'],".");


$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="img/".$newname;
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);}

$sql = "UPDATE customer SET fileupload='$newname' WHERE password='$userpass'";
       
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
   
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
    echo "</script>";
  }
?>