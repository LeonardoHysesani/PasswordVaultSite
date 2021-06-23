<?php
    //Clearing cookie
    setcookie("curr_user", NULL,time(), "/");
    //Back to login screen
    header('Location: Login.html');
	exit();
?>