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
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" id="buttonHome">Home</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" id="buttonLearn">Learn</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" id="buttonGetInvolved">Get Involved</a>

        <!--        Right side of the bar -->
<!--            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="buttonLogin">Log out/a>-->
        <?php
        if ( isset ( $_SESSION["username"] ))
        {?>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="buttonLogin">Logout</a>
        <?php }
        else
        {?>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="buttonLogin">Login</a>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" id="buttonRegister">Register</a>
        <?php }
        ?>
    </div>
</div>