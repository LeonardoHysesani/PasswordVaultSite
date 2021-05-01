<?php
    require('dbconnect.php');
    $user = $_COOKIE['curr_user'];

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