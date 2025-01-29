<?php
session_start();
if(!isset($_SESSION['auth']))
{
    $_SESSION['auth_status']="Login to access Dashboard";
    header("Location: login.php");
}

?>