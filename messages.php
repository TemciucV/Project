 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<?php include 'connect.php' ?>
	<?php include 'header.php' ?>
</head>
<body>
<?php include 'menu.php' ?> 
<!-- <?php if (isset($_GET['status'])) {
	echo $_GET['status'];
} ?> -->


<?php  require 'connect.php';

		$sql="select * from messages";
 
		$result=mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Name</th>"; 
        echo "<th>Email</th>"; 
        echo "<th>Message</th>"; 
        echo "<th>Date</th>"; 
        echo "<th>Delete</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($result)) { 
            echo "<tr>"; 
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['email']."</td>"; 
            echo "<td>".$row['message']."</td>";
            echo "<td>".$row['date']."</td>"; 
            echo "<td>".$row['deletem']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
       // mysqli_free_res($result); 
    } 


 ?>


<?php include 'footer.php' ?>

</body>

</html>