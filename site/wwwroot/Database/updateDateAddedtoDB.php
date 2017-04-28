<?php
    require "MySQLconfig.php"; //connect to database

    $query1 = "
        DROP TRIGGER IF EXISTS donor.updateDateAddedTrigger;
    ";

    $query2 = "
        CREATE TRIGGER donor.updateDateAddedTrigger AFTER INSERT on donor
        FOR EACH ROW 
        BEGIN
            INSERT INTO donor(DateAddedToDatabase) VALUES (NOW()) WHERE OLD.PatientID = NEW.PatientID;
        END;
    ";

    #$stmt = $conn->query($query1);
    #$stmt = $conn->query($query2);
?>