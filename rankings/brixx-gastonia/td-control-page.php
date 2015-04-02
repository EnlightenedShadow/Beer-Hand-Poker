<?php
session_start();
require("../../includes/brixx_gastonia_login.class.php");
$login = new Login;
$login->authorize();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>TD Control Page - Beer Hand Poker</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../../css/jquery-ui.css">
		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/jquery-ui.js"></script>
		<script src="../../js/config.js"></script>
		<script src="../../js/skel.min.js"></script>
		<script src="../../js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="../../css/skel-noscript.css" />
			<link rel="stylesheet" href="../../css/style.css" />
			<link rel="stylesheet" href="../../css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="../../css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="../../js/html5shiv.js"></script><![endif]-->
		<link rel="icon" type="image/icon" href="../../favicon.ico">
		<script>
			$(function()
				{

					$( ".search" ).autocomplete(
						{
							source:'../../includes/brixx_gastonia_email_source.php',
						});
					
				});
		</script>
	</head>
	<body>
		<!-- Header -->
			<?php include '../../includes/html/headerRankingsSub.php'; ?>
		<!-- /Header -->
		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<!-- Main Content -->
								<div class="8u">
									<section>
										<div id="new_player" style="text-align: center;">
											<h3>New Player</h3>
											<form method="post" action="../../includes/brixx_gastonia_newplayer.php">
												<span>Name:</span>
													<input type="text" style="width: 150px;" name="playername" value="">
												<span>Email:</span>
													<input type="text" style="width: 150px;" name="playeremail" value="">
												<br>
												<input type="submit" name="submit" value="Create Player">
												<p style="color: red;">Attention: If creating a new player, make sure to capitalize both their first and last name.<br>Also be sure to correctly spell their email.</p>
											</form>
										</div>
									</section>
									<section>
										<div id="score_input">
											<h3>Score Input Form</h3>
											<?php
											$month = isset($_POST['month']) ? $_POST['month'] : '';
											$day = isset($_POST['day']) ? $_POST['day'] : '';
											$year = isset($_POST['year']) ? $_POST['year'] : '';
											$game = isset($_POST['game']) ? $_POST['game'] : '';
											$numPlayers = isset($_POST['numPlayers']) ? $_POST['numPlayers'] : '';
											$email1 = isset($_POST['email1']) ? $_POST['email1'] : '';
											$email2 = isset($_POST['email2']) ? $_POST['email2'] : '';
											$email3 = isset($_POST['email3']) ? $_POST['email3'] : '';
											$email4 = isset($_POST['email4']) ? $_POST['email4'] : '';
											$email5 = isset($_POST['email5']) ? $_POST['email5'] : '';
											$email6 = isset($_POST['email6']) ? $_POST['email6'] : '';
											$email7 = isset($_POST['email7']) ? $_POST['email7'] : '';
											$email8 = isset($_POST['email8']) ? $_POST['email8'] : '';
											$email9 = isset($_POST['email9']) ? $_POST['email9'] : '';
											$email10 = isset($_POST['email10']) ? $_POST['email10'] : '';
											$email11 = isset($_POST['email11']) ? $_POST['email11'] : '';
											$email12 = isset($_POST['email12']) ? $_POST['email12'] : '';
											$email13 = isset($_POST['email13']) ? $_POST['email13'] : '';
											$email14 = isset($_POST['email14']) ? $_POST['email14'] : '';
											$email15 = isset($_POST['email15']) ? $_POST['email15'] : '';
											$email16 = isset($_POST['email16']) ? $_POST['email16'] : '';
											$email17 = isset($_POST['email17']) ? $_POST['email17'] : '';
											$email18 = isset($_POST['email18']) ? $_POST['email18'] : '';
											$email19 = isset($_POST['email19']) ? $_POST['email19'] : '';
											$email20 = isset($_POST['email20']) ? $_POST['email20'] : '';
											$points1 = $numPlayers * 20 + 240;
											$points2 = $numPlayers * 20 + 90;
											$points3 = $numPlayers * 20 - 10;
											$points4 = $numPlayers * 20 - 60;
											$points5 = $numPlayers * 20 - 80;
											$points6 = $numPlayers * 20 - 100;
											$points7 = $numPlayers * 20 - 120;
											$points8 = $numPlayers * 20 - 140;
											$points9 = $numPlayers * 20 - 160;
											$points10 = $numPlayers * 20 - 180;
											$points11 = $numPlayers * 20 - 200;
											$points12 = $numPlayers * 20 - 220;
											$points13 = $numPlayers * 20 - 240;
											$points14 = $numPlayers * 20 - 260;
											$points15 = $numPlayers * 20 - 280;
											$points16 = $numPlayers * 20 - 300;
											$points17 = $numPlayers * 20 - 320;
											$points18 = $numPlayers * 20 - 340;
											$points19 = $numPlayers * 20 - 360;
											$points20 = $numPlayers * 20 - 380;
											?>
											<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
												<h4>Date:</h4>
												<span>mm</span>
													<input type="text" style="width: 40px;" name="month" value="<?php echo $month; ?>">
												<span>dd</span>
													<input type="text" style="width: 40px;" name="day" value="<?php echo $day; ?>">
												<span>yyyy</span>
													<input type="text" style="width: 80px;" name="year" value="<?php echo $year; ?>">
												<span>Game Number:</span>
													<input type="radio" name="game" <?php if (isset($game) && $game=="1") echo "checked";?> value="1">One
													<input type="radio" name="game" <?php if (isset($game) && $game=="2") echo "checked";?> value="2">Two
													<input type="radio" name="game" <?php if (isset($game) && $game=="3") echo "checked";?> value="3">Three
												<br>
												<span>Number of Players:</span>
													<input type="number" style="width: 40px;" name="numPlayers" value="<?php echo $numPlayers; ?>">
												<table style="width: 75%; margin: auto;">
													<tr>
														<th>Finishing Position</th>
														<th>Player's E-mail</th>
													</tr>
													<tr>
														<td>1st</td>
														<td>
															<input type="text" class="search" name="email1" value="<?php echo $email1;?>">
														</td>
													</tr>
													<tr>
														<td>2nd</td>
														<td>
															<input type="text" class="search" name="email2" value="<?php echo $email2;?>">
														</td>
													</tr>
													<tr>
														<td>3rd</td>
														<td>
															<input type="text" class="search" name="email3" value="<?php echo $email3;?>">
														</td>
													<tr>
														<td>4th</td>
														<td>
															<input type="text" class="search" name="email4" value="<?php echo $email4;?>">
														</td>
													</tr>
													<tr>
														<td>5th</td>
														<td>
															<input type="text" class="search" name="email5" value="<?php echo $email5;?>">
														</td>
													</tr>
													<tr>
														<td>6th</td>
														<td>
															<input type="text" class="search" name="email6" value="<?php echo $email6;?>">
														</td>
													</tr>
													<tr>
														<td>7th</td>
														<td>
															<input type="text" class="search" name="email7" value="<?php echo $email7;?>">
														</td>
													</tr>
													<tr>
														<td>8th</td>
														<td>
															<input type="text" class="search" name="email8" value="<?php echo $email8;?>">
														</td>
													</tr>
													<tr>
														<td>9th</td>
														<td>
															<input type="text" class="search" name="email9" value="<?php echo $email9;?>">
														</td>
													</tr>
													<tr>
														<td>10th</td>
														<td>
															<input type="text" class="search" name="email10" value="<?php echo $email10;?>">
														</td>
													</tr>
													<tr>
														<td>11th</td>
														<td>
															<input type="text" class="search" name="email11" value="<?php echo $email11;?>">
														</td>
													</tr>
													<tr>
														<td>12th</td>
														<td>
															<input type="text" class="search" name="email12" value="<?php echo $email12;?>">
														</td>
													</tr>
													<tr>
														<td>13th</td>
														<td>
															<input type="text" class="search" name="email13" value="<?php echo $email13;?>">
														</td>
													</tr>
													<tr>
														<td>14th</td>
														<td>
															<input type="text" class="search" name="email14" value="<?php echo $email14;?>">
														</td>
													</tr>
													<tr>
														<td>15th</td>
														<td>
															<input type="text" class="search" name="email15" value="<?php echo $email15;?>">
														</td>
													</tr>
													<tr>
														<td>16th</td>
														<td>
															<input type="text" class="search" name="email16" value="<?php echo $email16;?>">
														</td>
													</tr>
													<tr>
														<td>17th</td>
														<td>
															<input type="text" class="search" name="email17" value="<?php echo $email17;?>">
														</td>
													</tr>
													<tr>
														<td>18th</td>
														<td>
															<input type="text" class="search" name="email18" value="<?php echo $email18;?>">
														</td>
													</tr>
													<tr>
														<td>19th</td>
														<td>
															<input type="text" class="search" name="email19" value="<?php echo $email19;?>">
														</td>
													</tr>
													<tr>
														<td>20th</td>
														<td>
															<input type="text" class="search" name="email20" value="<?php echo $email20;?>">
														</td>
													</tr>
												</table>
												<br>
												<input type="submit" name="submit" value="Update to Review Below"> 
											</form>
												<?php
												echo "<br><br>";
												echo "<h3>Game Review:</h3>";
												echo "<p style='color: red;'>Please make sure all information is correct BEFORE you submit the final draft below!</p>";
												echo "Date:&nbsp"; echo $month; echo "/"; echo $day; echo "/"; echo $year;
												echo "&nbsp &nbsp &nbsp";
												echo "Game: &nbsp"; echo $game;
												echo "&nbsp &nbsp &nbsp";
												echo "Number of Players: &nbsp"; echo $numPlayers;
												echo "<table style='width: 75%; margin: auto;'>
												<tr>
												<th>Rank</th>
												<th>E-mail</th>
												<th>Points Scored</th>
												</tr>";
												echo "<tr>";
												echo "<td>1st</td>";
												echo "<td>"; echo $email1; "</td>";
												echo "<td>"; echo $points1; "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<td>2nd</td>";
												echo "<td>"; echo $email2; "</td>";
												echo "<td>"; echo $points2; "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<td>3rd</td>";
												echo "<td>"; echo $email3; "</td>";
												echo "<td>"; echo $points3; "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<td>4th</td>";
												echo "<td>"; echo $email4; "</td>";
												echo "<td>"; echo $points4; "</td>";
												echo "</tr>";
												echo "<td>5th</td>";
												echo "<td>"; echo $email5; "</td>";
												echo "<td>"; echo $points5; "</td>";
												echo "</tr>";
												echo "<td>6th</td>";
												echo "<td>"; echo $email6; "</td>";
												echo "<td>"; echo $points6; "</td>";
												echo "</tr>";
												echo "<td>7th</td>";
												echo "<td>"; echo $email7; "</td>";
												echo "<td>"; echo $points7; "</td>";
												echo "</tr>";
												echo "<td>8th</td>";
												echo "<td>"; echo $email8; "</td>";
												echo "<td>"; echo $points8; "</td>";
												echo "</tr>";
												echo "<td>9th</td>";
												echo "<td>"; echo $email9; "</td>";
												echo "<td>"; echo $points9; "</td>";
												echo "</tr>";
												echo "<td>10th</td>";
												echo "<td>"; echo $email10; "</td>";
												echo "<td>"; echo $points10; "</td>";
												echo "</tr>";
												echo "<td>11th</td>";
												echo "<td>"; echo $email11; "</td>";
												echo "<td>"; echo $points11; "</td>";
												echo "</tr>";
												echo "<td>12th</td>";
												echo "<td>"; echo $email12; "</td>";
												echo "<td>"; echo $points12; "</td>";
												echo "</tr>";
												echo "<td>13th</td>";
												echo "<td>"; echo $email13; "</td>";
												echo "<td>"; echo $points13; "</td>";
												echo "</tr>";
												echo "<td>14th</td>";
												echo "<td>"; echo $email14; "</td>";
												echo "<td>"; echo $points14; "</td>";
												echo "</tr>";
												echo "<td>15th</td>";
												echo "<td>"; echo $email15; "</td>";
												echo "<td>"; echo $points15; "</td>";
												echo "</tr>";
												echo "<td>16th</td>";
												echo "<td>"; echo $email16; "</td>";
												echo "<td>"; echo $points16; "</td>";
												echo "</tr>";
												echo "<td>17th</td>";
												echo "<td>"; echo $email17; "</td>";
												echo "<td>"; echo $points17; "</td>";
												echo "</tr>";
												echo "<td>18th</td>";
												echo "<td>"; echo $email18; "</td>";
												echo "<td>"; echo $points18; "</td>";
												echo "</tr>";
												echo "<td>19th</td>";
												echo "<td>"; echo $email19; "</td>";
												echo "<td>"; echo $points19; "</td>";
												echo "</tr>";
												echo "<td>20th</td>";
												echo "<td>"; echo $email20; "</td>";
												echo "<td>"; echo $points20; "</td>";
												echo "</tr>";
												echo "</table>";
												?>									
											<form action="../../includes/brixx_gastonia_newgame.php" method="post">
												<input type="hidden" name="finalmonth" value="<?php echo $month;?>">
												<input type="hidden" name="finalday" value="<?php echo $day;?>">
												<input type="hidden" name="finalyear" value="<?php echo $year;?>">
												<input type="hidden" name="finalgamenumber" value="<?php echo $game;?>">
												<input type="hidden" name="finalemail1" value="<?php echo $email1;?>">
												<input type="hidden" name="finalpoints1" value="<?php echo $points1;?>">
												<input type="hidden" name="finalemail2" value="<?php echo $email2;?>">
												<input type="hidden" name="finalpoints2" value="<?php echo $points2;?>">
												<input type="hidden" name="finalemail3" value="<?php echo $email3;?>">
												<input type="hidden" name="finalpoints3" value="<?php echo $points3;?>">
												<input type="hidden" name="finalemail4" value="<?php echo $email4;?>">
												<input type="hidden" name="finalpoints4" value="<?php echo $points4;?>">
												<input type="hidden" name="finalemail5" value="<?php echo $email5;?>">
												<input type="hidden" name="finalpoints5" value="<?php echo $points5;?>">
												<input type="hidden" name="finalemail6" value="<?php echo $email6;?>">
												<input type="hidden" name="finalpoints6" value="<?php echo $points6;?>">
												<input type="hidden" name="finalemail7" value="<?php echo $email7;?>">
												<input type="hidden" name="finalpoints7" value="<?php echo $points7;?>">
												<input type="hidden" name="finalemail8" value="<?php echo $email8;?>">
												<input type="hidden" name="finalpoints8" value="<?php echo $points8;?>">
												<input type="hidden" name="finalemail9" value="<?php echo $email9;?>">
												<input type="hidden" name="finalpoints9" value="<?php echo $points9;?>">
												<input type="hidden" name="finalemail10" value="<?php echo $email10;?>">
												<input type="hidden" name="finalpoints10" value="<?php echo $points10;?>">
												<input type="hidden" name="finalemail11" value="<?php echo $email11;?>">
												<input type="hidden" name="finalpoints11" value="<?php echo $points11;?>">
												<input type="hidden" name="finalemail12" value="<?php echo $email12;?>">
												<input type="hidden" name="finalpoints12" value="<?php echo $points12;?>">
												<input type="hidden" name="finalemail13" value="<?php echo $email13;?>">
												<input type="hidden" name="finalpoints13" value="<?php echo $points13;?>">
												<input type="hidden" name="finalemail14" value="<?php echo $email14;?>">
												<input type="hidden" name="finalpoints14" value="<?php echo $points14;?>">
												<input type="hidden" name="finalemail15" value="<?php echo $email15;?>">
												<input type="hidden" name="finalpoints15" value="<?php echo $points15;?>">
												<input type="hidden" name="finalemail16" value="<?php echo $email16;?>">
												<input type="hidden" name="finalpoints16" value="<?php echo $points16;?>">
												<input type="hidden" name="finalemail17" value="<?php echo $email17;?>">
												<input type="hidden" name="finalpoints17" value="<?php echo $points17;?>">
												<input type="hidden" name="finalemail18" value="<?php echo $email18;?>">
												<input type="hidden" name="finalpoints18" value="<?php echo $points18;?>">
												<input type="hidden" name="finalemail19" value="<?php echo $email19;?>">
												<input type="hidden" name="finalpoints19" value="<?php echo $points19;?>">
												<input type="hidden" name="finalemail20" value="<?php echo $email20;?>">
												<input type="hidden" name="finalpoints20" value="<?php echo $points20;?>">
												<br>
												<input type="submit" name="submit" value="Final Submission">
											</form>
										</div>
									</section>
								</div>
							<!-- /Main Content -->
							<!-- Sidebar -->
								<div class="4u">
									<section id="point-breakdown">
										<?php include '../../includes/html/point-breakdown.php'; ?>
									</section>
								</div>
							<!-- /Sidebar -->
						</div>
					</div>
				</div>
			</div>
		<!-- /Content -->
		<!-- Footer -->
			<?php include '../../includes/html/footer.php'; ?>
		<!-- /Footer -->
		<!-- Copyright -->
			<?php include '../../includes/html/copyright.php'; ?>
		<!-- /Copyright -->
	</body>
</html>