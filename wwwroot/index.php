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
    require "Database/config.php";
?>

<!-- Top Bar -->
<div class="w3-top">
    <div class="w3-row w3-white w3-padding">
        <div class="w3-half" style="margin:4px 0 0px 0"><a href='http://organdonorsystem.azurewebsites.net/home.php'><img src="/images/img_donationLogo.png" alt="Lights" style="width:100%;max-width:30px"></a></div>
        <div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small"><div class="w3-right">Organ Donor System - Team 8</div></div>
    </div>

    <div class="w3-bar w3-theme w3-large" style="z-index:4;">
<!--        Left side of the bar-->
        <a class="w3-bar-item w3-button w3-opennav w3-left w3-hide-large w3-hover-white w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">☰</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_sidebar('sidebarHome')">Home</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_sidebar('sidebarLearn')">Learn</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_sidebar('sidebarGetInvolved')">Get Involved</a>
<!--        Right side of the bar -->
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" href="javascript:void(0)" onclick="w3_show_main('menuLogin')">Log In</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" href="javascript:void(0)" onclick="w3_show_main('menuRegister')">Register</a>
    </div>
</div>

<!-- Left Sidenav -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:270px" id="leftSidenav">
    <?php
        require "Partials/Sidebars/Home_Sidebar.php";
    ?>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 270 pixels when the sidenav is visible -->

    <?php
        require "Partials/MainContent/DonorRegistrationForm.php";
    ?>
<!--    <div class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">-->
<!--        <h1 class="w3-jumbo">title 2</h1>-->
<!--        <p class="w3-xlarge">sub title 2</p>-->
<!--        <a href="/js/default.asp" class="w3-button w3-theme w3-hover-white">wow another button</a>-->
<!--        <a href="/jsref/default.asp" class="w3-button w3-theme w3-hover-white">buttons galore</a>-->
<!---->
<!--        <p><div class="w3-code jsHigh notranslate">-->
<!--            <!--// Click the button to change the color of this paragraph<br><br>function myFunction() {<br>-->
<!--                var x;<br>-->
<!--                x = document.getElementById("demo");<br>-->
<!--                x.style.fontSize = "25px"; <br>-->
<!--                x.style.color = "red"; <br>}-->-->
<!--        </div>-->
<!--        <a class="w3-button w3-theme w3-hover-white" href="/js/tryit.asp?filename=tryjs_default" target="_blank">Try it Yourself</a>-->
<!--    </div>-->


    <footer class="w3-container w3-section w3-padding-32 w3-card-4 w3-light-grey w3-center w3-opacity">
        <p><nav>
                <!--<a href="/forum/default.asp" target="_blank">FORUM</a> |-->
<!--                <a href="/about/default.asp" target="_top">ABOUT</a>-->
            <p>Built by Chad Hoang</p>

            </nav></p>
    </footer>

    <!-- END MAIN -->
</div>

<script>
    // Script to open and close the sidenav
    function w3_show_main(name)
    {
        //  Hide main content area elements
        document.getElementById("mainDonorRegistration").style.display = "none";

        //  Display element
        document.getElementById(name).style.display = "block";
    }
    function w3_show_sidebar(name)
    {
        //  Hide sidebar elements
        document.getElementById("sidebarHome").style.display = "none";
        document.getElementById("sidebarLearn").style.display = "none";
        document.getElementById("sidebarGetInvolved").style.display = "none";

        //  Display element
        document.getElementById(name).style.display = "block";
//        w3-open();
    }
</script>
<script src="/lib/w3codecolor.js"></script>
<script>
    w3CodeColor();
</script>
</body>
</html>
