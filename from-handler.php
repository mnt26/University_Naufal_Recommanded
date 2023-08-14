<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['Subject'];
$massage = $_POST['Massage'];


$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject : $Subject.\n".
                "User Massage : $massage.\n";

$to = 'bluenaufal@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>