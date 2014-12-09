<?php

 if(isset($_POST['submit']))

 {

    $name = $_POST['name'];

	$email = $_POST['email'];

	$tel = $_POST['tel'];

	$query = $_POST['message'];

	$email_from = $name.'<'.$email.'>';



 $to="aaron@ice3llc.com";

 $subject="Message from Website Form";

 $headers  = 'MIME-Version: 1.0' . "\r\n";

 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 $headers .= "From: WebsiteForm <websiteForm@ice3llc.com>\r\n";

 $message="	  

 	   

 		 Name:

		 $name 	   

         <br>

 		 Email-Id:

		 $email 	   

         <br>

		 Telephone:

		 $tel

		 <br>

 		 Message:

		 $query 	   

      

   ";

	if(mail($to,$subject,$message,$headers))

		header("Location:../contact.php?msg=Successful Submission! Thank you for contacting us.");

	else

		header("Location:../contact.php?msg=Error To send Email !");

 }

?>

