<!DOCTYPE HTML>
<html>
	<head>
		<title>Schedule - Beer Hand Poker</title>
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
			<?php include 'includes/html/headerSchedule.php'; ?>
		<!-- /Header -->
		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<!-- Main Content -->
								<div class="9u">
									<section>
										<header>
											<h2>Season One Schedule</h2>
											<h3>The upcoming events for season one.</h3>
										</header>
										<!-- Calendar -->
											<div id="upto-calendar-container-CdOO" class="upto-calendar-plugin">
											  <script>!function(c,b,a){function d(h){var e=document.getElementById("upto-calendar-container-"+c),f=document.createElement("SCRIPT"),g=" http://upto.com/js/plugin.js";f.onreadystatechange=function(){if(f.readyState==="loaded"||f.readyState==="complete"){f.onreadystatechange=null;h()}};f.onload=function(){h()};f.setAttribute("src",g);e.parentNode.insertBefore(f,e)}d(function(){upto.init(c)})}("CdOO");</script>
											</div>
										<!-- /Calendar -->
									</section>
								</div>
							<!-- /Main Content -->
							<!-- Sidebar -->
								<div class="3u">
									<section>
										<h2>Upto Calendar</h2>
										<p>
											Our events calendar to the left is powered by <a href="http://www.upto.com/">Upto</a>. The Upto company has an app for Android and iOS. Be sure to download the Upto app for our schedule on the go!
										</p>
										<h2>Season Length</h2>
										<p>
											We have four seasons a year, each season lasting three months.
										</p>										
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