<?php
date_default_timezone_set('Asia/Manila');

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate inputs
    if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['message'])) {
        die("Error: All fields are required.");
    }

    // Sanitize input
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = nl2br(htmlspecialchars($_POST['message']));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'princejaysayre11324@gmail.com';
        $mail->Password = 'wdapntkdbudazsme'; // ⚠️ Use an App Password for security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Email Settings
        $mail->setFrom($email, $fullname);
        $mail->addAddress('princejaysayre11324@gmail.com'); // Replace with recipient email

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $fullname";
        $mail->Body = "
            <h4>New Message Received</h4>
            <p><strong>From:</strong> $fullname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        ";

        // Send Email
        if ($mail->send()) {
            // Redirect to landing page with success parameter
            header("Location: ../../html/GensanMed/landing-page.php?mail=success");
            exit();
        } else {
            header("Location: ../../html/GensanMed/landing-page.php?mail=error");
            exit();
            ;
        }

    } catch (Exception $e) {
        header("Location: ../../html/GensanMed/landing-page.php?mail=error");
        exit();
        //echo "Error: {$mail->ErrorInfo}";
    }
}

?>