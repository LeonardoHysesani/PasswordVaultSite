<?php
// Create connection
$conn = new mysqli("localhost","root1" ,"1234" , "sampledb");

$username = $_COOKIE['user'];

// Check connection
if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}

printf("<center>");
printf("<table><div><h1 style='color:white; background-color:black;'>The Vault</h1>");


//showing table
if ($result = $conn -> query("SELECT * FROM $username")) {
	printf("<table border='2' style='background-color:#8080ff;color:white; width: 900px; border-collapse: collapse;'><tr style='color:black; background-color:green;'>");
	printf("<td>ACCOUNT</td>");
    printf ("<td>USERNAME</td>");
    printf("<td>PASSWORD</td><tr>");
  	while ($row = $result -> fetch_row()) {
  		printf("<tr><td>");
    	printf ("%s\n", $row[0]);
    	printf("</td><td>");
    	printf ("%s\n", $row[1]);
    	printf("</td><td>");
    	printf ("%s\n", $row[2]);
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
	<br><br>
	<center>
<div style="background-color:lightblue; width: 300px; border: 5px solid grey;">
	<h2>Store new</h2>
	<form name="newAccForm" style="padding:20px;" action="addAcc.php" method="post">
		<h3 style="color:black">Type</h3><input type="text" placeholder="e.g. Facebook, Youtube" name="type">
		<h3 style="color:black">Username</h3><input type="text" name="username">
		<h3 style="color:black">Password</h3><input type="text" name="password">
		<br>
		<button type="submit" value="newAcc" style="margin-top: 15px; padding: 10px; border: 1px solid #3333ff; background-color: #0099ff; color: white; text-decoration-line: none; cursor: pointer;">+ ADD NEW ACCOUNT</button>
	</form>
	</div>
</center>
	<br>
	<br>
	</script>
</body>
</html>