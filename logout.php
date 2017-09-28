<?php
session_start();
if(!isset($_SESSION["user"])){
	header("Location: login.php");
}else{
    unset($_SESSION["user"]);
    unset($_SESSION["user_type"]);
    header("refresh:2;url=login.php");
    echo 'You have been logged out. Redirecting...';
}
?>