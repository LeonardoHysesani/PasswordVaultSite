<?php
// Create connection
$conn = new mysqli("localhost","root1" ,"1234" , "sampledb");
// Check connection
if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}
$username = $_COOKIE['user'];
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