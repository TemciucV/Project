
<?php include 'connect.php';

$id = ""; 
if(isset( $_GET['id'])) {
    $id = $_GET['id']; 
    

$sql = "DELETE from messages where id ='$id'";
	echo "deleted";
$res= mysqli_query($con,$sql) or die("Failed".mysqli_error($con));
var_dump($res);
header('Location: http://localhost/internship/task7/messages.php');

 }

 else{
 	echo "problems";
 }
$con->close();

?>