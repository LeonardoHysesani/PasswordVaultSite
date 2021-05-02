<?php
    require('dbconnect.php');
    $user = $_COOKIE['curr_user'];
    $accRow = ($_POST['Row']);

    printf("%s \n","deleting acc in position $accRow");
    $conn -> query("DELETE FROM $user WHERE ID=$accRow");
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