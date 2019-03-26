<?php require 'connect.php';


     if(isset($_POST['run'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
        $date = date('Y-m-d');
        $deletem='<a href="deletem.php?id=$id"> Delete </a>'; 

	// 	echo "sent!";	

	       if(!empty($email) || !empty($name) || !empty($message)){
  	

             $sql = "INSERT INTO messages (name, email, message, date, deletem)
         VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."', '$date', '$deletem')";

         $result=mysqli_query($con, $sql);
         //echo "inserted!";
         header('Location: http://localhost/internship/task7/index.php');


     }
            else { echo" Empty! "; }

        }
        	
           else{
       echo "Errors have plagued your server! CHeck email configuration.";
    }    
        
?>