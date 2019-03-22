<?php require 'connect.php';

// $general = $_POST['general'];
// $hobbies = $_POST['hobbies'];
// $grades = $_POST['grades'];

if (isset($_GET['page'])) {
    
    $page_id = 1;

	if ($_GET['page']=="General") $page_id = 1;
	if ($_GET['page']=="Hobbies") $page_id = 2;
	if ($_GET['page']=="Studies")  $page_id = 3;
	if ($_GET['page']=="Contacts") $page_id = 4;
	if ($_GET['page']=="Log in") $page_id = 5;

	$sql = "SELECT content FROM pages where id= $page_id";
   
    $result = mysqli_query($con,$sql);
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo $row['content'];
			echo "<br>";
	}
   
}



   mysqli_close($con);
 ?>