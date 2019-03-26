<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<aside>

	<div class="vertical-menu">
		

		<?php require 'connect.php';
		$sql = 'SELECT menu FROM pages';
   
	   $result = mysqli_query($con,$sql);
   
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));
			
			while ($row = mysqli_fetch_assoc($result)) {
				
				echo $row['menu'];


}
if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
    echo 'hello';
    exit;
				
	}

   
   mysqli_close($con);

?>

</div>

</aside>
	

</body>



