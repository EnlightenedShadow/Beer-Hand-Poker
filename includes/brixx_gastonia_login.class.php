<?php
// username to login into page
define('LOGIN_USER', "mike");

// password to login into page
define('LOGIN_PASS', "Toasteroven89");




###################################################################################################
###################################################################################################
###################################################################################################
# CLASS desc: for calling login authentication
# CLASS req: looks for constants LOGIN_USER and LOGIN_PASS
# Can be called:  ?action=clear_login   ?action=prompt
class Login {

	// unique prefix that is used with this object (on cookies and password salt)
	var $prefix = "login_";

	// days "remember me" cookies will remain
	var $cookie_duration = 21;


	// temporary values for comparing login are auto set here. do not set your own $user or $pass here
	var $user = "";
	var $pass = "";


#-#############################################
# desc: calls the rest of the functions depending on login state
# returns: nothing, but will print login prompt and die if necessary
function authorize() {

	//save cookie info to session
	if(isset($_COOKIE[$this->prefix.'user'])){
		$_SESSION[$this->prefix.'user'] = $_COOKIE[$this->prefix.'user'];
		$_SESSION[$this->prefix.'pass'] = $_COOKIE[$this->prefix.'pass'];
	}
	//	else{echo "no cookie<br>";}


	//if setting vars
	if(isset($_POST['action']) && $_POST['action'] == "set_login"){

		$this->user = $_POST['user'];
		$this->pass = md5($this->prefix.$_POST['pass']); //hash password. salt with prefix

		$this->check();//dies if incorrect

		//if "remember me" set cookie
		if(isset($_POST['remember'])){
			setcookie($this->prefix."user", $this->user, time()+($this->cookie_duration*86400));// (d*24h*60m*60s)
			setcookie($this->prefix."pass", $this->pass, time()+($this->cookie_duration*86400));// (d*24h*60m*60s)
		}

		//set session
		$_SESSION[$this->prefix.'user'] = $this->user;
		$_SESSION[$this->prefix.'pass'] = $this->pass;
	}

	//if forced log in
	elseif(isset($_GET['action']) && $_GET['action'] == "prompt"){
		session_unset();
		session_destroy();
		//destroy any existing cookie by setting time in past
		if(!empty($_COOKIE[$this->prefix.'user'])) setcookie($this->prefix."user", "blanked", time()-(3600*25));
		if(!empty($_COOKIE[$this->prefix.'pass'])) setcookie($this->prefix."pass", "blanked", time()-(3600*25));

		$this->prompt();
	}

	//if clearing the login
	elseif(isset($_GET['action']) && $_GET['action'] == "clear_login"){
		session_unset();
		session_destroy();
		//destroy any existing cookie by setting time in past
		if(!empty($_COOKIE[$this->prefix.'user'])) setcookie($this->prefix."user", "blanked", time()-(3600*25));
		if(!empty($_COOKIE[$this->prefix.'pass'])) setcookie($this->prefix."pass", "blanked", time()-(3600*25));

		$msg = '<h2 class="msg">**Logout complete**</h2>';
		$this->prompt($msg);
	}

	//prompt for
	elseif(!isset($_SESSION[$this->prefix.'pass']) || !isset($_SESSION[$this->prefix.'user'])){
		$this->prompt();
	}

	//check the pw
	else{
		$this->user = $_SESSION[$this->prefix.'user'];
		$this->pass = $_SESSION[$this->prefix.'pass'];
		$this->check();//dies if incorrect
	}

}#-#authorize()


#-#############################################
# desc: compares the user info
# returns: nothing, but will print login prompt and die if incorrect
function check(){

	if(md5($this->prefix . LOGIN_PASS) != $this->pass || LOGIN_USER != $this->user){
		//destroy any existing cookie by setting time in past
		if(!empty($_COOKIE[$this->prefix.'user'])) setcookie($this->prefix."user", "blanked", time()-(3600*25));
		if(!empty($_COOKIE[$this->prefix.'pass'])) setcookie($this->prefix."pass", "blanked", time()-(3600*25));
		session_unset();
		session_destroy();

		$msg='<h2 class="warn">Incorrect username or password</h2>';
		$this->prompt($msg);
	}
}#-#check()


#-#############################################
# desc: prompt to enter password
# param: any custom message to display
# returns: nothing, but exits at end
function prompt($msg=''){
?>
<html>
	<head>
		<title>TD Control Page - Beer Hand Poker</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<style>
			table.login{border-collapse:collapse;}
			table.login td{font:bold 10pt verdana;color:black;border:1px #535353 solid;border-collapse:collapse;padding:2px 3px;text-align:center;background:#eeeeee;}
			table.login td.header{background-color:#cccccc;}
			.msg{font:bold 120% verdana;text-align:center;color:green;}
			.warn{font:bold 120% verdana;text-align:center;color:maroon;}
		</style>
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
										<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
											<input type="hidden" name="action" value="set_login">
											<?php echo $msg; ?>
											<table class="login">
											<tr>
												<td class="header" colspan="2">
													Enter Login Info
												</td>
											</tr>
											<tr>
												<td class="desc">
													<label for="user">Username:</label>
														<input type="text" name="user" id="user">
													</td>
												<td class="desc">
													<label for="pass">Password:</label>
													<input type="password" name="pass" id="pass">
												</td>
											</tr>
											<tr>
												<td class="desc" colspan="2">
													<input type="submit" value="Login">
												</td>
											</tr>
											</table>
										</form>
									</section>
								</div>
							<!-- /Main Content -->
							<!-- Sidebar -->
								<div class="4u">
									<section>
										<header>
											<h2>How our point system works:</h2>
										</header>
										<p>
											At Beer Hand Poker, we make it easy to keep up with the points you earn in each game.
											We do this by keeping our point system simple.
											<br>
											<br>
											For each position you advance in a game, you receive an extra 20 points to that games score.
											The only difference is for 1st, 2nd, and 3rd.
											<br>
											Third place receives 50 points, Second place receives 100 points, and First place receives 150 points.
											<br>
											<br>
											This way the further you make it in a game the higher your overall score will be. The more players, the higher the score.
											<br>
											<br>
											For Example:
											<br>
											If there are a total of 8 players in a game, the scoring would look like this:
											<br>
											<table>
												<tr>
													<td style="width: 25%; vertical-align: middle;">Finishing Position</td>
													<td style="width: 25%; vertical-align: middle;">Players<br>Name</td>
													<td style="width: 25%; vertical-align: middle;">Points<br>Earned For Overall Score</td>
													<td style="width: 25%; vertical-align: middle;">Points Gained For Advancing</td>
												</tr>
												<tr>
													<td style="width: 25%; vertical-align: middle;">1st</td>
													<td style="width: 25%; vertical-align: middle;">Jeffry</td>
													<td style="width: 25%; vertical-align: middle;">350</td>
													<td style="width: 25%; vertical-align: middle;">+150</td>
												</tr>
												<tr>
												  <td style="width: 25%; vertical-align: middle;">2nd</td>
												  <td style="width: 25%; vertical-align: middle;">Laure</td>
												  <td style="width: 25%; vertical-align: middle;">250</td>
												  <td style="width: 25%; vertical-align: middle;">+100</td>
												</tr>
												<tr>
												  <td style="width: 25%; vertical-align: middle;">3rd</td>
												  <td style="width: 25%; vertical-align: middle;">Celia</td>
												  <td style="width: 25%; vertical-align: middle;">150</td>
												  <td style="width: 25%; vertical-align: middle;">+50</td>
												</tr>
												<tr>
												  <td style="width: 25%; vertical-align: middle;">4th</td>
												  <td style="width: 25%; vertical-align: middle;">Isa</td>
												  <td style="width: 25%; vertical-align: middle;">100</td>
												  <td style="width: 25%; vertical-align: middle;">+20</td>
												</tr>
												<tr>
												  <td style="width: 25%; vertical-align: middle;">5th</td>
												  <td style="width: 25%; vertical-align: middle;">Derrick</td>
												  <td style="width: 25%; vertical-align: middle;">80</td>
												  <td style="width: 25%; vertical-align: middle;">+20</td>
												</tr>
												<tr>
												  <td style="width: 25%; vertical-align: middle;">6th</td>
												  <td style="width: 25%; vertical-align: middle;">Nelle</td>
												  <td style="width: 25%; vertical-align: middle;">60</td>
												  <td style="width: 25%; vertical-align: middle;">+20</td>
												</tr>
												<tr>
												  <td style="width: 25%; vertical-align: middle;">7th</td>
												  <td style="width: 25%; vertical-align: middle;">Shara</td>
												  <td style="width: 25%; vertical-align: middle;">40</td>
												  <td style="width: 25%; vertical-align: middle;">+20</td>
												</tr>
												<tr>
												  <td style="width: 25%; vertical-align: middle;">8th</td>
												  <td style="width: 25%; vertical-align: middle;">Demetra</td>
												  <td style="width: 25%; vertical-align: middle;">20</td>
												  <td style="width: 25%; vertical-align: middle;">+20</td>
												</tr>
											</table>
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
			<?php include '../../includes/html/footer.php'; ?>
		<!-- /Footer -->
		<!-- Copyright -->
			<?php include '../../includes/html/copyright.php'; ?>
		<!-- /Copyright -->

	
	
	
	
	
	
	
	
	
	
	
	</body>
</html>
<?php
	//don't run the rest of the page
	exit;
}#-#prompt()


}//CLASS Login

?>