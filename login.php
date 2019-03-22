<?php include 'connect1.php';

if (isset($_POST['login']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['login'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE

$query = "SELECT * FROM `login` WHERE login='$username' and password='$password'";
 
$result = mysqli_query($con, $query);

if(!$result)
    die("Query error: " .  mysqli_error($con));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['login']=$username;
        header('Location: http://localhost/internship/task7/index.php?page=General');
     }
    else
    {
       echo'Username or password is incorrect';
     }
}
}

 ?>