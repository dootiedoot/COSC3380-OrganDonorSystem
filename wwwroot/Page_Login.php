<!DOCTYPE html>
<html>
<title>Organ Donor System - Team 8</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/W3.CSS Stylesheet/w3.css">
<style>
    .w3-theme {color:#fff !important;background-color:#4CAF50 !important}
    .w3-btn {background-color:#4CAF50;margin-bottom:4px}
    .w3-code{border-left:4px solid #4CAF50}
    .myMenu {margin-bottom:150px}
</style>
<body>

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
//require "WebsiteContent/MainContent/Form_DonorRegistration.php";
//require "WebsiteContent/MainContent/Table_Donors.php";
    require "WebsiteContent/MainContent/Form_Login.php";
?>

<!--    Footer  -->
<?php
    require "WebsiteContent/Footer.php";
?>

<!-- END MAIN -->
</div>
<script src="/lib/w3codecolor.js"></script>
<script>
    w3CodeColor();
</script>
</body>
</html>
