<?php
// for career

// fot query
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $mobileNumber = htmlentities($_POST['mobileNumber']);
    $experience = htmlentities($_POST['experience']);
    $subject = htmlentities($_POST['subject']);




    $messageBody = "Name: $name<br>";
    $messageBody .= "Email: $email<br>";
    $messageBody .= "Subject: $subject<br>";
    $messageBody .= "Message: $mobileNumber<br>";
    $messageBody .= "Experience: $experience<br>";



    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'm2softtechnology@gmail.com';
    $mail->Password = 'mpqr emly msjm pxll';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('aginteja@saitronix.in');
    $mail->Subject = $subject;
    $mail->Body = $messageBody;

    try {
        $mail->send();

        // Form submitted successfully, show popup message and redirect
        echo '<script>';
        echo 'alert("Your Form has been successfully submitted!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    } catch (Exception $e) {
        // Handle the case when the mail sending fails
        echo '<script>alert("Error sending email. Please try again later.");</script>';
    }
}
