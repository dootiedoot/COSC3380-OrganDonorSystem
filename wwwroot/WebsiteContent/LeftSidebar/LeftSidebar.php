<!--    Home-->
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card-2 w3-round" style="width:270px;margin-top:15px;">

    <div class="w3-green w3-center w3-hover-white w3-bar-item w3-button w3-round" onclick="myAccFunc('dropmenu_General')"> General <i class="fa fa-angle-down"></i>   </div>
    <div id="dropmenu_General" class="w3-hide w3-white w3-card-4 w3-round">
        <a href="/How_donation_works.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-heartbeat"></i> How Donation Works</a>
        <a href="/howtodonate.php" class="w3-bar-item w3-button w3-animate-left w3-round"><i class="fa fa-child"></i> How To Donate</a>
        <a href="#" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-handshake-o"></i> How You Can Help</a>
        <a href="#" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-question-circle-o"></i> Why Register As A Donor</a>
    </div>

<!--    ONLY SHOW IF SPECIFIC USER IS LOGGED IN -->
    <?php
    if ($_SESSION['userRole'] == "Admin" ||
        $_SESSION['userRole'] == "Doctor")
    { ?>

        <div class="w3-green w3-center w3-hover-white w3-bar-item w3-button w3-round" onclick="myAccFunc('dropmenu_Donors')"> Donors <i class="fa fa-angle-down"></i></div>

        <div id="dropmenu_Donors" class="w3-hide w3-white w3-card-4">
            <a href="/Page_Admin_RegisterDonorForm.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-card-o"></i> Register Donor</a>
            <a href="/Page_Admin_RegisteredDonors.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-book-o"></i> Registered Donors</a>
            <a href="/organsReport.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-address-book-o"></i> Donors Organ Stats</a>
        </div>

    <?php } ?>

    <a href="#" class="w3-bar-item w3-button w3-round">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-round">Link 3</a>

</div>

<!--    FUNCTIONS FOR DROPMENU LOGIC    -->
<script>
    function myAccFunc(name)
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