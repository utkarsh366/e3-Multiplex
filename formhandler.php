<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'noreply@e3multiplex.com'; // Replace with your website's email address

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                   "Subject: $subject.\n".
                   "Email Address: $visitor_email.\n".
                   "User Message: $message.\n";

    $to = 'e3multiplexcinema@gmail.com'; // Replace with the recipient's email address

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html"); // Redirect to a thank-you page
}
?>
