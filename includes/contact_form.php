<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName  = htmlspecialchars($_POST['lastName']);
    $email     = htmlspecialchars($_POST['email']);
    $phone     = htmlspecialchars($_POST['phone']);
    $message   = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // 🔹 Gmail SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'surechainofficial@gmail.com';   // ✅ Your Gmail
        $mail->Password   = 'jvvk rayf xuuc edva';               // ✅ Google App Password (16 chars)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // 🔹 Sender & recipient
        $mail->setFrom('surechainofficial@gmail.com', 'SureChain Contact Form'); 
        $mail->addAddress('surechainofficial@gmail.com');   // ✅ Receive in the same Gmail
        $mail->addReplyTo($email, "$firstName $lastName");  // ✅ Reply goes to the user

        // 🔹 Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from $firstName $lastName";
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> $firstName $lastName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "<script>alert('✅ Thank you! Your message has been sent.'); window.location.href='../contact.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('❌ Message could not be sent. Error: {$mail->ErrorInfo}'); window.location.href='../contact.php';</script>";
    }
}
?>
