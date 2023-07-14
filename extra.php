<?php  
if( isset($_POST['submit']) ) {
//getting user data
$name = $_POST['contact-name'];
$phoneno = $_POST['contact-phone'];
$email = $_POST['contact-email'];
$subject = $_POST['subject'];
$message = $_POST['contact-message'];

 
//Recipient email, Replace with your email Address
$mailTo = 'otejasai@gmail.com';
 
//email subject
$subject = ' A New Message Received From ' .$name;
 
//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> '.$name .'</p>
<p> <b>Email: </b> '.$email .'</p>
<p> <b>Phone Number: </b> '.$phoneno .'</p>
<p> <b>Date of Birth: </b> '.$dateOfBirth .'</p>
<p> <b>City Name: </b> '.$cityName .'</p>
<p> <b>Home Address: </b> '.$homeAddress .'</p>
<p> <b>Employment Status: </b> '.$employmentStatus .'</p>';
 
//header for sender info
$headers = "From: " .$name . "<". $email . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
//PHP mailer function
 $result = mail($mailTo, $subject, $message, $headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>