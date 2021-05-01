<?php 
	require('dbconnect.php');

	//GET DATA
	$user = (($_POST['user']));
	$passw = ($_POST['passw']);
	$confpassw = ($_POST['confpassw']);
	if ($user == NULL OR $passw == NULL OR $confpassw == NULL) {
		header('Location: Signup.php');
		exit();
	}

	//CHECKING VALIDITY OF DATA
	$result = $conn -> query("SELECT UID FROM UsersTable WHERE USERNAME = '$user'");
	$row = $result -> fetch_row();
	switch ($row) {
		case !NULL:
			echo("<center><h1 style='color:white'>USERNAME IS TAKEN</h1><center>");
			break;

		default:
			if ($passw == $confpassw) {
					if ($conn -> query("CREATE TABLE sampledb.$user ( TYPE TEXT NULL DEFAULT NULL , USERNAME TEXT NULL DEFAULT NULL , PASSWORD TEXT NULL DEFAULT NULL , ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (ID)) ENGINE = InnoDB") == TRUE) {
						$conn -> query("INSERT INTO UsersTable (USERNAME, PASSWORD) VALUES ('$user', '$passw')");
						printf("<h1 style='color:white'>Account created. You can now login.</h1>");
					}
					break;
			}
			else{
				echo "<center><h1 style='color:white'>PASSWORDS DON'T MATCH</h1><center>";
			}
	}
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Account creation</title>
 </head>
 <body style="background-color: #ffccff; background-image: url(/img/tech4.jpg);background-repeat: no-repeat;background-size: 100%; background-blend-mode: multiply; background-repeat: repeat-y;">
 	<center>
 		<br>
 		<br>
 		<br>
 		<br>
 		<br>
 		<br>
 		<br>
 		<a href="Login.html" style="text-decoration-line: none; padding: 10px; border: 1px solid green; background-color: green; color: white">Login</a>
 	</center>
 </body>
 </html>