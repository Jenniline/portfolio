<?php

use PHPMailer\PHPMailer\PHPMailer; 

if (isset($_POST['submit'])  && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    // smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->username = "jennilineebai@gmail.com";
    $mail->Password = 'dsofhdan';
    $mail->SMTPSecure = "ssl";
    
    // email settings

    $mail->isHTML(true);
    $mail->setFrom($email,$name);
    $mail->addAddress("youremail@gmail.com");
    $mail->subject = ("$email ($subject)");
    $mail->message = $message;

    if ($mail->send()) {
        $status = "success";
        $response ="Email is sent!";
    }
    else {
        $status = "failed";
        $response = "Something is wrong: " . $mail->ErrorInfo;  
    }

    exit(json_encode(array("status" => $status, "response" => $response)));




}











?>