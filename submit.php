<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Compose email message
$to = 'arunbajra77@gmail.com';  // Replace with your email address
$subject = 'New contact form submission';
$message = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Send email
if (mail($to, $subject, $message, $headers)) {
  // Email sent successfully
  echo 'Thank you for your message. We will get back to you soon.';
} else {
  // Failed to send email
  echo 'Sorry, there was an error sending your message. Please try again later.';
}
?>