<?php
	require('dbconnect.php');
	$username = $_COOKIE['curr_user'];
	$tablename = 'user_'.$username;
	$result = $conn -> query("SELECT * FROM $tablename");
	for ($i=1; $i < 50; $i++) { 
		if ($row = $result -> fetch_row()) {
			$conn -> query("UPDATE $tablename SET ID = $i WHERE ID = $row[3]");
		}
	}
	header('Location: PasswordVault.php');
	exit();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="/img/lock.png">
	<title>Updating</title>
</head>
<body>

</body>
</html>