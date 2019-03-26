<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<?php include 'connect.php' ?>
	<?php include 'header.php' ?>
</head>
<body>
<?php include 'menu.php' ?> 
<?php if (isset($_GET['status'])) {
	echo $_GET['status'];
} ?>


<?php include 'content.php' ?>


<?php include 'footer.php' ?>

</body>

</html>