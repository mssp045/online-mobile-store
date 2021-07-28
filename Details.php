<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <?php

$servername = "localhost";
$uname = "mssp";
$pass = "sanjay@123";
$database = "mobile store";
$errors = array(); 

// Create Connection
$conn = new mysqli($servername, $uname, $pass, $database);

if($conn->connect_error)
{
  die("Connection Failed: " . $conn->connect_error);
}
?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>Details</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>

    <!--Slider-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
    <!--BootStrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="Details.css">

	

</head>


<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="Home.php">Mobile Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Admin Login</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>

  <?php $Mobileid = $_GET['id'] ;

  $sql = "SELECT * FROM `mobile` WHERE Mobileid= $Mobileid";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  ?>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <?php echo' <img class="d-block w-100" src="data:image.jpeg;base64,'.base64_encode($row['Picture1']).'" alt="First slide">' ?>
    </div>
    <div class="carousel-item">
      <?php echo' <img class="d-block w-100" src="data:image.jpeg;base64,'.base64_encode($row['Picture2']).'" alt="Second slide">' ?>
    </div>
    <div class="carousel-item">
      <?php echo' <img class="d-block w-100" src="data:image.jpeg;base64,'.base64_encode($row['Picture3']).'" alt="Third slide">' ?>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#demo" = data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>


<br><br>
<center><h2>MOBILE DETAILS</h2></center>


<div class="rect">
    
<div class="b1">
   
    
    <div class="b2" >
      
      <p>Name:</p><br>
      <p>Model Name:</p><br>
      <p>RAM:</p><br>
      <p>ROM:</p><br>
      <p>Processor:</p><br>
      <p>Released Year: </p><br>
      <p>Stock: </p><br>
      <p>Price: </p><br>
                                    
    </div>
    <div class ="b3">
      <p><?php echo $row['Name'] ?></p><br>
      <p><?php echo $row['Model'] ?></p><br>
      <p><?php echo $row['RAM']; ?> GB </p><br>
      <p><?php echo $row['ROM']; ?> GB </p><br>
      <p><?php echo $row['Processor'] ?></p><br>
      <p><?php echo $row['Released Year'] ?></p><br>
      <p><?php echo $row['Stock'];?></p><br>
      <p><?php echo $row['Price']; ?></p><br>
</div>
<center>
                    <?php  
                        $var = $row['Mobileid'];
                        echo ' <a  href="Booking.php?mob_id='.$var.'" class="btn btn-primary btn-ag">BOOK NOW</a>' ?>
</center>
</div>
</body>

</html>