
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dghnfgxnbfgcnb</title>
</head>
<body style="background-color: #ffccff; background-image: url(security_background.jpeg);background-repeat: no-repeat;background-position: center;background-size: 100%; background-blend-mode: multiply; background-repeat: repeat-y;">
	<div class="container-sm">
    <center>
    	<script>
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sampledb";

$mysqli = new mysqli("localhost","root","","sampledb");

// Check connection
if ($mysqli -> connect_errno) {
  echo "<h1>Failed to connect to MySQL: </h1>" . $mysqli -> connect_error;
  exit();
}
echo "123123123";
// Perform query
if ($result = $mysqli -> query("INSERT INTO 'testdb' ('USERNAME', 'PASSWORD') VALUES ('11111', '11111')")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>
		</script>
        <br>
        <form name="loginform" method="post" action="LoginServlet" style="padding: 10px; border: 10px solid #6699ff; margin-left: 150px; margin-right: 150px; margin-top: 150px; width: 600px; border-style: outset; background-color: #ffcc66; opacity: 0.9">
        	<h2>Log in to your account</h2>
        	<br>
        	<br>
        	<br>
            Username: <input type="text" name="username" style="margin-right: 90px">
            <br>
             Password:  <input type="password" name="password" style="margin-right: 85px">
            <br>
            <br>
            <button type="submit" value="login" style="margin-top: 15px;">Log in to your account</button>
        </form>
        <br>
        <h2>OR</h2>
        <br>
        <a href="Signup.html" style=" padding: 10px; border: 1px solid #3333ff; background-color: #0099ff; color: white">Sign up here</a>
    </center>
    <br>
    <br>
    <br>
    <br>
</div>
</body>
</html>
