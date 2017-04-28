<?php

session_start();

require "Database/MySQLconfig.php";
require "Database/updateDateAddedtoDB.php";

//             Following the database connection code, add code for inserting registration information into the database.
if(!empty($_POST))
{
    try
    {
        //  Update search variables
        if ($_POST['GeneralInfo'] == 'on')
            $_SESSION['GeneralInfo'] = true;
        else
            $_SESSION['GeneralInfo'] = false;

        if ($_POST['MedicalInfo'] == 'on')
            $_SESSION['MedicalInfo'] = true;
        else
            $_SESSION['MedicalInfo'] = false;

        if ($_POST['ApplicantInfo'] == 'on')
            $_SESSION['ApplicantInfo'] = true;
        else
            $_SESSION['ApplicantInfo'] = false;


//        var_dump($_POST['GeneralInfo']);
//        var_dump($_SESSION['GeneralInfo']);
//        var_dump($_POST['MedicalInfo']);
//        var_dump($_SESSION['MedicalInfo']);
//        var_dump($_POST['ApplicantStatusInfo']);
//        var_dump($_SESSION['ApplicantStatusInfo']);

        //  Remove from POST array so inputs are not repeated
        unset($_POST['GeneralInfo']);
        unset($_POST['MedicalInfo']);
        unset($_POST['ApplicantInfo']);


    }
    catch (Exception $e)
    {
        die(var_dump($e));
    }

    header("Location: /Page_Donors.php");
}
?>