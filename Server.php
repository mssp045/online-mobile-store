<?php
session_start();

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

if (isset($_POST['login_user']))
{
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) 
  {
    array_push($errors, "Username is required");
  }
  if (empty($password)) 
  {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {
    $password = md5($password);
    $query = "SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) 
    {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location:Admin.php');
    }
    else {
      array_push($errors, "username/password combination");
    }
  }
}

?>