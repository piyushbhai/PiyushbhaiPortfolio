<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email information
    $to = "prajapati.piyush16@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>