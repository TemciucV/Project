<?php require 'connect.php';

	$id="";

if (isset($_GET['id'])) {
    
    $id=$_GET['id'];	
}
    	if ($id == null) {
               $id[0] = "1";
            }

	$sql = "SELECT content FROM pages where id= '$id' ";
  //echo "<ul>";
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			//echo "<li>";
			echo $row['content'];
			//echo "</li>";
			echo "<br>";
	}
	//echo "</ul>";

   mysqli_close($con);
 ?>
