<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $origin = $_POST['origin'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $subject = "New contact from email";

  $mailTo = "vannstrasen@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message."\n\nHow they found you: ".$origin;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: Contact.html?mailsent");
}