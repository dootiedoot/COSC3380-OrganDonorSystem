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
    require "WebsiteContent/LeftSidebar/Home_Sidebar.php";
?>

<!-- Overlay effect when opening sidenav on small screens -->
<!--<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>-->

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->

    <?php
        require "WebsiteContent/MainContent/Form_DonorRegistration.php";
        require "WebsiteContent/MainContent/Table_Donors.php";
        require "WebsiteContent/MainContent/Form_Login.php";
    ?>

<!--    Footer  -->
    <footer class="w3-container w3-section w3-padding w3-card-4 w3-light-grey w3-center w3-opacity" style="margin-left:270px;">
        <p><nav>
                <!--<a href="/forum/default.asp" target="_blank">FORUM</a> |-->
<!--                <a href="/about/default.asp" target="_top">ABOUT</a>-->
            <p>Footer by Chad Hoang</p>

            </nav></p>
    </footer>

    <!-- END MAIN -->
</div>
<script type="text/javascript" src="JavaScript/vendor/jquery-3.2.0-jquery.min.js"></script>
<script type="text/javascript" src="JavaScript/WebsiteFunctions.js"></script>
<script src="/lib/w3codecolor.js"></script>
<script>
    w3CodeColor();
</script>
</body>
</html>
