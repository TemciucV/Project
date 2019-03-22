<!DOCTYPE html>
<html>
<head>
	<title> contact me </title>
	<link rel="stylesheet" href="css/style.css">
	<?php include 'header.php' ?>
</head>
<body>
<?php include 'menu.php' ?> 


<main>
<section>
	<div class="contactme">
<h3>Contact me</h3>
<form method="POST" action= "contactme.php">
	Full name: <br>
	<input type="text" name= "name"><br>
	Email: <br>
	<input type="text" name= "email"> <br> 
	Comments: <br>
	<textarea name="message" rows="6" cols="20"></textarea>
	 <br>
	 <input type="submit" value="submit">
	<input type="hidden" name="run">
	
</form>
</div>
</section>
</main>
<footer>
	
	<?php include 'footer.php' ?>
</footer> 

</body>