<?php
//include auth_session.php file on all user panel pages
session_start(); fv
if(strlen($_SESSION['your_name'])==0)
    {   
header('location:index.php');
}
?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');
$con = mysqli_connect("localhost","root","","LoginSystem");

$mail = new PHPMailer(true);                     //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'classalert07@gmail.com';                     //SMTP username
$mail->Password   = 'classalert1234!';                               //SMTP password
$mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->setFrom('classalert07@gmail.com');
print_r($_FILES);
$sql="select * from users";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
    $mail->addReplyTo("classalert07@gmail.com");
    while($x=mysqli_fetch_assoc($res)){
       $mail->addAddress($x['email']);
    }
    //Content
    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_REQUEST['subject'];
    $mail->Body    = $_REQUEST['message'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($_FILES['attachment']['name']!=null){
        if(move_uploaded_file($_FILES['attachment']['tmp_name'],"uploads/{$_FILES['attachment']['name']}")){
           $mail->addAttachment("uploads/{$_FILES['attachment']['name']}");
        }
    }
    if($mail->send()){
        echo "<script type='text/javascript'>
        alert('Mail sent succesfully');
      </script>" ;
       header("Location: admindashboard.php");
    }
}
?>
