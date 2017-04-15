<?php
    session_start();
?>

<!--    Home-->
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card-2 w3-round" style="width:270px;margin-top:0px;">

    <div class="w3-green w3-center w3-hover-white w3-bar-item w3-button w3-round" onclick="ToggleElement('dropmenu_General')"> General <i class="fa fa-angle-down"></i>   </div>
    <div id="dropmenu_General" class="w3-hide w3-show w3-white w3-card-4 w3-round">
        <a href="/How_donation_works.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-heartbeat"></i> How Donation Works</a>
        <a href="/howtodonate.php" class="w3-bar-item w3-button w3-animate-left w3-round"><i class="fa fa-child"></i> How To Donate</a>
        <a href="/howyoucanhelp.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-asl-interpreting"></i> How You Can Help</a>
        <a href="/whyregister.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-question-circle-o"></i> Why Register As A Donor</a>
    </div>

    <!--    ONLY SHOW IF SPECIFIC USER IS LOGGED IN -->
    <!--    DONORS TAB -->
    <?php
    if ($_SESSION['userRole'] == "Admin" ||
        $_SESSION['userRole'] == "Doctor")
    { ?>

        <div class="w3-green w3-center w3-hover-white w3-bar-item w3-button w3-round" onclick="ToggleElement('dropmenu_Donors')"> Donors <i class="fa fa-angle-down"></i></div>

        <div id="dropmenu_Donors" class="w3-hide w3-show w3-white w3-card-4">
            <a href="/Page_RegisterDonorForm.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-card-o"></i> Register A Donor</a>
            <a href="/Page_Donors.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-book-o"></i> See Donors</a>
            <a href="/Page_Matches.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-handshake-o"></i> See Matches</a>
            <a href="/donorOrganStats.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-handshake-o"></i> Donor Organ Stats </a>
        </div>

    <?php } ?>

    <!--    RECIPIENTS TAB -->
    <?php
    if ($_SESSION['userRole'] == "Admin" ||
        $_SESSION['userRole'] == "Doctor")
    { ?>

        <div class="w3-green w3-center w3-hover-white w3-bar-item w3-button w3-round" onclick="ToggleElement('dropmenu_Recipients')"> Recipients <i class="fa fa-angle-down"></i></div>

        <div id="dropmenu_Recipients" class="w3-hide w3-show w3-white w3-card-4">
            <a href="/Page_RegisterRecipientForm.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-card-o"></i> Register A Recipient</a>
            <a href="/Page_Recipients.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-card-o"></i> See Recipients</a>
            <a href="/Page_Matches.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-handshake-o"></i> See Matches</a>
            <a href="/recipientOrganStats.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-handshake-o"></i> Recipient Organ Stats</a>
        </div>

    <?php } ?>

    <!--    USERS TAB  -->
    <?php
    if ($_SESSION['userRole'] == "Admin")
    { ?>

        <div class="w3-green w3-center w3-hover-white w3-bar-item w3-button w3-round" onclick="ToggleElement('dropmenu_Users')"> Users <i class="fa fa-angle-down"></i></div>

        <div id="dropmenu_Users" class="w3-hide w3-show w3-white w3-card-4">
            <a href="/Page_RegisterUserForm.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-card-o"></i> Register A User</a>
            <a href="/Page_Users.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-book-o"></i> See Users</a>
        </div>

    <?php } ?>

</div>

<!--    FUNCTIONS FOR DROP MENU LOGIC    -->
<script>
    function ToggleElement(name)
    {
        var x = document.getElementById(name);
        if (x.className.indexOf("w3-show") == -1)
        {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-green";
        }
        else
        {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className = x.previousElementSibling.className.replace(" w3-green", "");
        }
    }
</script>


<!---->
<!--<div id="sidebarLearn" class="myMenu">-->
<!--    <div class="w3-container w3-padding-top">-->
<!--        <h3>Learn Information</h3>-->
<!--    </div>-->
<!--    <div class="w3-sidebar">-->
<!--        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hover-green">Learn stuff</a>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div id="sidebarGetInvolved" class="myMenu">-->
<!--    <div class="w3-container w3-padding-top">-->
<!--        <h3>Getting Involved Information</h3>-->
<!--    </div>-->
<!--    <div class="w3-sidebar">-->
<!--        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hover-green">Get Involved</a>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div id="sidebarDatabaseAdmin" class="myMenu">-->
<!--    <div class="w3-container w3-padding-top">-->
<!--        <h3>Database Admin</h3>-->
<!--    </div>-->
<!--    <div class="w3-sidebar">-->
<!--        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hover-green" onclick="w3_show_main('menuRegisterUser')">Register user</a>-->
<!--    </div>-->
<!--</div>-->

<!--    <div id="menuRegistration" class="myMenu w3-padding-top" style="display:none">-->
<!--        <div class="w3-container">-->
<!--            <h3>References</h3>-->
<!--        </div>-->
<!--<!--        <a href='/tags/default.asp'>HTML Tag Reference</a>-->
<!--<!--        <a href='/tags/ref_eventattributes.asp'>HTML Event Reference</a>-->
<!--<!--        <a href='/colors/default.asp'>HTML Color Reference</a>-->
<!--<!--        <a href='/cssref/default.asp'>CSS Reference</a>-->
<!--<!--        <a href='/cssref/css_selectors.asp'>CSS Selector Reference</a>-->
<!--<!--        <a href='/w3css/w3css_references.asp'>W3.CSS Reference</a>-->
<!--<!--        <a href='/jsref/default.asp'>JavaScript Reference</a>-->
<!--<!--        <a href='/jsref/default.asp'>HTML DOM Reference</a>-->
<!--<!--        <a href='/php/php_ref_array.asp'>PHP Reference</a>-->
<!--<!--        <a href='/sql/sql_quickref.asp'>SQL Reference</a>-->
<!--    </div>-->