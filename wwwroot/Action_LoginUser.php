<?php

require "Database/MySQLconfig.php";

// Start the session
session_start();

$username;
$password;

//  Following the database connection code, add code for inserting registration information into the database.
if(!empty($_POST))
{
    //  Assign variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_select = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $stmt = $conn->query($sql_select);
    $users = $stmt->fetchAll();

    if(count($users) > 0)
    {
        foreach($users as $user)
        {
            // Set session variables
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['userRole'] = $user["role"];
//            var_dump($_SESSION);
        }

        //  Remove from POST array so inputs are not repeated
        unset($_POST['username']);
        unset($_POST['password']);

        //  Determine which page to load based on logged in user role
        if ($_SESSION['userRole'] == "Admin")
            header("Location: /Page_Admin_Home.php");
        else
            header("Location: /");
    }
    //  Else... User doesn't exist or login info is incorrect
    else
    {
        //  Set login error and return to login screen
        $_SESSION['isLoginError'] = true;
        header("Location: /Page_Login.php");
    }
}
?>