<?php

// // Please specify your Mail Server - Example: mail.example.com.
// ini_set("SMTP","mail.example.com");

// // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
// ini_set("smtp_port","8889");

// // Please specify the return address to use
// ini_set('sendmail_from', 'example@YourDomain.com');
	$statusMsg = '';
	$msgClass = '';

    if(isset($_POST['run'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		echo "sent!";	

	if(!empty($email) && !empty($name) && !empty($message)){
  		echo $name,$email,$message;
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        	echo "no-successfully";
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        
        }else{
        	
            // Recipient email
            $toEmail = 'temciuc.97@mail.ru';
            $emailSubject = 'Contact Request Submitted by '.$name;
            $htmlContent = '<h2>Contact Request Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                
  
               <h4>Message</h4><p>'.$message.'</p>';

            mail($toEmail,$emailSubject,$htmlContent);
            $statusMsg = 'Your contact request has been submitted successfully !';

        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }

    header('Location: index.php?status='.$statusMsg);
}



// }
// 	$toEmail = "temciuc.97@mail.ru";
// 	$mailHeaders = "From: " . $name . "<". $email .">\r\n";

// 	if(mail($toEmail, $message, $mailHeaders)) {

// 	    echo "Your contact information is received successfully.";
// 	    //$type = "success";
// 	}
// 	else {
// 		echo "Errors have plagued your server! CHeck email configuration.";
// 	}

//else {
//	echo "No variables in POST!"; var_dump($_POST);
//}
//require_once "contact-view.php";
?>