<?php
$name=$_POST['name'];
$visitor_emil=$_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];


$email_form='maimunulkjisan0@gmail.com';

$email_subject = 'New Form Submission';

$email_body="User Name : $name.\n".
				"User Email:$visitor_emil.\n".
				"Subject: $subject.\n".
				"User Message: $message.\n";

$to='maimunulkjisan0@gmail.com';
$headers="From: $email_form \r\n";

$headers.="Reply-To: $visitor_emil \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");				




?>