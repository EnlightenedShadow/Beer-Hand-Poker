<!DOCTYPE HTML>
<?php $week= $_GET['date']; ?>
<html>
	<head>
		<title>Rankings Brixx Gastonia <?php echo $week; ?> - Beer Hand Poker</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="../../../js/jquery.min.js"></script>
		<script src="../../../js/jquery-ui.js"></script>
		<script src="../../../js/config.js"></script>
		<script src="../../../js/skel.min.js"></script>
		<script src="../../../js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="../../../css/skel-noscript.css" />
			<link rel="stylesheet" href="../../../css/style.css" />
			<link rel="stylesheet" href="../../../css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="../../../css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../../../js/html5shiv.js"></script><![endif]-->
		<link rel="icon" type="image/icon" href="../../../favicon.ico">
		<?php include '../../../includes/global_config.php'; ?>
	</head>
	<body>
		<!-- Header -->
			<?php include '../../../includes/html/headerRankingsSubSub.php'; ?>
		<!-- /Header -->
		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<!-- Main Content -->
								<div class="8u">
									<section>
										<div id="standings-image">
											<img src="../../../images/venues/brixx-no-border.jpg" alt="" />
										</div>
										<header>
											<h2>Brixx Gastonia Ranking</h2>
											<h3><?php echo $week; ?></h3>
										</header>
										<!-- Standings -->
											<div id="standings">
												<?php
												$con=mysqli_connect($mysqlserver,$mysqluser,$mysqlpass,$mysqldb);
													// Check connection
													if (mysqli_connect_errno()) {
													  echo "Failed to connect to MySQL: " . mysqli_connect_error();
													}

												$result = mysqli_query
												($con,
													"SELECT games_brixx_gastonia_".$week.".rank, players_brixx_gastonia.name, games_brixx_gastonia_".$week.".points
													FROM games_brixx_gastonia_".$week.", players_brixx_gastonia
													WHERE games_brixx_gastonia_".$week.".email = players_brixx_gastonia.email
													ORDER BY games_brixx_gastonia_".$week.".rank
													LIMIT 20"
												);

												echo "<table>
													<tr>
														<th>Rank</th>
														<th>Name</th>
														<th>Points</th>
													</tr>";

												while($row = mysqli_fetch_array($result)) {
													echo "<tr>";
													echo "<td>" . $row['rank'] . "</td>";
													echo "<td>" . $row['name'] . "</td>";
													echo "<td>" . $row['points'] . "</td>";
													echo "</tr>";
												}

												echo "</table>";

												mysqli_close($con);
												?>
											</div>
										<!-- /Standings -->
									</section>
								</div>
							<!-- /Main Content -->
							<!-- Sidebar -->
								<div class="4u">
									<section>
										<div id="weekly-rankings">
											<header>
												<h2>Weekly Rankings</h2>
											</header>
											<a href="overall-ranking.php">Season One</a><br>
											<?php
											
											$con=mysqli_connect("localhost","root","Toasteroven89","beerhandpoker");
											// Check connection
											if (mysqli_connect_errno()) {
											  echo "Failed to connect to MySQL: " . mysqli_connect_error();
											}

											$result = mysqli_query
											($con,
												"
												 SELECT dates, `Text Dates`
												 FROM dates_brixx_gastonia_season_one
												 ORDER BY dates
												"
											);

											echo "<select style='width: 200px;' onchange='location = this.options[this.selectedIndex].value;'>";

											echo "<option>Select Game</option>";
											
											while($row = mysqli_fetch_array($result)) {
												echo "<option value='weekly-ranking.php?date=" . $row['dates'] . "'>" . $row['Text Dates'] . "</option>";
											}

											echo "</select>";

											mysqli_close($con);
											?>
										</div>
									</section>
									<section id="point-breakdown">
										<?php include '../../../includes/html/point-breakdown.php'; ?>
									</section>
									<section>
										<header>
											<h2>Tournament Director</h2>
										</header>
										<a href="../td-control-page.php">Control Page Login</a>
									</section>
								</div>
							<!-- /Sidebar -->
						</div>
					</div>
				</div>
			</div>
		<!-- /Content -->
		<!-- Footer -->
			<?php include '../../../includes/html/footer.php'; ?>
		<!-- /Footer -->
		<!-- Copyright -->
			<?php include '../../../includes/html/copyright.php'; ?>
		<!-- /Copyright -->
	</body>
</html>