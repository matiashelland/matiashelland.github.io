<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $text = $_POST['text'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "your-email-address@example.com";
  $headers = "From: ".$email."\r\n";
  $txt = "ny melding fra Tyalfa.no fra ".$name.".\n\n".$message;

  mail($to, $subject, $txt, $header,);
  Header("location: index.php")
}
