<?php

require "Database/MySQLconfig.php";

$username;
$password;

//  Following the database connection code, add code for inserting registration information into the database.
if(!empty($_POST))
{
    //  Assign variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_select = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $stmt = $conn->query($sql_select);
    $users = $stmt->fetchAll();

    if(count($users) > 0)
    {
        // Start the session
        session_start();

        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        ?>

<!--        <table class="w3-table-all">-->
<!--            <thead>-->
<!--            <tr class="w3-green">-->
<!--                <th>Username</th>-->
<!--                <th>Password</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!---->
<!--            --><?php
//            foreach($users as $user)
//            {?>
<!--                <td>--><?//= $user['username']?><!--</td>-->
<!--                <td>--><?//= $user['password']?><!--</td>-->
<!--                <td>--><?//= $user['role']?><!--</td>-->
<!--                --><?php
//            }?>
<!--        </table>-->
        <?php
    }
    else
    {?>
        <h3>No user found.</h3>
        <?php
    } ?>

<?php
    //  Remove from POST array so inputs are not repeated
    unset($_POST['username']);
    unset($_POST['password']);

    header("Location: /");
}
?>