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

<?php
    require "Database/MySQLconfig.php";
?>

<!-- Top Bar -->
<div class="w3-top">
    <div class="w3-row w3-white w3-padding">
        <div class="w3-half" style="margin:4px 0 0px 0"><a href='http://organdonorsystem.azurewebsites.net/home.php'><img src="/images/img_donationLogo.png" alt="Lights" style="width:100%;max-width:30px"></a></div>
        <div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small"><div class="w3-right">Organ Donor System - Team 8</div></div>
    </div>

    <div class="w3-bar w3-theme w3-large" style="z-index:4;">
<!--        Left side of the bar-->
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" id="buttonHome">Home</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" id="buttonLearn">Learn</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" id="buttonGetInvolved">Get Involved</a>
<!--        Right side of the bar -->
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="buttonLogin">Log In</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="buttonRegister">Register</a>
    </div>
</div>

<!-- Left Sidebar -->
<?php
    require "WebsiteContent/LeftSidebar/Home_Sidebar.php";
?>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->

    <?php
        require "WebsiteContent/MainContent/DonorRegistrationForm.php";
        require "WebsiteContent/MainContent/LoginForm.php";
    ?>

    <footer class="w3-container w3-section w3-padding w3-card-4 w3-light-grey w3-center w3-opacity">
        <p><nav>
                <!--<a href="/forum/default.asp" target="_blank">FORUM</a> |-->
<!--                <a href="/about/default.asp" target="_top">ABOUT</a>-->
            <p>Built by Chad Hoang</p>

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
