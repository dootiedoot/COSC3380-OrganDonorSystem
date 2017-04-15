<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <!--    Show donor registration status if any -->
    <?php
    session_start();
    if ($_SESSION['donorRegistrationStatus'] == "Successful")
    { ?>

        <div class="w3-panel w3-green w3-display-container">
                <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <h3>Registration Successful!</h3>
        </div>

        <?php unset($_SESSION['donorRegistrationStatus']);
    }
    else if ($_SESSION['donorRegistrationStatus'] == "Unsuccessful")
    { ?>
        <div class="w3-panel w3-red w3-display-container">
                <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <h3>Registration Unsuccessful!</h3>
        </div>

        <?php unset($_SESSION['donorRegistrationStatus']);
    } ?>

<!-- Donor registration form -->
    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Donor Registration</h2>
    </div>

    <div id="mainDonorRegistrationForm" class="w3-container w3-padding-large w3-card-4 w3-light-grey">
        <!--        <h1 class="w3-jumbo">Donor Registration</h1>-->
        <!--        <p class="w3-xlarge">sub title</p>-->
        <!--            <form action="/action_page.php" class="w3-container">-->

<!--            <p>sub title stuff.</p>-->

        <form method="post" action="/Action_RegisterDonor.php" enctype="multipart/form-data" class="w3-container" >
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

            <!--    SEX    -->
            <div class="w3-padding">
                <input class="w3-radio" type="radio" name="sex" value="male" id="userIsMale" checked>
                <label class="w3-validate">Male</label>
                <input class="w3-radio" type="radio" name="sex" value="female" id="userIsFem">
                <label class="w3-validate">Female</label>
            </div>

            <!--    BIRTH DATE    -->
            <div class="w3-padding">
                <input class="w3-input" type="date" name="birthDate" id="userBirthDate" required>
                <label class="w3-label w3-validate">Birth date (ex. MM/DD/YYYY)</label>
            </div>

            <!--    MOST RECENT ADDRESS    -->
            <div class="w3-padding">
                <input class="w3-input" type="text" name="recentAddress" id="recentAddress" required>
                <label class="w3-label w3-validate">Most recent address</label>
            </div>

            <!--    CITY    -->
            <div class="w3-padding">
                <input class="w3-input" type="text" name="city" id="city" required>
                <label class="w3-label w3-validate">City</label>
            </div>

            <!--    STATE    -->
            <div class="w3-padding">
                <select class="w3-select" name="state" required>
                    <option value="" disabled selected>Select State</option>
                    <option value="1" label="Alabama">Alabama</option>
                    <option value="2" label="Alaska">Alaska</option>
                    <option value="3" label="Arizona">Arizona</option>
                    <option value="4" label="Arkansas">Arkansas</option>
                    <option value="5" label="California">California</option>
                    <option value="6" label="Colorado">Colorado</option>
                    <option value="7" label="Connecticut">Connecticut</option>
                    <option value="8" label="Delaware">Delaware</option>
                    <option value="9" label="DistrictOfColumbia">District of Columbia</option>
                    <option value="10" label="Florida">Florida</option>
                    <option value="11" label="Georgia">Georgia</option>
                    <option value="12" label="Hawaii">Hawaii</option>
                    <option value="13" label="Idaho">Idaho</option>
                    <option value="14" label="Illinois">Illinois</option>
                    <option value="15" label="Indiana">Indiana</option>
                    <option value="16" label="Iowa">Iowa</option>
                    <option value="17" label="Kansas">Kansas</option>
                    <option value="18" label="Kentucky">Kentucky</option>
                    <option value="19" label="Louisiana">Louisiana</option>
                    <option value="20" label="Maine">Maine</option>
                    <option value="21" label="Maryland">Maryland</option>
                    <option value="22" label="Massachusetts">Massachusetts</option>
                    <option value="23" label="Michigan">Michigan</option>
                    <option value="24" label="Minnesota">Minnesota</option>
                    <option value="25" label="Mississippi">Mississippi</option>
                    <option value="26" label="Missouri">Missouri</option>
                    <option value="27" label="Montana">Montana</option>
                    <option value="28" label="Nebraska">Nebraska</option>
                    <option value="29" label="Nevada">Nevada</option>
                    <option value="30" label="NewHampshire">New Hampshire</option>
                    <option value="31" label="NewJersey">New Jersey</option>
                    <option value="32" label="NewMexico">New Mexico</option>
                    <option value="33" label="NewYork">New York</option>
                    <option value="34" label="NorthCarolina">North Carolina</option>
                    <option value="35" label="NorthDakota">North Dakota</option>
                    <option value="36" label="Ohio">Ohio</option>
                    <option value="37" label="Oklahoma">Oklahoma</option>
                    <option value="38" label="Oregon">Oregon</option>
                    <option value="39" label="Pennsylvania">Pennsylvania</option>
                    <option value="40" label="RhodeIsland">Rhode Island</option>
                    <option value="41" label="SouthCarolina">South Carolina</option>
                    <option value="42" label="SouthDakota">South Dakota</option>
                    <option value="43" label="Tennessee">Tennessee</option>
                    <option value="44" label="Texas">Texas</option>
                    <option value="45" label="Utah">Utah</option>
                    <option value="46" label="Vermont">Vermont</option>
                    <option value="47" label="Virginia">Virginia</option>
                    <option value="48" label="Washington">Washington</option>
                    <option value="49" label="WestVirginia">West Virginia</option>
                    <option value="50" label="Wisconsin">Wisconsin</option>
                    <option value="51" label="Wyoming">Wyoming</option>
                    <option value="52" label="FederatedStatesOfMi">Federated States of Mi</option>
                    <option value="53" label="AmericanSamoa">American Samoa</option>
                    <option value="54" label="Guam">Guam</option>
                    <option value="55" label="MarshallIslands">Marshall Islands</option>
                    <option value="56" label="Palau">Palau</option>
                    <option value="57" label="PuertoRico">Puerto Rico</option>
                    <option value="58" label="VirginIslands">Virgin Islands</option>
                    <option value="59" label="ArmedForcesEurope">Armed Forces Europe</option>
                    <option value="60" label="ArmedForcesAmericas">Armed Forces Americas</option>
                    <option value="61" label="ArmedForcesPacific">Armed Forces Pacific</option>
                </select>
                <label class="w3-label w3-validate">State</label>
            </div>

            <!--    ZIP code    -->
            <div class="w3-padding">
                <input class="w3-input" type="number" name="zipCode" min="10000" max="999999" id="userZIPcode" required>
                <label class="w3-label w3-validate">ZIP code</label>
            </div>

            <!--    EMAIL    -->
            <div class="w3-padding">
                <input class="w3-input" type="email" name="email" id="userEmail">
                <label class="w3-label w3-validate">Email</label>
            </div>

            <!--    PHONE NUMBER    -->
            <div class="w3-padding">
                <input class="w3-input" type="number" name="phoneNum" min="1000000000" max="9999999999" id="userPhoneNum">
                <label class="w3-label w3-validate">Phone Number</label>
            </div>

            <!--    WEIGHT    -->
            <div class="w3-padding">
                <input class="w3-input" type="number" name="weight" min="0" id="userWeight" required>
                <label class="w3-label w3-validate">Weight</label>
            </div>

            <!--    BLOOD TYPE    -->
            <div class="w3-padding">
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
            
            <!--    ORGAN   -->
            <div class="w3-padding">
                <select class="w3-select" name="organ">
                    <option value="" disabled selected>Select Organ</option>
                    <option value="1">Kidney</option>
                    <option value="2">Liver-</option>
                    <option value="3">Lung</option>
                    <option value="4">Heart</option>
                    <option value="5">Pancreas</option>
                    <option value="6">Small Intestine</option>
                    <option value="7">Large Intestine</option>
                    <option value="8">Hand</option>
                    <option value="9">Face</option>
                </select>
            </div


            <!--    HLA Marker A1   -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_A1" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_A1</label>
            </div>

            <!--    HLA Marker A2   -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_A2" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_A2</label>
            </div>

            <!--    HLA Marker B1  -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_B1" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_B1</label>
            </div>

            <!--    HLA Marker B2  -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_B2" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_B2</label>
            </div>

            <!--    HLA Marker C1   -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_C1" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_C1</label>
            </div>

            <!--    HLA Marker C2   -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_C2" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_C2</label>
            </div>

            <!--    HLA Marker DRB1  -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_DRB1" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_DRB1</label>
            </div>

            <!--    HLA Marker DRB2   -->
            <div class="w3-padding">
                <select class="w3-select" name="HLAMarkers_DRB2" required>
                    <option value="" disabled selected>Select Marker</option>
                    <option value="1" label="Black">Black</option>
                    <option value="2" label="Blue">Blue</option>
                    <option value="3" label="White">White</option>
                </select>
                <label class="w3-label w3-validate">HLAMarkers_DRB2</label>
            </div>

            <div class="w3-padding w3-centered">
                <button class="w3-btn w3-green w3-round" type="submit" name="submit" value="Submit">Submit</button>
            </div>
            </p>
        </form>
        <!--            <a class="w3-button w3-theme w3-hover-white" href="/css/default.asp">Learn more about donation button</a>-->
        <!--            <a class="w3-button w3-theme w3-hover-white" href="/ccsref/default.asp">button 2</a>-->
<!--        <p class="w3-large">-->
            <!--            <p><div class="w3-code cssHigh notranslate">-->
        <!--body {<br>
            background-color: #d0e4fe;<br>}<br>h1 {<br>
            color: orange;<br>
            text-align: center;<br>}<br>p {<br>
            font-family: "Times New Roman";<br>
            font-size: 20px;<br>}-->
    </div>
    <!--        <a class="w3-button w3-theme w3-hover-white" href="/css/tryit.asp?filename=trycss_default" target="_blank">another freaking button</a>-->
</div>