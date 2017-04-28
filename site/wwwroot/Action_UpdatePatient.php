<?php

session_start();

require "Database/MySQLconfig.php";
//require "Database/updateDateAddedtoDB.php";

//             Following the database connection code, add code for updating information into the database.
if(!empty($_POST))
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
    $organ = $_POST['organ'];

    $sql = "UPDATE donor 
            SET FirstName='$firstName', MiddleInitial='$middleInit' LastName='$lastName'
            WHERE PatientID=1";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";

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

    echo "Update Success!";

    header("Location: /Page_Donors.php");
}
?>