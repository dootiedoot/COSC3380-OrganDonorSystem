<?php

session_start();

require "Database/MySQLconfig.php";
require "Database/updateDateAddedtoDB.php";

//$firstName;
//$middleInit;
//$lastName;
//$sex;
//$birthDate;
//$recentAddress;
//$city;
//$state;
//$zipcode;
////$weight;
////$bloodType;
//$email;
//$phoneNum;

//             Following the database connection code, add code for inserting registration information into the database.
if(!empty($_POST))
{
    try
    {
        //  Assign variables
        $firstName = $_POST['firstName'];
        $middleInit = $_POST['middleInit'];
        $lastName = $_POST['lastName'];
        $sex = $_POST['sex'];
        $birthDate = $_POST['birthDate'];
        $recentAddress = $_POST['recentAddress'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipCode'];
//        $weight = $_POST['weight'];
//        $bloodType = $_POST['bloodType'];
        $email = $_POST['email'];
        $phoneNum = $_POST['phoneNum'];

        // Insert data
        $sql_insert = "
            INSERT INTO donor (FirstName, MiddleInitial, LastName, Sex, DateOfBirth, RecentAddress, City, State, ZIPcode, Email, PhoneNum) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?)
            ";

        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $firstName);
        $stmt->bindValue(2, $middleInit);
        $stmt->bindValue(3, $lastName);
        $stmt->bindValue(4, $sex);
        $stmt->bindValue(5, $birthDate);
        $stmt->bindValue(6, $recentAddress);
        $stmt->bindValue(7, $city);
        $stmt->bindValue(8, $state);
        $stmt->bindValue(9, $zipcode);
        $stmt->bindValue(10, $email);
        $stmt->bindValue(11, $phoneNum);
//        $stmt->bindValue(8, $weight);
//        $stmt->bindValue(9, $bloodType);
        $stmt->execute();

        //  Remove from POST array so inputs are not repeated
        unset($_POST['firstName']);
        unset($_POST['middleInit']);
        unset($_POST['lastName']);
        unset($_POST['sex']);
        unset($_POST['birthDate']);
        unset($_POST['recentAddress']);
        unset($_POST['city']);
        unset($_POST['state']);
        unset($_POST['zipCode']);
        unset($_POST['email']);
        unset($_POST['phoneNum']);
//    unset($_POST['weight']);
//    unset($_POST['bloodType']);

        //  Set donor registration error status
        $_SESSION['donorRegistrationStatus'] = "Successful";
    }
    catch (Exception $e)
    {
        //  Set donor registration error status
        $_SESSION['donorRegistrationStatus'] = "Unsuccessful";

        die(var_dump($e));
    }

    header("Location: /Page_RegisterDonorForm.php");
}
?>