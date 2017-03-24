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
        <a class="w3-bar-item w3-button w3-opennav w3-left w3-hide-large w3-hover-white w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">☰</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuHome')">Home</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuLearn')">Learn</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuGetInvolved')">Get Involved</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" href="javascript:void(0)" onclick="w3_show_nav('menuLogIn')">Log In</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" href="javascript:void(0)" onclick="w3_show_nav('menuRegistration')">Register</a>
    </div>
</div>

<!-- Left Sidenav -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:270px" id="leftSidenav">
    <?php
        require "Partials/Sidebars/Home_SideBar.php";
    ?>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 270 pixels when the sidenav is visible -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">
<!--        <h1 class="w3-jumbo">Donor Registration</h1>-->
<!--        <p class="w3-xlarge">sub title</p>-->
<!--            <form action="/action_page.php" class="w3-container">-->

            <form method="post" action="FormRegistration.php" enctype="multipart/form-data" class="w3-container" >
                <h2>Donor Registration</h2>
                <p>sub title stuff.</p>
<!--                <p>-->
                <div class="w3-row-padding">
                    <div class="w3-col" style="width:40%">
                        <input class="w3-input w3-border" type="text" name="firstName" id="firstName" required placeholder="Insert first name...">
                        <label class="w3-label w3-validate">First Name</label>
                    </div>
                    <div class="w3-col" style="width:20%">
                        <input class="w3-input w3-border" type="text" name="middleInit" id="middleInit" maxlength="1" placeholder="Insert middle initial...">
                        <label class="w3-label">Middle Initial</label>
                    </div>
                    <div class="w3-col" style="width:40%">
                        <input class="w3-input w3-border" type="text" name="lastName" id="lastName" required placeholder="Insert last name...">
                        <label class="w3-label w3-validate">Last Name</label>
                    </div>
                </div>
<!--                </p>-->
<!--                <p>-->
<!--                    <input class="w3-input" type="text" name="first" required>-->
<!--                    <label class="w3-label w3-validate">First Name</label>-->
<!--                </p>-->
                <p>
                <div class="w3-row-padding">
                    <input class="w3-input" type="email" name="email" required>
                    <label class="w3-label w3-validate">Email</label>
                </div>
                </p>
                <p>
                <div class="w3-row-padding">
                    <input class="w3-radio" type="radio" name="gender" value="male" checked>
                    <label class="w3-validate">Male</label>

                    <input class="w3-radio" type="radio" name="gender" value="female">
                    <label class="w3-validate">Female</label>
                </div>
                </p>
                <p>
                <div class="w3-row-padding">
                    <input class="w3-input" type="date" name="birthDate" required>
                    <label class="w3-label w3-validate">Birth date</label>
                </div>
                </p>
                <p>
                <div class="w3-row-padding">
                    <input class="w3-input" type="number" name="phoneNum" min="1000000000" max="9999999999" required>
                    <label class="w3-label w3-validate">Phone Number</label>
                </div>
                </p>
                <p>
                <div class="w3-row-padding">
                    <input class="w3-input" type="number" name="weight" min="0" required>
                    <label class="w3-label w3-validate">Weight</label>
                </div>
                </p>
                <div class="w3-row-padding">
                    <select class="w3-select" name="bloodType">
                        <option value="" disabled selected>Select blood type</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">AB+</option>
                        <option value="6">AB-</option>
                        <option value="7">O+</option>
                        <option value="8">O-</option>
                    </select>
                </div>
                <p>
                <div class="w3-centered">
                    <button class="w3-btn w3-green" type="submit" name="submit" value="Submit">Submit</button>
                </div>
                </p>
            </form>
<!--            <a class="w3-button w3-theme w3-hover-white" href="/css/default.asp">Learn more about donation button</a>-->
<!--            <a class="w3-button w3-theme w3-hover-white" href="/ccsref/default.asp">button 2</a>-->
        <p class="w3-large">
<!--            <p><div class="w3-code cssHigh notranslate">-->
            <div class="w3-container">
                <h2>Registered Donors</h2>
<!--                <p>If you different hover colors, add w3-hover-<em>color</em> classes to each tr element:</p>-->
                <?php
                $sql_select = "SELECT * FROM donor";
                $stmt = $conn->query($sql_select);
                $donors = $stmt->fetchAll();

                if(count($donors) > 0)
                {?>
                    <table class="w3-table-all">
                        <thead>
                        <tr class="w3-green">
                             <th>First Name</th>
                             <th>Middle Initial</th>
                             <th>Last Name</th>
                             <th>Email</th>
                             <th>Sex</th>
                             <th>Birthdate</th>
                             <th>Phone Number</th>
                             <th>Weight</th>
                             <th>Blood Type</th>
                        </tr>
                        </thead>

                        <?php
                        foreach($donors as $donor)
                        {?>
                             <tr class="w3-hover-green">
                                <td><?= $donor['FirstName']?></td>
                                <td><?= $donor['MiddleInitial']?></td>
                                <td><?= $donor['LastName']?></td>
                                <td><?= $donor['DEmail']?></td>
                                <td><?= $donor['Sex']?></td>
                                <td><?= $donor['DateOfBirth']?></td>
                                <td><?= $donor['DPhoneNum']?></td>
                                <td><?= $donor['Weight']?></td>
                                <td><?= $donor['BloodType']?></td>
                             </tr>
                        <?php
                        }?>
                    </table>
                <?php
                }
                else
                {?>
                    <h3>No one is currently registered.</h3>
                <?php
                } ?>
            </div>

            <!--body {<br>
                background-color: #d0e4fe;<br>}<br>h1 {<br>
                color: orange;<br>
                text-align: center;<br>}<br>p {<br>
                font-family: "Times New Roman";<br>
                font-size: 20px;<br>}-->
        </div>
        <a class="w3-button w3-theme w3-hover-white" href="/css/tryit.asp?filename=trycss_default" target="_blank">another freaking button</a>
    </div>

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
    function w3_open()
    {
        document.getElementById("mySidenav").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close()
    {
        document.getElementById("mySidenav").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
    function w3_show_nav(name)
    {
        document.getElementById("menuHome").style.display = "none";
        document.getElementById("menuRegistration").style.display = "none";
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
