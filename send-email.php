<?php
if ($isset["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $subject = $_POST["subject"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Prepare email message
  $to = "alexis.bibek10000@gmail.com";
  $subject = "New form submission: $subject";
  $emailContent = "Name: $name\n";
  $emailContent .= "Email: $email\n";
  $emailContent .= "Message: $message\n";

  // Send email
  $headers = "From: $name <$email>";
  if (mail($to, $subject, $emailContent, $headers)) {
    // Email sent successfully
    echo "success";
  } else {
    // Error sending email
    echo "error";
  }
}
?>






