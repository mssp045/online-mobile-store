<?php ob_start(); ?>

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

 $mob_id = $_GET['mob_id'];

?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>Booking Page</title>

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
	<link type="text/css" rel="stylesheet" href="Booking.css">

	

</head>

<body>
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



<div class="rect">
    
<div class="b1">
   <center><h2>CUSTOMER INFORMATION</h2></center>
   <br>
   <?php echo'<form action="Booking.php?mob_id='.$mob_id.'" method="POST">' ?>
   <label style="position: relative;"><b>Name:</b></label><br>
   <input type="text" name="name" placeholder="Name" required><br><br>
   <label style="position: relative;"><b>Address:</b></label>
   <div class="col-sm-9">
   <textarea  id="address" placeholder="address" name="address" rows="5" cols="20" class="form-control" style="border: 1px solid grey; position: relative; right: 15px;">
   </textarea><br>
   <label style="position: relative; right: 10px;"><b>E-mail:</b></label><br>
   <input type="email" name="gmail" placeholder="Email" style="position: relative; right: 10px;"><br><br>
   <label style="position: relative; right: 10px;"><b>Phone Number:</b></label><br>
   <input type="text" cols="20" name="phno" placeholder="Phone no" style="position: relative; right: 10px;">
   </div>
   <br>
   <center><input type="submit" class="btn btn-primary btn-lg btn-block" name="book" style = "width: 200px;" value="Confirm Booking"></center>

</form>

</body>


<?php 


if(isset($_POST['book']))
{

  $name = $_POST['name'];
  $address = $_POST['address'];
  $mail = $_POST['gmail'];
  $phone = $_POST['phno'];


  $sql = "INSERT INTO `customer`(`ID`, `Name`, `Address`, `Mail`, `Phone`) VALUES('','$name', '$address', '$mail', $phone)";
  $query_run = mysqli_query($conn,$sql);
  

  $sqli = "SELECT Stock FROM `mobile` WHERE Mobileid= '$mob_id'";
  $result = $conn->query($sqli);
  $row = $result->fetch_assoc();
  
  $new_stock = $row['Stock'] - 1;

  $sqlii = "UPDATE `mobile` SET `Stock` = $new_stock WHERE `Mobileid`= $mob_id ";
  $query_run1 = mysqli_query($conn,$sqlii);

  if($query_run && $query_run1)
    header('location:BookingSuccess.php');
}
   ?>

</html>

<?php ob_end_flush(); ?>