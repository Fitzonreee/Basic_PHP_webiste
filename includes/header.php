<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bootflat.github.io/bootflat/css/bootflat.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="dist/css/style.css" type="text/css"> -->
	<link rel="stylesheet" href="dist/css/c.min.css" type="text/css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-2" id="sidebar">
				<div class="header">
					<div class="wrapper">
						<h1 class="branding-title">
							<a href="./">
								<i class="fa fa-film" aria-hidden="true"></i>
							</a>
						</h1>
						<ul class="nav">
			        <li class="books<?php if($section == "books") {echo " on";} ?>"><a href="catalog.php?cat=books">Books</a></li>
			        <li class="movies <?php if($section == "movies") {echo " on";} ?>"><a href="catalog.php?cat=movies">Movies</a></li>
			        <li class="music <?php if($section == "music") {echo " on";} ?>"><a href="catalog.php?cat=music">Music</a></li>
			        <li class="suggest <?php if($section == "suggest") {echo " on";} ?>"><a href="suggest.php">Suggest</a></li>
			      </ul>
					</div>
				</div>
				<div class="footer">
				  <div class="wrapper">
				    <ul>
				      <li><a href="http://twitter.com/treehouse">Twitter</a></li>
				      <li><a href="https://www.facebook.com/TeamTreehouse">Facebook</a></li>
				    </ul>
				    <p>&copy;<?php echo date('Y'); ?> Cinephile</p>
				  </div>
				</div>
			</div> <!-- end of col-2 (SideBar) -->

	<div id="content">
