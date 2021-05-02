<?php
	require('dbconnect.php');
	$username = $_COOKIE['curr_user'];
	$result = $conn -> query("SELECT * FROM $username");
	for ($i=1; $i < 50; $i++) { 
		if ($row = $result -> fetch_row()) {
			$conn -> query("UPDATE $username SET ID = $i WHERE ID = $row[3]");
		}
	}
	header('Location: PasswordVault.php');
	exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Updating</title>
</head>
<body>

</body>
</html>