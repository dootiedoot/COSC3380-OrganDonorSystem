<?php
    session_start();

    if( $_SESSION['userRole'] != "Admin" &&
        $_SESSION['userRole'] != "Doctor")
        header("Location: /");
?>

<!--    PAGE HEADER   -->
<?php
    require "WebsiteContent/Header.php";
?>

<!--    Connect to the MySQL database   -->
<?php
    require "Database/MySQLconfig.php";
?>

<!-- Top Bar -->
<?php
    require "WebsiteContent/TopBar/TopBar.php";
?>

<!-- Left Sidebar -->
<?php
    require "WebsiteContent/LeftSidebar/LeftSidebar.php";
?>

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->
<?php
    require "WebsiteContent/MainContent/Form_RecipientRegistration.php";
?>

<!--    PAGE FOOTER  -->
<?php
    require "WebsiteContent/Footer.php";
?>
