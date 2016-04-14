<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
  $category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
  $title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
  $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));

  //Form validations
  if ($name == "" OR $email == "" OR $details == "" OR $category="" OR $title="") {
    $error_message = "Please fill in the required fields: Name, Email, Title, Category and Details";
  }

  if (!isset($error_message) && $_POST["address"] != "") {
    $error_message = "Bad form input";
  }

  require("includes/php_mailer/class.phpmailer.php");

  $mail = new PHPMailer;

  if (!isset($error_message) && !$mail->ValidateAddress($email)) {
    $error_message = "Invalid Email Address";
  }

  if (!isset($error_message)) {
    // header redirect must come before this - style this shit and see if it works!
    $email_body = "";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Category: " . $category . "\n";
    $email_body .= "Title: " . $title . "\n";
    $email_body .= "Details: " . $details;

    // You should absolutely use different email server in production environment ex. Postmark, GmailSMPT
    // PHP Mailer shizzz
    $mail->setFrom($email, $name);
    $mail->addAddress('kevin.fitzhenry@createthenext.com', 'Kevin Fitzhenry'); // Add a recipient

    $mail->isHTML(false); // Set email format to HTML - change to true and style!

    $mail->Subject = 'New Movie suggestion from ' . $name;
    $mail->Body    = $email_body;

    if($mail->send()) {
      // Redirect
      header("location:suggest.php?status=thanks");
      exit;
    }
    $error_message = 'Message could not be sent.';
    $error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
  }
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
    } else {
      if (isset($error_message)) {
        echo "<p class='message'>" . $error_message . "</p>";
    } else {
        echo "<p>Complete the form to send me an email with a suggestion.</p>";
    } ?>
    <form method="post" action="suggest.php">
      <div class="form-group">
        <label for="name">Name<span class="required">Required</span></label>
        <input type="text" name="name" placeholder="First and Last name">
      </div>
      <div class="form-group">
        <label for="email">Email<span class="required">Required</span></label>
        <input type="email" name="email" id="email" placeholder="Valid email address">
      </div>
      <div class="form-group">
        <label for="category">Category<span class="required">Required</span></label>
        <select name="category">
          <option value="" selected disabled>Select One</option>
          <option value="">Book</option>
          <option value="">Movie</option>
          <option value="">Music</option>
        </select>
      </div>
      <div class="form-group">
        <label for="title">Title<span class="required">Required</span></label>
        <input type="text" name="title" id="title" placeholder="Add the Movie title">
      </div>
      <div class="form-group">
        <label for="details">Suggestion Details</label>
        <textarea name="details" id="details" rows="8" cols="40"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit Suggestion">
      </div>
      <!-- honeypot, bitches! -->
      <div class="form-group" style="display:none;">
        <label for="address">Address</label>
        <input type="address" name="address" id="address" placeholder="Valid address">
        <p>Please leave this field blank</p>
      </div>
    </form>
    <?php } ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>
