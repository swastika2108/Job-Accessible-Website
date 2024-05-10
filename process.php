<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Recipient email address
    $to = "tanisijh08@example.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Compose the message
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $email_body)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
} else {
    // If the form is not submitted, redirect to the contact form page
    header("Location: contact_form.html");
    exit;
}
?>

