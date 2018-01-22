<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require './vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'goodyearservices90@gmail.com';                 // SMTP username
    $mail->Password = 'goodyear';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
$name =$_SESSION["name"];
$phn = $_SESSION["phone"];
$account_no = $_SESSION["account_no"];
$pf_no = $_SESSION["pf_no"];
$uan_no = $_SESSION["uan_no"];
    $mail->setFrom('goodyearservices90@gmail.com', 'Registration software');
    $mail->addAddress('goodyearservices90@gmail.com', 'Good year security');     // Add a recipient
    $mail->addAddress('goodyearservices90@gmail.com');               // Name is optional
    $mail->addReplyTo('sahushailesh9@gmail.com', 'Technical query/info');
    $mail->addCC('sahushailesh9@gmail.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    //Content
    $mail->isHTML(true);

    $body = "<h2 style='color:rgba(0,0,0,.5);text-align:center;'>Guard Infromation </h2><br><br> <h3 style='color:rgba(0,0,0,.4)'>Name: ".$name."<br>Phone Number: ".$phn."<br>Account Number: ".$account_no."<br>UAN Number: ".$uan_no."<br>PF Number: ".$pf_no."</h3>";
                             // Set email format to HTML
    $mail->Subject = 'Registered n of new guard and emp';
    $mail->Body    = $body;
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header('location: ../viewSearch.php');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
