<?php
// Create connection
$conn = new mysqli("localhost","root1" ,"1234" , "sampledb");
// Check connection
if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}
$user = $_COOKIE['user'];
$accRow = ($_POST['Row']);

printf("%s \n","deleting acc in position $accRow");
$conn -> query("DELETE FROM $user WHERE $user.ID = $accRow");
header('Location: updateTable.php');
exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deleting</title>
</head>
<body>

</body>
</html>