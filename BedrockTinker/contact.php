<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'No email provided'; // Default if empty
    $message = htmlspecialchars($_POST['message']);
    
    // Recipient email (your Gmail address)
    $to = "jomvlmrs09@gmail.com";
    
    // Email subject
    $subject = "New Contact Form Submission";
    
    // Email body content
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Email headers
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>