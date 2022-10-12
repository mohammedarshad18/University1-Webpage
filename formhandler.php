<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$messsage = $_POST['message'];

$email_from = 'chancellor[at]sathyabama.ac.in';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
              "User Email: $visitor_email.\n". 
              "Subject: $subject.\n". 
              "User Message: $messsage.\n";

$to = 'mohammedarshad243@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to ,$email_subject, $email_body, $headers);
header("Location: contact.html");
?>