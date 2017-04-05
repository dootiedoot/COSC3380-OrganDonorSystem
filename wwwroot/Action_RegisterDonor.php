<?php

require "Database/MySQLconfig.php";
require "Database/updateDateAddedtoDB.php";

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
        //  Assign variables
        $firstName = $_POST['firstName'];
        $middleInit = $_POST['middleInit'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $sex = $_POST['gender'];
        $birthDate = $_POST['birthDate'];
        $phoneNum = $_POST['phoneNum'];
        $weight = $_POST['weight'];
        $bloodType = $_POST['bloodType'];

        // Insert data
        $sql_insert = "
            INSERT INTO donor (FirstName, MiddleInitial, LastName, DEmail, Sex, DateOfBirth, DPhoneNum, Weight, BloodType) 
            VALUES (?,?,?,?,?,?,?,?,?)
            ";

        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $firstName);
        $stmt->bindValue(2, $middleInit);
        $stmt->bindValue(3, $lastName);
        $stmt->bindValue(4, $email);
        $stmt->bindValue(5, $sex);
        $stmt->bindValue(6, $birthDate);
        $stmt->bindValue(7, $phoneNum);
        $stmt->bindValue(8, $weight);
        $stmt->bindValue(9, $bloodType);
        $stmt->execute();

        echo "<h3>Your're registered!</h3>";
    }
    catch (Exception $e)
    {
        die(var_dump($e));
    }

    //  Remove from POST array so inputs are not repeated
    unset($_POST['firstName']);
    unset($_POST['middleInit']);
    unset($_POST['lastName']);
    unset($_POST['email']);
    unset($_POST['sex']);
    unset($_POST['birthDate']);
    unset($_POST['weight']);
    unset($_POST['bloodType']);

    header("Location: /");
}
?>