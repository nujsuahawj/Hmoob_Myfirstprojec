<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show girls ro man</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/desigstype.css">
</head>
<body>
  <?php 
  include('connect.php');
  $query = "SELECT * FROM customer;" or die("Error:" . mysqli_error()); 
   
  $result = mysqli_query($con, $query); 
   ?>
    <div class="container">
        <button type="button" class="btn btn-light btn-lg btn-block">This girls or man you choose</button>
        <div class="row align-items-start">
          <?php while($row = mysqli_fetch_array($result)){
            echo "<div class='col'>";
            echo"<div class='card' style='width: 18rem;'>";
            echo"<img src='img/".$row['fileupload']."' class='card-img-top' alt='Tsis Muaj Duab'>";
            echo"<div class='card-body'>";
            echo"<h5 class='card-title'>".$row['name_lasname']."</h5>";
            echo"<p class='card-text'>".$row['tim']."</p>
                </div>";
            echo"<div class='card-body'>
                    <!-- Button trigger modal -->
                    <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal'>
                    See details
                    </button>
                     <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                    <img src='img/".$row['fileupload']."'width='380'height='400' class='' alt='Tsis Muaj Duab'>
                    <button type='button' class='btn-close' data-dismiss='modal' aria-label='Close'></button>
                     </div>
                     <div class='modal-body'>
                     <h5 class='modal-title' id='exampleModalLabel'>".$row['name_lasname']."</h5>
                     <p class=''>Time: ".$row['tim']."<p>Vilage: ".$row['vilage']."</p>"."<p>District: ".$row['city']."</p>"."<p>Provin: ".$row['provin']."</p>"."<p>Phome nunber:".$row['numberphome']."</p>"."</p>
                     </div>
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                    <a href='http://api.whatsapp.com/send?phone=+85697348433'><button  class='btn btn-info'>Buy</button></a>
                     </div>
                    </div>
                    </div>
                  </div>
                  </div>
                  </div>
          </div>"; } ?>
        </div>
        <div class="row" id="textfoodter">
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
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