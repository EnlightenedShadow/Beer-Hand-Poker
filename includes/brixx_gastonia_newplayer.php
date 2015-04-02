<!DOCTYPE HTML>
<html>
	<head>
		<title>Rankings - Beer Hand Poker</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="../js/jquery.min.js"></script>
		<script src="../js/config.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="../css/skel-noscript.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="../css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../js/html5shiv.js"></script><![endif]-->
		<link rel="icon" type="image/icon" href="../favicon.ico">
		<?php include 'global_config.php';?>
	</head>
	<body>
		<?php
		// Create connection
		$con=mysqli_connect($mysqlserver,$mysqluser,$mysqlpass,$mysqldb);

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		// Create table
		$sql = "INSERT INTO players_brixx_gastonia (Name, Email)
				VALUES ('{$_POST["playername"]}', '{$_POST["playeremail"]}')";
		
		// Execute query
		if (mysqli_query($con,$sql)) {
		} else {
		}

		mysqli_close($con);
		?>
				
		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="4u" style="text-align: center;">
							<!-- Logo -->
								<div id="logo-image">
									<a href="../index.php" class="">
										<img src="../images/beerHandLogo.png" style="width: 200px; height: 290px;" alt="" />
									</a>
								</div>
							<!-- /Logo -->
							<!-- Title Text -->
								<div id="title">
									<h1>
										<a href="../index.php" id="logo">Beer Hand Poker</a>
									</h1>
								</div>
							<!-- /Title Text -->
						</div>
						<div class="8u" style="text-align: center; height: 333px;">
							<!-- Header Image -->
								<div id="header-image" style="position: absolute; top: 50px; right: 20px;">
									<img src="../images/headerImage.png" style="width: 700px; height: 292px;" alt="" />
								</div>
							<!-- /Header Image -->
						</div>
					</div>
					<div class="row">				
						<div class="12u" style="text-align: center; padding: 20px 250px 20px 250px;">
							<!-- Nav -->
								<div id="nav">
									<nav id="nav">
										<a href="../index.php">Homepage</a>
										<a href="../rankings.php" style="text-decoration: underline;">Rankings</a>
										<a href="../venues.php">Venues</a>
										<a href="../schedule.php">Schedule</a>
										<a href="../sponsors.php">Sponsors</a>
										<a href="../championships.php">Championships</a>
										<a href="../membership.php">Membership</a>
										<a href="../rules.php">Rules</a>
										<a href="../contact.php">Contact Us</a>
									</nav>
								</div>
							<!-- /Nav -->
						</div>
					</div>
				</header>
			</div>
		<!-- /Header -->
		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<!-- Main Content -->
								<div class="12u">
									<section>
										<header>
											<h2>Player Created Successfully!</h2>
										</header>
										<a href="../rankings/brixx-gastonia/td-control-page.php">Return to Control Panel</a><br>
									</section>
								</div>
							<!-- /Main Content -->
						</div>
					</div>
				</div>
			</div>
		<!-- /Content -->
		<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<!-- Links -->
							<div class="12u">
								<section>
									<h2>Links</h2>
									<div>
										<div class="row">
											<div class="4u">
												<h3>Social Media</h3>
												<ul class="link-list last-child">
													<li><a href="../http://www.facebook.com">Facebook</a></li>
													<li><a href="../http://www.twitter.com">Twitter</a></li>
												</ul>
											</div>
											<div class="4u">
												<h3>Venue Websites</h3>
												<ul class="link-list last-child">
													<li><a href="../http://brixxpizza.com/locations/gastonia">Brixx (Gastonia NC)</a></li>
												</ul>
											</div>
											<div class="4u">
												<h3>Sponsors</h3>
												<ul class="link-list last-child">
													<li><a href="../sponsors.php">None yet! JOIN US!</a></li>
												</ul>
											</div>
										</div>
									</div>
								</section>
							</div>
						<!-- /Links -->
					</div>
				</footer>
			</div>
		<!-- /Footer -->
		<!-- Copyright -->
			<div id="copyright">
				&copy; Beer Hand Poker INC. All rights reserved. | Template: <a href="../http://html5up.net">HTML5 UP</a> | Design: Beer Hand Poker INC.
			</div>
		<!-- /Copyright -->
	</body>
</html>