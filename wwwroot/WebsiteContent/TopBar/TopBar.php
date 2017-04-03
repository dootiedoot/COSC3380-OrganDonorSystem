<?php
    session_start();
?>

<div class="w3-top">
    <div class="w3-row w3-white w3-padding">
        <div class="w3-half" style="margin:4px 0 0px 0"><a href='http://organdonorsystem.azurewebsites.net/home.php'><img src="/images/img_donationLogo.png" alt="Lights" style="width:100%;max-width:30px"></a></div>
        <div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small"><div class="w3-right">Organ Donor System - Team 8</div></div>
    </div>

    <div class="w3-bar w3-theme w3-large" style="z-index:4;">

        <!--        Left side of the bar-->
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" id="Button_Home">Home</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" id="Button_Learn">Learn</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" id="Button_GetInvolved">Get Involved</a>

        <!--        Right side of the bar -->
<!--            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="buttonLogin">Log out/a>-->
        <?php
        if (isset($_SESSION['username']))
        {?>
            <div class="w3-bar-item w3-padding-16 w3-right">Welcome <?=$_SESSION['username']?>!</div>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" href="http://organdonorsystem.azurewebsites.net/Action_Logout.php" id="Button_Logout">Logout</a>
        <?php }
        else
        {?>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="Button_Login">Login</a>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="Button_Register">Register</a>
        <?php }
        ?>
    </div>
</div>