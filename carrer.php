<?php
// fot query
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';




// from contact page
if (isset($_POST['send'])) {
    $firstName = htmlentities($_POST['firstName']);
    $email = htmlentities($_POST['email']);
    $qualification = htmlentities($_POST['qualification']);
    $mobileNumber = htmlentities($_POST['mobileNumber']);
    $experience = htmlentities($_POST['experience']);
    $Dept = htmlentities($_POST['Dept']);
    $Subject = htmlentities($_POST['Subject']);
    $message = htmlentities($_POST['message']);

    // Set a default name if $name is not defined
    // $name = 'Default Sender';

    $messageBody = "Name: $firstName<br>";
    $messageBody .= "Email: $email<br>";
    $messageBody .= "Qualification: $qualification<br>";
    $messageBody .= "Mobile Number: $mobileNumber<br>";
    $messageBody .= "Experience : $experience<br>";
    $messageBody .= "Department: $Dept<br>";
    $messageBody .= "Subject: $Subject<br>";
    $messageBody .= "Message: $message<br>";
    $messageBody .= "Image: " . $_FILES['image']['name'] . "<br>";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'm2softtechnology@gmail.com';
    $mail->Password = 'mpqr emly msjm pxll';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $firstName);
    $mail->addAddress('aginteja@saitronix.in');
    $mail->Subject = $Subject;
    $mail->Body = $messageBody;

    // Check if "image" key is set and the file is not empty
    if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
        $mail->addAttachment($_FILES['image']['tmp_name'], $_FILES['image']['name']);
    }

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
