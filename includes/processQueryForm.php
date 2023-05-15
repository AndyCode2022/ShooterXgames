<?php
require 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    // $message = $_POST['message'];

    $to = "andrewwebster1007@gmail.com";
    $subject = "Theatre Website Report";
    $enquiryMessage = "";
    $headers = "From: $email\r\n";

    // Use the PHP mail() function to send the email
    if (mail($to, $subject, $enquiryMessage, $headers)) {
        echo "The form has been sent successfully.";
    } else {
        echo "There was an error sending the form.";
    }
}

if (isset($fullName)) {
    $fullName = $_POST['fullName'];
}

echo "<p>Thank you for submitting the enquiry!" . (isset($email)) . ".</p> 
        <p>I will review this enquiry and get back to you as soon as possible.</p>";

echo "<a href='../index.php'>click me to get back to homepage!";
?>

<!-- references -->
<!-- https://www.youtube.com/watch?v=ZXdX5aFVMeo -->