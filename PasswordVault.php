<?php
// Create connection
$conn = new mysqli("localhost","root1" ,"1234" , "sampledb");
// Check connection
if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}

$username = $_COOKIE['user'];

printf("<center>");
printf("<div><h1 style='color:white; background-color:black'><div style='font-size: 80px;'>The Vault</div></h1>");
printf('<center><table><tr><td>
<div style="background-color:lightblue; width: 300px; border: 5px solid grey;">
	<h2 style="margin-bottom:-30px">Store new</h2>
	<form name="newAccForm" style="padding:20px;" action="addAcc.php" method="post">
		<h3 style="color:black">Type</h3><input type="text" placeholder="e.g. Facebook, Youtube" name="type">
		<h3 style="color:black">Username</h3><input type="text" name="username">
		<h3 style="color:black">Password</h3><input type="text" name="password">
		<br>
		<button type="submit" value="newAcc" style="margin-top: 15px; padding: 10px; border: 1px solid #3333ff; background-color: #0099ff; color: white; text-decoration-line: none; cursor: pointer;">+ ADD NEW ACCOUNT</button>
	</form>
	</div>
	</td>');
printf('<td>
<div style="background-color:#ff5c33; width: 300px; border: 5px solid grey;">
	<h2 style="margin-bottom:-30px">DELETE</h2>
	<form name="delAccForm" style="padding:20px;" action="delAcc.php" method="post">
		<h3 style="color:black">Specify # of account</h3><input type="text" name="Row">
		<br>
		<button type="submit" value="newAcc" style="margin-top: 15px; padding: 10px; border: 1px solid white; background-color: red; color: white; text-decoration-line: none; cursor: pointer;">- DELETE ACCOUNT</button>
	</form>
	</div>
	</td></tr>
	<tr><td colspan=2><a href="updateTable.php" style="margin-top: 15px; padding: 10px; border: 1px solid #3333ff; background-color: #0099ff; color: white; text-decoration-line: none; cursor: pointer;"">UPDATE TABLE MANUALLY</a></td></tr>
	<br><br><br>
</center>');

//showing table
if ($result = $conn -> query("SELECT * FROM $username")) {
	printf("<table border='2' style='background-color:#8080ff;color:white; width: 900px; border-collapse: collapse;'><tr style='color:black; background-color:green;'>");
	printf("<td>ACCOUNT</td>");
    printf ("<td>USERNAME</td>");
    printf("<td>PASSWORD</td>");
    printf("<td>#</td>");
    printf ("</tr>");
  	while ($row = $result -> fetch_row()) {
  		printf("<tr><td>");
    	printf ("%s\n", $row[0]);
    	printf("</td><td>");
    	printf ("%s\n", $row[1]);
    	printf("</td><td>");
    	printf ("%s\n", $row[2]);
    	printf("</td><td>");
    	printf ("%s\n", $row[3]);
    	printf("</td></tr>");
  	}
  	printf("</table>");
  	$result -> free_result();
}
printf("</table></center>");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Vault</title>
	<style type="text/css">
		table{
			border-spacing: 1rem;
		}
		td {
			padding : 1rem;
			width: 4rem;
  			height: 2rem;
  			border: 1px solid #ccc;
  			text-align: center;
		}

	</style>
</head>
<body style="background-image:url(tech4.jpg)">

</body>
</html>