<?php
$name = $_POST['Name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'roxanna.barahona@outlook.com';
$email_subject =" New Form Submission";
$email_body ="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                " User Message: $message.n\"


$to = "roxanna.barahona@outlook.com"; 
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers); 
header("Location: index.html");
?>