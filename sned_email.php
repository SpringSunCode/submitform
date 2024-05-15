<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "springcode23@gmail.com"; // Replace this with your email address
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for contacting us. We will get back to you shortly.</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>
