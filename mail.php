<?php
$to      = 'email@address.com';
$subject = 'sample subject';
$message = 'hello';
$headers = 'From: email@address.com' . "\r\n" .
    'Reply-To: email@address.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
