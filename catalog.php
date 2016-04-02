<?php
$catalog = array();
$catalog[201] = "Spotlight";
$catalog[101] = "Among The Thugs";
$catalog[202] = "Good Will Hunting";
$catalog[203] = "Catch Me If You Can";
$catalog[301] = "The Stone Foxes";


$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
  if ($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } elseif ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } elseif ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}



include("includes/header.php"); ?>

<div class="section catalog page">
  <div class="wrapper">
    <h1><?php echo $pageTitle; ?></h1>
    <ul>
      <?php
      foreach ($catalog as $item) {
        echo "<li>" . $item . "</li>";
      }
       ?>
    </ul>
  </div>
</div>

<?php include("includes/footer.php"); ?>
