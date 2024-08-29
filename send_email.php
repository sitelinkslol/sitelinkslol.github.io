<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set recipient email address
    $to = 'specialstrovo@gmail.com';

    // Set email subject
    $subject = 'Contact Form Submission from ' . $name;

    // Create email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Thank you for contacting us. We will get back to you soon.';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
}
?>
