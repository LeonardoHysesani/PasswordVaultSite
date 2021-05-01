<?php
// Create connection
$conn = new mysqli("localhost","root1" ,"1234" , "sampledb");
// Check connection
if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}
$user = $_COOKIE['user'];

$type = ($_POST['type']);
$username = ($_POST['username']);
$password = ($_POST['password']);
$conn -> query("INSERT INTO $user (TYPE, USERNAME, PASSWORD) VALUES ('$type', '$username', '$password')");
header("Location: updateTable.php");
exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Storing new account</title>
</head>
<body>

</body>
</html>