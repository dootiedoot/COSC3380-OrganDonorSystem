<?php
session_start();

//require "Database/MySQLconfig.php";
//
//$_SESSION['username'] = null;
//$_SESSION['password'] = null;
//
//var_dump($_SESSION);

unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['userRole']);
//var_dump($_SESSION);


header("Location: /");
?>