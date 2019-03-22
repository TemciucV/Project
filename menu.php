<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<aside>

	<div class="vertical-menu">
		<form method="GET">

		<?php require 'connect.php';
		$sql = 'SELECT menu FROM pages';
   
	   $result = mysqli_query($con,$sql);
   
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));
			
			while ($row = mysqli_fetch_assoc($result)) {
				
				echo $row['menu'];
				
	}

	if(!empty($_SESSION['login'])){

		//echo "<input name="page" type="submit" value="Messages">";
		//echo "<a href="fdf" ";

	}
   
   mysqli_close($con);

?>
	</form>
</div>

</aside>
	

</body>



