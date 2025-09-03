<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $businessname    = htmlspecialchars($_POST['businessname']);
    $fullname        = htmlspecialchars($_POST['fullname']);
    $email           = htmlspecialchars($_POST['email']);
    $phone           = htmlspecialchars($_POST['phone']);
    $pincode         = htmlspecialchars($_POST['pincode']);
    $productdescribe = htmlspecialchars($_POST['productdescribe']);

    $mail = new PHPMailer(true);

    try {
        // Gmail SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'surechainofficial@gmail.com';   // ✅ Your Gmail
        $mail->Password   = 'jvvk rayf xuuc edva';             // ✅ Use Google App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Recipient
        $mail->setFrom('surechainofficial@gmail.com', 'SureChain Buyer Form');
        $mail->addAddress('surechainofficial@gmail.com');  // ✅ Receive in same Gmail
        $mail->addReplyTo($email, $fullname);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "🛒 New Buyer Requirement from $fullname";
        $mail->Body    = "
            <h3>New Buyer Requirement</h3>
            <p><strong>Business Name:</strong> $businessname</p>
            <p><strong>Full Name:</strong> $fullname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Pincode:</strong> $pincode</p>
            <p><strong>Product Requirement:</strong><br>$productdescribe</p>
        ";

        $mail->send();
        echo "<script>alert('✅ Thank you! Your requirement has been submitted.'); window.location.href='../buyer.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('❌ Submission failed. Error: {$mail->ErrorInfo}'); window.location.href='../buyer.php';</script>";
    }
}
?>
