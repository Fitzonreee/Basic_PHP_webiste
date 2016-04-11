<?php
var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

echo $name . "<br>";
echo $email . "<br>";
echo $details;
?>
