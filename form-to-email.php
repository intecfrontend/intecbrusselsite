<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $email_from = 'B.Lantsoght@gmail.com';
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $name. Here it is::: $message.\n";

  $headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

?>