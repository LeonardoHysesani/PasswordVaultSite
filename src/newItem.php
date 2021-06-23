<?php
    require('dbconnect.php');
    $user = $_COOKIE['curr_user'];
    $tablename = 'user_'.$user;

    $type = ($_POST['type']);
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $conn -> query("INSERT INTO $tablename (TYPE, USERNAME, PASSWORD) VALUES ('$type', '$username', '$password')");
    header("Location: updateTable.php");
    exit();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="/img/lock.png">
	<title>Storing new account</title>
</head>
<body>

</body>
</html>