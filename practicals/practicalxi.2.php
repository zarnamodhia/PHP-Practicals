<?php
// Email details
$to = "recipient@example.com";  // Recipient's email address
$subject = "Test Email from PHP"; // Subject of the email
$message = "Hello, this is a test email sent from PHP."; // Message body
$headers = "From: sender@example.com"; // Sender's email address

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
