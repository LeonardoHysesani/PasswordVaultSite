<?php
	require('dbconnect.php');

	//GET DATA
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	if ($username == NULL || $password == NULL) {
		header('Location: Login.html');
	}

	setcookie("curr_user", $username, time() + 3600, "/"); // 3600 = 1 hour
	//CHECKING VALIDITY OF DATA
	$result = $conn -> query("SELECT UUID FROM UsersTable WHERE BINARY USERNAME = '$username'");
	$row = $result -> fetch_row();
	switch ($row) {
		case NULL:
			echo("<center><h1 style='color:white'>USERNAME IS NOT REGISTERED</h1><center>");
			setcookie("curr_user", "", time() - 3600);
			break;

		case !NULL:
			$result = $conn -> query("SELECT PASSWORD_HASH FROM UsersTable WHERE PASSWORD_HASH = '$password'");
			$row = $result -> fetch_row();
			if ($row == NULL) {
				echo "<center><h1 style='color:white'>WRONG PASSWORD</h1><center>";
				setcookie("curr_user", "", time() - 3600);
			}
			else{
				header('Location: PasswordVault.php');
				exit();
				break;
			}
	}
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Authentication</title>
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
 		<a href="Login.html" style="text-decoration-line: none; padding: 10px; border: 1px solid green; background-color: green; color: white">Login page</a>
 		<a href="Signup.html" style="text-decoration-line: none; padding: 10px; border: 1px solid green; background-color: green; color: white">Sign up page</a>
 	</center>
 </body>
 </html>