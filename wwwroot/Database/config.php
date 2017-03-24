<?php
    /// MySQL Database connection info
    $host = "us-cdbr-azure-southcentral-f.cloudapp.net";
    $user = "b936a8a9a9bb2d";
    $pwd = "2f497fa1";
    $db = "db_organdonorsystem";

    // Connect to database.
    try
    {
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e)
    {
        die(var_dump($e));
    }
?>