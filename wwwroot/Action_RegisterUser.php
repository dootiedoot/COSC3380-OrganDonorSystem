<?php

require "Database/MySQLconfig.php";

$username;
$password;
$email;
$role;

//             Following the database connection code, add code for inserting registration information into the database.
if(!empty($_POST))
{
    try
    {
//        var_dump($username);

        //  Assign variables
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['roleType'];


        // Insert data
        $sql_insert = "
            INSERT INTO user (username, password, email, role) 
            VALUES (?,?,?,?)
            ";

        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $password);
        $stmt->bindValue(3, $email);
        $stmt->bindValue(4, $role);
        $stmt->execute();

        echo "<h3>Registered!</h3>";
    }
    catch (Exception $e)
    {
        die(var_dump($e));
    }

    //  Remove from POST array so inputs are not repeated
    unset($_POST['username']);
    unset($_POST['password']);
    unset($_POST['email']);
    unset($_POST['roleType']);

    header("Location: /Page_Admin_RegisterUserForm.php");
}
?>