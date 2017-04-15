<?php

session_start();

require "Database/MySQLconfig.php";

//             Following the database connection code, add code for inserting registration information into the database.
if(!empty($_POST))
{
    try
    {
        //  Assign variables
        $username = $_SESSION['username'];
        $to = $_POST['messageRecipient'];
        $subject = $_POST['messageSubject'];
        $body = $_POST['messageBody'];

        $sql_select = "SELECT email FROM user WHERE username='$username' ";
        $stmt = $conn->query($sql_select);
        $temp = $stmt->fetchAll();

        $sender = $temp[0]['email'];

        // Insert data
        $sql_insert = "
            INSERT INTO emailmessage (Sender, Recipient, Body, Subject) 
            VALUES (?,?,?,?)
            ";

        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $sender);
        $stmt->bindValue(2, $to);
        $stmt->bindValue(3, $body);
        $stmt->bindValue(4, $subject);
        $stmt->execute();

        //  Remove from POST array so inputs are not repeated
        unset($_POST['messageRecipient']);
        unset($_POST['messageSubject']);
        unset($_POST['messageBody']);

        //  Set donor registration error status
        $_SESSION['messagePostStatus'] = "Successful";
    }
    catch (Exception $e)
    {
        //  Set donor registration error status
        $_SESSION['messagePostStatus'] = "Unsuccessful";

        die(var_dump($e));
    }

    header("Location: /Page_SendMessage.php");
}
?>