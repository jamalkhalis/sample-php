<?php
$to = 'im.mathematician.lover@gmail.com';
$subject = 'Hello from Codespaces!';
$message = 'This is a test email sent from my PHP script.';
$headers = 'From: bmotivated52@meme.me';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Error sending email.';
}
?>
