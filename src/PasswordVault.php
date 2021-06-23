<?php
	require('dbconnect.php');

	if (!$_COOKIE['curr_user']) {
		header('Location: https://www.passwordvault049.webhostapp.com/src/Login.html')
	}

	$username = $_COOKIE['curr_user'];
	$tablename = 'user_'.$username;
	//Extending cookie lifetime by 1 hour
	setcookie("curr_user", $username, time() + 3600, "/");
	
	echo('
	<div id="top" style="width: 99%; padding: 10px; background-color: black; margin: -10px; color: white; top: 0; position: fixed;s">
		<table class="top" style="width: 100%;border-spacing: unset;">
			<td style="border: unset; color:white; padding : unset; height: unset;">
				<h2 style="text-align: left;">Password Vault</h2>
			</td>
			<td style="text-align: right;border: unset; padding : unset;height: unset;">');
		printf('<p style="color:white;">Logged in as %s</p>', $username);
	  echo('<form action="logout.php" name="logoutForm" method="post" style="margin-right: 10px;">
				<button style="border: 1px solid white; background-color: red; color: white; text-decoration-line: none; cursor: pointer;">Log out</button>
			</form>
			</td>
		</table>
	</div>
	');
	
	printf('<br><br><br><br>
	<center><table><tr><td>
	<div style="background-color:lightblue; width: 300px; border: 5px solid grey;">
		<form name="newAccForm" style="padding:20px;" action="newItem.php" method="post">
			<h3 style="color:black">Type</h3><input type="text" placeholder="e.g. Facebook, Youtube" name="type">
			<h3 style="color:black">Username</h3><input type="text" name="username">
			<h3 style="color:black">Password</h3><input type="text" name="password">
			<br>
			<button type="submit" value="newItem" style="margin-top: 15px; padding: 5px; border: 1px solid #3333ff; background-color: #0099ff; color: white; text-decoration-line: none; cursor: pointer;">+ ADD NEW</button>
		</form>
		</div>
		</td></tr>');

	/*printf('
		<tr>
			<td colspan=2>
				<a href="updateTable.php" style="margin-top: 15px; padding: 10px; border: 1px solid #3333ff; background-color: #0099ff; color: white; text-decoration-line: none; cursor: pointer;"">
					UPDATE TABLE MANUALLY (in case of system error)
				</a>
			</td>
		</tr>
		<br><br><br>
	</center>');
	*/

	//showing table
	if ($result = $conn -> query("SELECT * FROM $tablename")) {
		printf("<table border='2' style='background-color:#8080ff;color:white; width: 900px; max: width 900px; border-collapse: collapse;'><tr style='color:black; background-color:green;'>");
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
			printf ("<form name='delAccForm' action='delItem.php' method='post'>
						<button name='Row' value='%s' type='submit' style='margin-top: 15px; padding: 10px; border: 1px solid white; background-color: red; color: white; text-decoration-line: none; cursor: pointer;'>
							DELETE
						</button>
					</form>\n", $row[3]);
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
	<link rel="icon" href="/img/lock.png">
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
<body style="background-image:url(/img/tech4.jpg);background-color: black;background-attachment: fixed;">

</body>
</html>