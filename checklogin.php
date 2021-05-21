<?php 
session_start();
        if(isset($_POST['email'])){
				//connection
                  include("connect.php");
				//รับค่า user & password
                  $emaill= $_POST['email'];
                  $passwordl= $_POST['password'];
				//query 
                  //$sql="SELECT * FROM User Where Username='".$Username."' and Password='".$Password."' ";

                 // $result = mysqli_query($con,$sql);
                 $query = " SELECT * from customer where password='".$passwordl."' and email='".$emaill."' " 	 or die("Error:" . mysqli_error());;
                 $result = mysqli_query($con, $query);
				
                  if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_array($result);
                    $name_lastname=$row['name_lasname'];
                    $briday=$row['birday'];
                    $email=$row['email'];
                    $password=$row['password'];
                    $vilage=$row['vilage'];
                    $city=$row['city'];
                    $provin=$row['provin'];
                    $tim=$row['tim'];
                    $cardit=$row['cardit'];
                    $numberphome=$row['numberphome'];
                    $duab=$row['fileupload'];
                     $_SESSION["epPassid"] = $row["password"];
                     //$_SESSION["epNameandLastname"] = $row["epNameandLastname"]." ".$row["epEmail"];
                     // $_SESSION["epPass"] = $row["epPass"];

                      if($_SESSION["epPassid"]=="$password"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: selectacount.php?id=$password");}

                      //if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                       // Header("Location: user_page.php");}

                  }else{
                    echo "<script>";
                        echo "alert(\"email and password tsis yog lawm\");"; 
                       echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: index.php"); //user & password incorrect back to login again

        }
?>