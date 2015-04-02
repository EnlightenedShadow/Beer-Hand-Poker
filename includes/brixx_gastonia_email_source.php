<?php
		<?php include 'global_config.php';?>

		// Create connection
		$req=mysqli_connect($mysqlserver,$mysqluser,$mysqlpass,$mysqldb);

		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$req = "SELECT email "
			."FROM players_brixx_gastonia "
			."WHERE email LIKE '%".$_REQUEST['term']."%' "; 

		$query = mysql_query($req);

		while($row = mysql_fetch_array($query))
		{
			$results[] = array('label' => $row['email']);
		}

		echo json_encode($results);			
?>