<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];

$to = "your@email.com";
$subject = "Form Submission";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nCall: $call\nWebsite: $website\nPriority: $priority\nType: $type\nMessage: $message";

mail($to, $subject, $body);
echo "Message Sent!";

?>