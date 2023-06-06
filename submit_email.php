<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form values
  $name = $_POST["name"];
  $email = $_POST["email"];
  $year = $_POST["year"];
  $branch = $_POST["branch"];
  $phone_no = $_POST["phone_no"];
  $feedback = $_POST["feedback"];

  // Create email body
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Year: " . $year . "\n";
  $body .= "Branch: " . $branch . "\n";
  $body .= "Phone number: " . $phone_no . "\n";
  $body .= "Feedback: " . $feedback;

  // Send email
  $to = "pranathin1314@gmail.com";
  $subject = "Contact Information Form Submission";
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n";

  mail($to, $subject, $body, $headers);
}
?>
