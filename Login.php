<?php include('Server.php')?>

<html>
<head>

	<title>Login</title>
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" href="./Login_files/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="./Login_files/jquery-3.4.1.slim.min.js.download" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="./Login_files/popper.min.js.download" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./Login_files/bootstrap.min.js.download" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style type="text/css">
	
body
{
	background-image: url('Images/back.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
.rect
{
	  width: 400px;
    height: 500px;
    background:rgba(255,255,255,0.5);
    top:50%;
    left:25%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 10px 30px;
    border-radius: 30px;
}
.icon
{
	width: 130px;
    height: 130px;
    border-radius: 50%;
    text-align: center;
    margin-left: 100px;
    margin-top:20px;
    
    
}
.main
{
	padding-top: 40px;
	padding-left: 10px;
}
.space
{
	padding-top: 10px;
}
.space1
{
	padding-top: 5px;
}
.hr
{
	border:0.5px solid blue;
}
.dont
{
	padding-left: 50px;
}
.error {
  width: 93%; 
  margin: 5px auto; 
  padding: 3px; 
  padding-top: 15px;
  padding-left: 20px;
  position: relative;
  border: 1px solid rgba(255,255,255,0.5); 
  color: #ff0000; 
  background:rgba(255,255,255,0.5); 
  border-radius: 5px; 
  text-align: left;
}



</style>

</head>
<body>


<form method="post" action="Login.php">
<div class="rect">

    <!--<h1 style="text-align:center;font-family: Helvetica;">Login</h1>-->
	<img src="Images/icon.png" class="icon">
   
   
   <div class="main">
   <div class="form-group">
    <div class="col-sm-20">
      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
    </div>
  </div>
  

  <div class="form-group space1">
     <div class="col-sm-20">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
    </div>
  </div>

  
  </p>
  
  <div class="space">
  <input type="submit" class="btn btn-primary btn-lg btn-block" name="login_user" value="LOGIN">
</div>
  

  <hr class="hr">
  <a  href="Home.php" class="btn btn-primary btn-lg btn-block">BACK TO HOME</a>

  
</div>
</div>
</form>
</body>
</html>