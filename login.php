<?php include 'connect.php';

if (isset($_POST['login']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['login'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE

$query = "SELECT * FROM `login` WHERE login='$username' and password='$password'";
 
$result = mysqli_query($con, $query);

$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
// echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
	header('Location: general.html');

}else{

	// $error = "Your Login Name or Password is invalid";

 echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
// echo "Invalid Login Credentials";
header("refresh:0.1; url =login.html");
}
}

 ?>