<?php
session_start();

require "Database/MySQLconfig.php";
//require "Database/updateDateAddedtoDB.php";

//             Following the database connection code, add code for updating information into the database.
if(!empty($_GET))
{
	try {
		//  Assign variables
    	$idToDelete = $_GET['IDtoDelete'];
    	// sql to delete a record
    	$sql_delete = "DELETE FROM donor WHERE PatientID='$idToDelete'";

    	// use exec() because no results are returned
	    $conn->exec($sql_delete);
	    echo "Record deleted successfully";
    }
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }
   
}
else
{
    echo "Record delete unsuccessful!";

//    header("Location: /");
}
