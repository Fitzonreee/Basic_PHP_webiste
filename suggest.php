<?php
$pageTitle = "Suggest a Media Item";
$section = "suggest";
include("includes/header.php"); ?>

<div class="section page">
  <div class="wrapper">
    <h1>Suggest a Media Item</h1>
    <p>Complete the form to send me an email with a suggestion.</p>
    <form method="post" action="process.php">
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
  </div>
</div>

<?php include("includes/footer.php"); ?>
