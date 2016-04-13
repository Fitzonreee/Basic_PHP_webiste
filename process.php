<?php
$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

// Redirect
header("location:thanks.php");

echo "<pre>";
$email_body = "";
$email_body .= "Name: " . $name . "<br>";
$email_body .= "Email: " . $email . "<br>";
$email_body .= "Details: " . $details;
echo $email_body;
echo "</pre>";

?>
