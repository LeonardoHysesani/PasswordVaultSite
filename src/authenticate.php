<?php
// Create connection
$conn = new mysqli("localhost","root1" ,"1234" , "sampledb");
// Check connection
if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}

//GET DATA
$username = ($_POST['username']);
$password = ($_POST['password']);
if ($username == NULL || $password == NULL) {
	header('Location: Login.php');
}

setcookie("user", $username, time() + (86400 * 30), "/"); // 86400 = 1 day
//CHECKING VALIDITY OF DATA
$result = $conn -> query("SELECT UID FROM UsersTable WHERE BINARY USERNAME = '$username'");
$row = $result -> fetch_row();
switch ($row) {
	case NULL:
		echo("<center><h1 style='color:white'>USERNAME IS NOT REGISTERED</h1><center>");
		setcookie("user", "", time() - 3600);
		break;

	case !NULL:
		$result = $conn -> query("SELECT PASSWORD FROM UsersTable WHERE PASSWORD = '$password'");
		$row = $result -> fetch_row();
		if ($row == NULL) {
			echo "<center><h1 style='color:white'>WRONG PASSWORD</h1><center>";
			setcookie("user", "", time() - 3600);
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
 <body style="background-color: #ffccff; background-image: url(tech4.jpg);background-repeat: no-repeat;background-size: 100%; background-blend-mode: multiply; background-repeat: repeat-y;">
 	<center>
 		<br>
 		<br>
 		<br>
 		<br>
 		<br>
 		<br>
 		<br>
 		<a href="Login.php" style="text-decoration-line: none; padding: 10px; border: 1px solid green; background-color: green; color: white">Login page</a>
 		<a href="Signup.php" style="text-decoration-line: none; padding: 10px; border: 1px solid green; background-color: green; color: white">Sign up page</a>
 	</center>
 </body>
 </html>