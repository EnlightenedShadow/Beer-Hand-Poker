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

		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		//Create a New Game
		$sql="CREATE TABLE games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]}(
		PRIMARY KEY(email),
		Email CHAR(50),
		Rank CHAR(15),
		Points INT)";
		
		mysqli_query($con,$sql);

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail1"]}', '1','{$_POST["finalpoints1"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail2"]}', '2','{$_POST["finalpoints2"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail3"]}', '3','{$_POST["finalpoints3"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail4"]}', '4','{$_POST["finalpoints4"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail5"]}', '5','{$_POST["finalpoints5"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail6"]}', '6','{$_POST["finalpoints6"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail7"]}', '7','{$_POST["finalpoints7"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail8"]}', '8','{$_POST["finalpoints8"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail9"]}', '9','{$_POST["finalpoints9"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail10"]}', '10','{$_POST["finalpoints10"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail1"]}', '11','{$_POST["finalpoints11"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail12"]}', '12','{$_POST["finalpoints12"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail13"]}', '13','{$_POST["finalpoints13"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail14"]}', '14','{$_POST["finalpoints14"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail15"]}', '15','{$_POST["finalpoints15"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail16"]}', '16','{$_POST["finalpoints16"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail17"]}', '17','{$_POST["finalpoints17"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail18"]}', '18','{$_POST["finalpoints18"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points)
		VALUES ('{$_POST["finalemail19"]}', '19','{$_POST["finalpoints19"]}')");

		mysqli_query($con,"INSERT INTO games_brixx_gastonia_{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]} (Email, Rank, Points) 
		VALUES ('{$_POST["finalemail20"]}', '20','{$_POST["finalpoints20"]}')");
		
		//Update Points Total
		$pointquery= "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail1"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints1 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail2"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints2 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail3"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints3 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail4"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints4 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail5"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints5 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail6"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints6 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail7"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints7 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail8"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints8 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail9"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints9 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail10"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints10 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail11"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints11 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail12"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints12 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail13"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints13 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail14"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints14 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail15"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints15 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail16"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints16 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail17"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints17 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail18"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints18 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail19"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints19 = $result1['Points'];
		
		$pointquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail20"]}'"; 
		$result = mysqli_query($con,$pointquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevpoints20 = $result1['Points'];
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints1"]}+{$prevpoints1}
		WHERE email='{$_POST["finalemail1"]}'");

		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints2"]}+{$prevpoints2}
		WHERE email='{$_POST["finalemail2"]}'");

		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints3"]}+{$prevpoints3}
		WHERE email='{$_POST["finalemail3"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints4"]}+{$prevpoints4}
		WHERE email='{$_POST["finalemail4"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints5"]}+{$prevpoints5}
		WHERE email='{$_POST["finalemail5"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints6"]}+{$prevpoints6}
		WHERE email='{$_POST["finalemail6"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints7"]}+{$prevpoints7}
		WHERE email='{$_POST["finalemail7"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints8"]}+{$prevpoints8}
		WHERE email='{$_POST["finalemail8"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints9"]}+{$prevpoints9}
		WHERE email='{$_POST["finalemail9"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints10"]}+{$prevpoints10}
		WHERE email='{$_POST["finalemail10"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints11"]}+{$prevpoints11}
		WHERE email='{$_POST["finalemail11"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints12"]}+{$prevpoints12}
		WHERE email='{$_POST["finalemail12"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints13"]}+{$prevpoints13}
		WHERE email='{$_POST["finalemail13"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints14"]}+{$prevpoints14}
		WHERE email='{$_POST["finalemail14"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints15"]}+{$prevpoints15}
		WHERE email='{$_POST["finalemail15"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints16"]}+{$prevpoints16}
		WHERE email='{$_POST["finalemail16"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints17"]}+{$prevpoints17}
		WHERE email='{$_POST["finalemail17"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints18"]}+{$prevpoints18}
		WHERE email='{$_POST["finalemail18"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints19"]}+{$prevpoints19}
		WHERE email='{$_POST["finalemail19"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET points={$_POST["finalpoints20"]}+{$prevpoints20}
		WHERE email='{$_POST["finalemail20"]}'");

		//Update # of Games Played
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail1"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame1 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail2"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame2 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail3"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame3 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail4"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame4 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail5"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame5 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail6"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame6 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail7"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame7 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail8"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame8 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail9"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame9 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail10"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame10 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail11"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame11 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail12"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame12 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail13"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame13 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail14"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame14 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail15"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame15 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail16"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame16 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail17"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame17 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail18"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame18 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail19"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame19 = $result1['Games'];
		
		$gamequery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail20"]}'"; 
		$result = mysqli_query($con,$gamequery);
		$result1 = mysqli_fetch_assoc($result);
		$prevgame20 = $result1['Games'];
				
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame1}+1
		WHERE email='{$_POST["finalemail1"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame2}+1
		WHERE email='{$_POST["finalemail2"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame3}+1
		WHERE email='{$_POST["finalemail3"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame4}+1
		WHERE email='{$_POST["finalemail4"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame5}+1
		WHERE email='{$_POST["finalemail5"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame6}+1
		WHERE email='{$_POST["finalemail6"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame7}+1
		WHERE email='{$_POST["finalemail7"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame8}+1
		WHERE email='{$_POST["finalemail8"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame9}+1
		WHERE email='{$_POST["finalemail9"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame10}+1
		WHERE email='{$_POST["finalemail10"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame11}+1
		WHERE email='{$_POST["finalemail11"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame12}+1
		WHERE email='{$_POST["finalemail12"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame13}+1
		WHERE email='{$_POST["finalemail13"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame14}+1
		WHERE email='{$_POST["finalemail14"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame15}+1
		WHERE email='{$_POST["finalemail15"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame16}+1
		WHERE email='{$_POST["finalemail16"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame17}+1
		WHERE email='{$_POST["finalemail17"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame18}+1
		WHERE email='{$_POST["finalemail18"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame19}+1
		WHERE email='{$_POST["finalemail19"]}'");
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET games={$prevgame20}+1
		WHERE email='{$_POST["finalemail20"]}'");

		//Update # of Wins
		$winsquery = "SELECT * FROM players_brixx_gastonia WHERE email='{$_POST["finalemail1"]}'"; 
		$result = mysqli_query($con,$winsquery);
		$result1 = mysqli_fetch_assoc($result);
		$prevwins = $result1['Wins'];
		
		mysqli_query($con,"UPDATE players_brixx_gastonia SET wins={$prevwins}+1
		WHERE email='{$_POST["finalemail1"]}'");
		
		//Update Date Table
		$names = array(
		 '01' => 'January',
		 '02' => 'February',
		 '03' => 'March',
		 '04' => 'April',
		 '05' => 'May',
		 '06' => 'June',
		 '07' => 'July',
		 '08' => 'August',
		 '09' => 'September',
		 '10' => 'October',
		 '11' => 'November',
		 '12' => 'December'
		);

		$textmonth= $names[$_POST["finalmonth"]];		
  
		mysqli_query($con,"INSERT INTO dates_brixx_gastonia_{$currentSeason} (numerical, text)
		VALUES ('{$_POST["finalyear"]}_{$_POST["finalmonth"]}_{$_POST["finalday"]}_{$_POST["finalgamenumber"]}', '{$textmonth} {$_POST["finalday"]} {$_POST["finalyear"]} Game #{$_POST["finalgamenumber"]}')");
		//Close Connection
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
											<h2>Game Recorded Successfully!</h2>
											<h3>Choose an option below:</h3>
										</header>
										<a href="../rankings/brixx-gastonia/td-control-page.php">Record Another Game</a><br>
										<?php echo '<a href="../rankings/brixx-gastonia/'; echo $currentSeason; echo '/weekly-ranking.php?date='; echo $_POST["finalyear"]; echo '_'; echo $_POST["finalmonth"]; echo '_'; echo $_POST["finalday"]; echo '_'; echo $_POST["finalgamenumber"]; echo '">View Newly Created Game</a>' ?>
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