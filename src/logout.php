<?php
    //Clearing cookie
    setcookie("curr_user", "",time(), "/");
    //Back to login screen
    header('Location: Login.html');
	exit();
?>