<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['Subject'];
$message = $_POST['Massage'];

$email_from = 'bluenaufal7@gmail.com'; // Sesuaikan dengan alamat email situs web Anda

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Massage: $message.\n";

$to = 'bluenaufal@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>
