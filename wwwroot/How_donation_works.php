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
//    require "WebsiteContent/MainContent/Form_DonorRegistration.php";
//   require "WebsiteContent/MainContent/Table_Donors.php";
//    require "WebsiteContent/MainContent/Form_Login.php";
    require "WebsiteContent/MainContent/Main_How_donation_works.php";
?>

<!--    PAGE FOOTER  -->
<?php
    require "WebsiteContent/Footer.php";
?>
