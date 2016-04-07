<?php
include("includes/data.php");
include("includes/functions.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  if (isset($catalog[$id])) {
    $item = $catalog[$id];
  }
}

if (!isset($item)) {
  header("location:catalog.php");
  exit;
}

$pageTitle = $item["title"];
$section = null;

include("includes/header.php"); ?>

<div class="section page">
  <div class="wrapper">
    <div class="breadcrumbs">
      <a href="catalog.php">Full Catalog</a>
      &gt;
      <a href="catalog.php?cat=<?php echo $item["category"]; ?>">
        <?php echo strtolower($item["category"]); ?>
      </a>
      &gt;
      <?php echo $item["title"]; ?>
    </div>
    <div class="media-picture">
      <span>
        <img src="<?php echo $item["img"] ?>" alt="<?php echo $item["title"] ?>" />
      </span>
    </div>
    <div class="media-details">
      <h1><?php echo $item["title"]; ?></h1>
      <table>
        <thead>
          <tr>
            <th>Category</th>
            <td><?php echo $item["category"]; ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Year</th>
            <td><?php echo $item["Year"]; ?></td>
          </tr>
          <tr>
            <th>Director</th>
            <td><?php echo $item["Director"]; ?></td>
          </tr>
          <tr>
            <th>Cast</th>
            <td><?php echo implode(", ",$item["Cast"]); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
