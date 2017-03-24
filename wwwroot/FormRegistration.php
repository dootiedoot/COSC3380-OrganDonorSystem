<?php

require "Database/config.php";

$firstName;
$middleInit;
$lastName;
$email;
$sex;
$birthDate;
$phoneNum;
$weight;
$bloodType;

//             Following the database connection code, add code for inserting registration information into the database.
if(!empty($_POST))
{
    try
    {
        $firstName = $_POST['firstName'];
        $middleInit = $_POST['middleInit'];
        $lastName = $_POST['lastName'];

//                    $email = $_POST['email'];
//                    $sex = $_POST['email'];
//                    $email = $_POST['email'];

//                    $date = date("Y-m-d");
        // Insert data
        $sql_insert = "INSERT INTO donor (FirstName, MiddleInitial, LastName) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $firstName);
        $stmt->bindValue(2, $middleInit);
        $stmt->bindValue(3, $lastName);
        $stmt->execute();
    }
    catch (Exception $e)
    {
        die(var_dump($e));
    }

    //  Remove from POST array so inputs are not repeated
    unset($_POST['firstName']);
    unset($_POST['middleInit']);
    unset($_POST['lastName']);

    header("Location: /");
}
?>