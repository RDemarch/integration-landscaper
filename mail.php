<?php

  // Check for empty fields
  /*
  if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
  }
  */
  /*
  if (isset($_POST['submit'])) {
  }
  */
  $name = $_POST['name'];
  $email_address = $_POST['email'];
  $message = $_POST['message'];

  $to = $email_address;
  $subject = "Your message";
  $txt = "Hi" . $name . ! . "We receive this message: " . $message;
  $headers = "From: webmaster@landscaper.com";

  mail($to, $subject, $txt, $headers);

?>
