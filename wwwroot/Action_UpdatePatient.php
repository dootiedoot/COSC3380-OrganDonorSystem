<?php

session_start();

require "Database/MySQLconfig.php";
//require "Database/updateDateAddedtoDB.php";

//             Following the database connection code, add code for updating information into the database.
if(!empty($_POST))
{
    try
    {
        //  Assign variables
        $middleInit = $_POST['middleInit'];
        $lastName = $_POST['lastName'];
        $regionNum = 1;

        //  UPDATE DATA
        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";

        //  Remove from POST array so inputs are not repeated
        unset($_POST['firstName']);

        unset($_POST['HLA_DRB1']);
        unset($_POST['HLA_DRB2']);
        unset($_POST['organ']);

        //  Set donor registration error status
        $_SESSION['patientUpdateSuccess'] = "Successful";
        // echo a message to say the UPDATE succeeded
//        echo $stmt->rowCount() . " records UPDATED successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

//    header("Location: /Page_RegisterDonorForm.php");
}
?>