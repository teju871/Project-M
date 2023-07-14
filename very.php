<?php
 
 
  if(!empty($_POST["submit"])) {
    $name = $_POST["contact-name"];
    $email = $_POST["contact-email"];
    $phone = $_POST["contact-phone"];
    $subject = $_POST["subject"];
    $message = $_POST["content-message"];
 
    // Recipient email
    $toMail = "orupallitejasai@gmail.com";
     
    // Build email header
    $header = "From: " . $name . "<". $email .">\r\n";
 
    // Send email
    if(mail($toMail, $subject, $message, $header)) {
 
        echo "Mail send";
 
    } else {
 
        echo "Mail not send";
    }
  }  
?>