<?php

//require "Database/MySQLconfig.php";

$_SESSION['username'] = null;
$_SESSION['password'] = null;

var_dump($_SESSION);

unset($_SESSION['username']);
unset($_SESSION['password']);

var_dump($_SESSION);


//header("Location: /");
?>