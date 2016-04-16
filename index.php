<?php
include("includes/data.php");
include("includes/functions.php");

$pageTitle = "Personal Media Library";
$section = null;
include("includes/header.php"); ?>
	<!-- start of content on header.php -->
	<div class="section catalog random">
		<h2 id="headline">All Movies</h2>
		<div class="wrapper">
			<ul class="items">
				<?php
				$random = array_rand($catalog, 4);
				foreach ($random as $id) {
					echo get_item_html($id, $catalog[$id]);
				}
				 ?>
			</ul>
		</div>
	</div>
<?php include("includes/footer.php"); ?>
