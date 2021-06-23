<?php
    require('dbconnect.php');
    $user = $_COOKIE['curr_user'];
    $tablename = 'user_'.$user;
    $accRow = ($_POST['Row']);

    $conn -> query("DELETE FROM $tablename WHERE ID=$accRow");
    header('Location: updateTable.php');
    exit();

    printf("%s \n","deleting acc in position $accRow");

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="/img/lock.png">
	<title>Deleting</title>
</head>
<body>

</body>
</html>