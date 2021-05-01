<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
</head>
<body style="background-color:#ffccff; background-image:url(tech4.jpg); background-repeat:no-repeat; background-position:center; background-size:100%; background-blend-mode:multiply; background-repeat:repeat-y;">
	<div class="container-sm">
    <center>
        <br>
        <form name="loginform" method="post" action="auth.php" style="padding: 10px; border: 10px solid #6699ff; margin-left: 150px; margin-right: 150px; margin-top: 150px; width: 600px; border-style: outset; background-color: #ffcc66;">
        	<h2>Log in to your account</h2>
        	<br>
        	<br>
        	<br>
            Username: <input type="text" name="username" style="margin-right: 90px">
            <br>
             Password:  <input type="password" name="password" style="margin-right: 85px">
            <br>
            <br>
            <button type="submit" value="login" style="margin-top: 15px; padding: 10px; border: 1px solid #3333ff; background-color: #0099ff; color: white; text-decoration-line: none; cursor: pointer;">Log in to your account</button>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="Signup.php" style=" padding:10px; border:1px solid #3333ff; background-color:#0099ff; color:white; text-decoration-line:none;">Sign up here</a>
    </center>
</div>
</body>
</html>