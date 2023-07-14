<?php 

use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer(true);

if (isset($_POST['submit']))

{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST["contact-phone"];
  $subject = $_POST["subject"];
$message = $_POST["content-message"];

try{

  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "otejasai@gmail.com"; //enter you email address
  $mail->Password = 'gmail password'; //enter you email password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = '587';

  $mail->setFrom('otejasai@gmail.com');
  $mail->addAddress("otejasai@gmail.com"); 

  $mail->isHTML(true);
  $mail->Subject = 'Message received(get in touch)';
  $mail->Body = '<h3>Name : $name <br>Email : $email <br>phone : $phone<br>subject : $subject<br> Message : $message</h3>';

  $mail->send();
  $alert = '<div class = "alert-success"> 
                <span>Message Sent! Thank You For Contacting Us.</span></div>';
              
} catch (Exception $e){
  $alert = '<div class="alert-error">
              <span>'.$e->getMessage().'</span>
            </div>';
}
}






?>