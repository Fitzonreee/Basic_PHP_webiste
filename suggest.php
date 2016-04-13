<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $details = $_POST["details"];

  // Redirect
  header("location:suggest.php?status=thanks");

  // header redirect must come before this
  echo "<pre>";
  $email_body = "";
  $email_body .= "Name: " . $name . "<br>";
  $email_body .= "Email: " . $email . "<br>";
  $email_body .= "Details: " . $details;
  echo $email_body;
  echo "</pre>";
}

$pageTitle = "Suggest a Media Item";
$section = "suggest";
include("includes/header.php");
?>

<div class="section page">
  <div class="wrapper">
    <h1>Suggest a Media Item</h1>
    <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
      echo " <p style='text-align:center;''>Thanks for the email, I'll check out your suggestion.</p>";
    } else { ?>
    <p>Complete the form to send me an email with a suggestion.</p>
    <form method="post" action="suggest.php">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="First and Last name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Valid email address">
      </div>
      <div class="form-group">
        <label for="details">Suggestion Details</label>
        <textarea name="details" id="details" rows="8" cols="40"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit Suggestion">
      </div>
    </form>
    <?php } ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>
