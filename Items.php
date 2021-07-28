<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>Items</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>

    <!--BootStrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="Items.css">

	

</head>


<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" >
  <div class="container">
    <a class="navbar-brand" href="Admin.php">Mobile Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" name="add" href="Items.php?page=add">Add Items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" name= "delete" href="Items.php?page=delete">Remove Items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" name = "modify" href="Items.php?page=modify">Modify Items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  
  <body style="background-image: url('Images/Modify.jpg'); background-repeat: no-repeat; background-size: auto; ">
  <?php 
  if(($_GET['page'])=='add') 
  {?>

      
      <div class="rect" >
    
<div class="b1">
   
   <br>
<form method="POST" action="Items.php?page=add" enctype="multipart/form-data">
   <center><b><h2 style="font-family: 'Adamina'; color: white; font-weight: bold;">ADDING AN ITEM</h2></b></center><br>
   <b>Company Name:</b><br>
   <input type="text" name="name" placeholder="Name" required><br>
   <b>Model:</b><br>
   <input type="text" name="model" placeholder="Model Name" required><br>
   <b>RAM:</b><br>
   <input type="number" name="ram" placeholder="RAM" required><br>
   <b>ROM:</b><br>
   <input type="number" name="rom" placeholder="ROM" required><br>
   <b>Processor:</b><br>
   <input type="text" name="processor" placeholder="processor" required><br>
   <b>Released Year:</b><br>
   <input type="number" name="year" placeholder="year" required><br>
   <b>Stock:</b><br>
   <input type="number" name="stock" placeholder="number of stocks available" required><br>
   <b>Price:</b><br>
   <input type="number" name="price" placeholder="price" required><br>
   
   <div class="form-group a">

      <label style="position: relative;left:3px;"><b>Mobile Pictures</b><span style="color:red;">(Include a picture of the mobile)</span></label>
         <div style="position: relative;right:10px;" class="col-sm-9">
              <input type="file" name ="picture1"  required />
        </div>
    </div>

    <div class="form-group a">

      <label style="position: relative;left:3px;"><span style="color:red;"></span></label>
         <div style="position: relative;right:10px;" class="col-sm-9">
              <input type="file" name ="picture2" required />
        </div>
    </div>

    <div class="form-group a">

      <label style="position: relative;left:3px;"><span style="color:red;"></span></label>
         <div style="position: relative;right:10px;" class="col-sm-9">
              <input type="file" name ="picture3" required />
        </div>
    </div>

   <center><input type="submit" class="submit-btn" name ="add" value="ADD ITEM"></center>

</form>
                                        
                        
</div>
</div>



  <?php 
   }
  else if(($_GET['page'])=='delete') 
  {?>


  <div class="rect_del" style=" width: 600px; height: 270px; background:rgba(255,255,255,0.5); left: 50%; margin-top:35%; position: absolute; transform: translate(-50%,-150%); padding: 10px 30px; margin-bottom: 30px;">
    
<div class="b1">
   
   <br>
   <form method="POST" action="Items.php?page=delete" enctype="multipart/form-data">
   <center><b><h2 style="font-family: 'Adamina'; color: white; font-weight: bold;">DELETING AN ITEM</h2></b></center><br>
   <b>Model Name to be deleted:</b><br>
   <input type="text" name="del_model" placeholder="Model Name" required><br>
   <center><input type="submit" class="submit-btn" name ="delete" value="DELETE ITEM"></center>

</form>
                                        
                        
</div>
</div>





  <?php 
   }
  else if(($_GET['page'])=='modify') 
  {?>

  <div class="rect" >
    
<div class="b1">
   
   <br>
<form method="POST" action="Items.php?page=modify" enctype="multipart/form-data">
   <center><b><h2 style="font-family: 'Adamina'; color: white; font-weight: bold;">MODIFYING AN ITEM</h2></b></center><br>
   <b>Company Name:</b><br>
   <input type="text" name="name" placeholder="Name" required><br>
   <b>Model:</b><br>
   <input type="text" name="model" placeholder="Model Name" required><br>
   <b>RAM:</b><br>
   <input type="number" name="ram" placeholder="RAM" required><br>
   <b>ROM:</b><br>
   <input type="number" name="rom" placeholder="ROM" required><br>
   <b>Processor:</b><br>
   <input type="text" name="processor" placeholder="processor" required><br>
   <b>Released Year:</b><br>
   <input type="number" name="year" placeholder="year" required><br>
   <b>Stock:</b><br>
   <input type="number" name="stock" placeholder="number of stocks available" required><br>
   <b>Price:</b><br>
   <input type="number" name="price" placeholder="price" required><br>
   
   <div class="form-group a">

      <label style="position: relative;left:3px;"><b>Mobile Pictures</b><span style="color:red;">(Include a picture of the mobile)</span></label>
         <div style="position: relative;right:10px;" class="col-sm-9">
              <input type="file" name ="picture1"  required />
        </div>
    </div>

    <div class="form-group a">

      <label style="position: relative;left:3px;"><span style="color:red;"></span></label>
         <div style="position: relative;right:10px;" class="col-sm-9">
              <input type="file" name ="picture2" required />
        </div>
    </div>

    <div class="form-group a">

      <label style="position: relative;left:3px;"><span style="color:red;"></span></label>
         <div style="position: relative;right:10px;" class="col-sm-9">
              <input type="file" name ="picture3" required />
        </div>
    </div>

   <center><input type="submit" class="submit-btn" name ="modify" value="MODIFY ITEM"></center>

</form>
                                        
                        
</div>
</div>




  <?php }?>

</body>

</html>

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

if(isset($_POST['add']))
{

  $name = $_POST['name'];
  $model = $_POST['model'];
  $ram = $_POST['ram'];
  $rom = $_POST['rom'];
  $processor = $_POST['processor'];
  $year = $_POST['year'];
  $stock = $_POST['stock'];
  $price = $_POST['price'];
  $pic1 = addslashes(file_get_contents($_FILES["picture1"]["tmp_name"]));
  $pic2 = addslashes(file_get_contents($_FILES["picture2"]["tmp_name"]));
  $pic3 = addslashes(file_get_contents($_FILES["picture3"]["tmp_name"]));

  $sql = "INSERT INTO `mobile`(`Mobileid`, `Name`, `Model`, `RAM`, `ROM`, `Processor`, `Released Year`, `Stock`, `Price`, `Picture1`, `Picture2`, `Picture3`) VALUES('','$name', '$model', $ram, $rom, '$processor', $year, $stock, $price, '$pic1', '$pic2', '$pic3')";
  $query_run = mysqli_query($conn,$sql);

  if($query_run)
    echo "Query Inserted Succesfully";
  else
    echo "There was an error";
}


if(isset($_POST['modify']))
{

  $name = $_POST['name'];
  $model = $_POST['model'];
  $ram = $_POST['ram'];
  $rom = $_POST['rom'];
  $processor = $_POST['processor'];
  $year = $_POST['year'];
  $stock = $_POST['stock'];
  $price = $_POST['price'];
  $pic1 = addslashes(file_get_contents($_FILES["picture1"]["tmp_name"]));
  $pic2 = addslashes(file_get_contents($_FILES["picture2"]["tmp_name"]));
  $pic3 = addslashes(file_get_contents($_FILES["picture3"]["tmp_name"]));

  $sql = "REPLACE INTO `mobile`(`Mobileid`, `Name`, `Model`, `RAM`, `ROM`, `Processor`, `Released Year`, `Stock`, `Price`, `Picture1`, `Picture2`, `Picture3`) VALUES('','$name', '$model', $ram, $rom, '$processor', $year, $stock, $price, '$pic1', '$pic2', '$pic3')";
  $query_run = mysqli_query($conn,$sql);

  if($query_run)
    echo "Query Inserted Succesfully";
  else
    echo "There was an error";
}


if(isset($_POST['delete']))
{
  $del_mod = $_POST['del_model'];

  $sql = "DELETE FROM `mobile` WHERE `Model`= '$del_mod' ";
  $query_run = mysqli_query($conn,$sql);

  if($query_run)
    echo "Query deleted Succesfully";
  else
    array_push($errors, "**Mobile model is not present");
}


?>