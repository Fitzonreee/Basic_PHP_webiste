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
			<div class="col-sm-1 col-md-1" id="sidebar">
				<div class="header">
					<div class="wrapper">
						<a href="./">
							<h3 class="branding-title">
								<i class="fa fa-home" aria-hidden="true"></i>
							</h3>
						</a>
						<ul class="nav">
			        <li class="books<?php if($section == "books") {echo " on";} ?>">
								<!-- favorites -->
								<a href="catalog.php?cat=books">
									<h3><i class="fa fa-star-o" aria-hidden="true"></i></h3>
								</a>
							</li>
			        <li class="movies <?php if($section == "movies") {echo " on";} ?>">
								<!-- in theaters -->
								<a href="catalog.php?cat=movies">
									<h3><i class="fa fa-ticket" aria-hidden="true"></i></h3>
								</a>
							</li>
			        <li class="music <?php if($section == "music") {echo " on";} ?>">
								<!-- classics -->
								<a href="catalog.php?cat=music">
									<h3><i class="fa fa-film" aria-hidden="true"></i></h3>
								</a>
							</li>
			        <li class="suggest <?php if($section == "suggest") {echo " on";} ?>">
								<a href="suggest.php">
									<h3><i class="fa fa-comment" aria-hidden="true"></i></h3>
								</a>
							</li>
			      </ul>
					</div>
				</div>
			</div> <!-- end of col-1 (SideBar) -->

			<div class="col-sm-11 col-md-11">
				<div id="content">
