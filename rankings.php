<!DOCTYPE HTML>
<html>
	<head>
		<title>Rankings - Beer Hand Poker</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<link rel="icon" type="image/icon" href="favicon.ico">
	</head>
	<body>
		<!-- Header -->
			<?php include 'includes/html/headerRankings.php'; ?>
		<!-- /Header -->
		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<!-- Main Content -->
								<div class="8u">
									<section>
										<header>
											<h2>Beer Hand Poker Rankings</h2>
											<h3>Choose a venue to view the current standings.</h3>
										</header>
										<table>
											<tr>
												<td style="width: 200px;">
													<a href="rankings/brixx-gastonia/main.php"><img src="images/venues/brixx-no-border.jpg" style="width: 200px;"><br>Brixx Gastonia</a>
												</td>
												<td style="width: 200px;">
													COMING SOON!
												</td>
											</tr>
										</table>
									</section>
								</div>
							<!-- /Main Content -->
							<!-- Sidebar -->
								<div class="4u">
									<section #id="point-breakdown">
										<?php include 'includes/html/point-breakdown.php'; ?>
									</section>
								</div>
							<!-- /Sidebar -->
						</div>
					</div>
				</div>
			</div>
		<!-- /Content -->
		<!-- Footer -->
			<?php include 'includes/html/footer.php'; ?>
		<!-- /Footer -->
		<!-- Copyright -->
			<?php include 'includes/html/copyright.php'; ?>
		<!-- /Copyright -->
	</body>
</html>