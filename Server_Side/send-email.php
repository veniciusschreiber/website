<?php
$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$email = $data['email'];
$message = $data['message'];

$to = 'venicius_schreiber@outlook.com';
$subject = 'New Contact Form Submission';
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

$mailBody = "Name: " . $name . "\n";
$mailBody .= "Email: " . $email . "\n";
$mailBody .= "Message: " . $message . "\n";

if (mail($to, $subject, $mailBody, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>
