<!DOCTYPE html>
<html>
<head>
	<title> login </title>
	<link rel="stylesheet" href="style.css">
	<?php include 'header.php' ?>

</head>
<body>

<center><h1>Login</h1></center>

<hr>

<section>
<div class="login">
<form method="POST" action="login.php">
	Login: <br>
	<input type="text" name="login"><br>
	Password: <br>
	<input type="password" name="password"> <br> <br>
	<input type="submit" value="submit">
</form>
</div>
</section>
</body>

<?php include 'footer.php' ?>
</html>