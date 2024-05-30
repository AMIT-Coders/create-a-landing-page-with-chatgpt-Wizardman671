<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'ddas02027@gmail.com'; // Replace this with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Thank you for contacting us. We will get back to you soon.';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
}
?>
