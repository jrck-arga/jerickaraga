<?php
$name = $_POST['name'];
$pnumber = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'Inquiry Form';

$email_body = "Client Name: $name.\n".
                "Client Email: $visitor_email.\n".
                "Client Phone: $pnumber.\n". 
                "Client Message: $message.\n";    

$to = 'jrckaraga@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>