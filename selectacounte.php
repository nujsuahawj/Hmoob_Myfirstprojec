<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/desigstype.css">
</head>
<body>
    <?php 
    include('connect.php');

    $userpass=$_GET['id']; 

    $query = " SELECT * from customer where password='".$userpass."' " 	 or die("Error:" . mysqli_error());;
    $result = mysqli_query($con, $query);
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
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <?php echo"<img src='img/".$duab."' id='profile' class='img-thumbnail' alt='Teeb Koj Lis Duab Txaw Rau Koom Neeg Pom Koj Lawm Thiaj Lis Paub Koj' ><br>";
                echo "<form method='POST' enctype='multipart/form-data' action='editimgl.php?id=$userpass'>";?>
                <div class="input-group mb-3" id="inputfile">
                    <div class="form-file">
                      <input type="file" name="fileupload" class="form-file-input" id="inputGroupFile02"  accept="image/*">
                      <label class="form-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                        <span class="form-file-text">ເລືອກຮູບ</span>
                      </label>
                    </div>
                    <button type="submit" class="btn btn-info">ບັນທຶນ</button>
                    <?php echo"<a href='deleteimgl.php?id=$userpass'><button type='button' class='btn btn-danger'>potseg</button></a>" ?>
                    <a href="indexl.html"><button type="button" class="btn btn-light">ອອກຈາກລະບົບ</button></a>
                </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-8">
                <div class="row">
                    <div class="col">
                        <br><br><br>
                     <h2 class="showname"><?php echo"$name_lastname"; ?></h2>
                     <br>
                     <?php echo" <form method='POST' action='edittiml.php?id=$userpass'>"; ?>
                                   <a>
                                     <p>ປ້ອນແລະອະທິບາຍ ເວລາເຮັດວຽກຂອງທ່ານ</p>
                                     <textarea name="texttime" rows="2" cols="50"  placeholder="ປ້ອນແລະອະທິບາຍ ເວລາເຮັດວຽກຂອງທ່ານ"><?php echo"$tim" ?></textarea>
                                     <br>
                                     <button type="submit" class="btn btn-light">ບັນທຶນ</button><br><br>
                                   </a>
                                 </form>
                     <?php echo" <form method='POST' action='editvilagel.php?id=$userpass'>"; ?>
                                   <a>
                                     <p>ບ້ານຂອງທ່ານ</p>
                                     <textarea name="textvilage" rows="1" cols="30"  placeholder="ບ້ານຂອງທ່ານ"><?php echo"$vilage" ?></textarea>
                                     <br>
                                     <button type="submit" class="btn btn-light">ບັນທຶນ</button><br><br>
                                   </a>
                                 </form>
                     <?php echo" <form method='POST' action='editcityl.php?id=$userpass'>"; ?>
                                   <a>
                                     <p>ເມື່ອງຂອງທ່ານ</p>
                                     <textarea name="textcity" rows="1" cols="30"  placeholder="ເມື່ອງຂອງທ່ານ"><?php echo"$city" ?></textarea>
                                     <br>
                                     <button type="submit" class="btn btn-light">ບັນທຶນ</button><br><br>
                                   </a>
                                 </form>
                     <?php echo" <form method='POST' action='editprovinl.php?id=$userpass'>"; ?>
                                   <a>
                                     <p>ແຂວງຂອງທ່ານ</p>
                                     <textarea name="textprovin" rows="1" cols="30"  placeholder="ແຂວງຂອງທ່ານ"><?php echo"$provin" ?></textarea>
                                     <br>
                                     <button type="submit" class="btn btn-light">ບັນທຶນ</button><br><br>
                                   </a>
                                 </form>
                     <?php echo" <form method='POST' action='editnunberphomel.php.?id=$userpass'>"; ?>
                                   <a>
                                     <p>ເບີໂທລະສັບຂອງທ່ານ</p>
                                     <textarea name="textnunberphome" rows="1" cols="30"  placeholder="ເບີໂທລະສັບ"> <?php echo"$numberphome"; ?></textarea><br>
                                     <button type="submit" class="btn btn-light">ບັນທຶນ</button><br><br>
                                    </a>
                                 </form>
                     <br>
                     <?php echo"<form method='POST' action='editcarditl.php?id=$userpass'>";?>
                                <a>
                                  <p>ເລກບັດ ເຄດິດຂອງທ່ານ</p>
                                   <textarea name="textcardit"  rows="1" cols="30"  placeholder="ເຄດີດ"> <?php echo"$cardit"; ?></textarea><br>
                                   <button type="submit" class="btn btn-light">ບັນທຶນ</button><br><br>
                                </a>    
                              </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row" id="textfoodter">
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm">
                <i class="fas fa-hand-holding-heart" id="logokawg" ></i><br>
                <h5><b class="logoplogteb">Nriav Tus Hlub <span>Plog Teb</span></b><br></h5>
                <p>Copyright &copy; 2021&middot; nujsua hawj &middot; <a href="https://mail.google.com/mail/u/0/#inbox">nousuasainther@gmail.com</a></p>
              </div>
              <div class="col-sm"></div>
            </div>
          </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/design.js"></script>
</body>
</html>