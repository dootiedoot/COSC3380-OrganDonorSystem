<?php

session_start();

require "Database/MySQLconfig.php";
//require "Database/updateDateAddedtoDB.php";

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
        $email = $_POST['email'];
        $phoneNum = $_POST['phoneNum'];
        $weight = $_POST['weight'];
        $bloodType = $_POST['bloodType'];
        $organ = $_POST['organ'];
        $HLA_A1 = $_POST['HLAMarkers_A1'];
        $HLA_A2 = $_POST['HLAMarkers_A2'];
        $HLA_B1 = $_POST['HLAMarkers_B1'];
        $HLA_B2 = $_POST['HLAMarkers_B2'];
        $HLA_C1 = $_POST['HLAMarkers_C1'];
        $HLA_C2 = $_POST['HLAMarkers_C2'];
        $HLA_DRB1 = $_POST['HLAMarkers_DRB1'];
        $HLA_DRB2 = $_POST['HLAMarkers_DRB2'];

        $regionNum = 1;

        // Insert data
        $sql_insert = "
            INSERT INTO donor (FirstName, MiddleInitial, LastName, Sex, DateOfBirth, RecentAddress, City, State, ZIPcode, Email, PhoneNum, Weight, BloodType, 
              HLAMarkers_A1, HLAMarkers_A2, HLAMarkers_B1, HLAMarkers_B2, HLAMarkers_C1, HLAMarkers_C2, HLAMarkers_DRB1, HLAMarkers_DRB2, 
              Organ, RegionNum) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

        $organ = $_POST['organ'];
        
        

        // Insert data
        $sql_insert = "
            INSERT INTO donor (FirstName, MiddleInitial, LastName, Sex, DateOfBirth, RecentAddress, City, State, ZIPcode, Email, PhoneNum, Weight, BloodType, HLAMarkers_A1, HLAMarkers_A2, HLAMarkers_B1, HLAMarkers_B2, HLAMarkers_C1, HLAMarkers_C2, HLAMarkers_DRB1, HLAMarkers_DRB2, Organ) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
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
        $stmt->bindValue(12, $weight);
        $stmt->bindValue(13, $bloodType);
        $stmt->bindValue(14, $HLA_A1);
        $stmt->bindValue(15, $HLA_A2);
        $stmt->bindValue(16, $HLA_B1);
        $stmt->bindValue(17, $HLA_B2);
        $stmt->bindValue(18, $HLA_C1);
        $stmt->bindValue(19, $HLA_C2);
        $stmt->bindValue(20, $HLA_DRB1);
        $stmt->bindValue(21, $HLA_DRB2);
        $stmt->bindValue(22, $organ);
        $stmt->bindValue(23, $regionNum);
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
        unset($_POST['weight']);
        unset($_POST['bloodType']);
        unset($_POST['HLA_A1']);
        unset($_POST['HLA_A2']);
        unset($_POST['HLA_B1']);
        unset($_POST['HLA_B2']);
        unset($_POST['HLA_C1']);
        unset($_POST['HLA_C2']);
        unset($_POST['HLA_DRB1']);
        unset($_POST['HLA_DRB2']);
        unset($_POST['organ']);

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