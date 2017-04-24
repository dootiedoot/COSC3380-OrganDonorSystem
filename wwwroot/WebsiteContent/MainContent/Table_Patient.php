<?php
session_start();

require "Database/MySQLconfig.php";
//require "Database/updateDateAddedtoDB.php";

//             Following the database connection code, add code for updating information into the database.
if(!empty($_GET))
{
    //  Assign variables
    $donorID = $_GET['donorID'];
    $isEditMode = $_GET['editMode'];
    $sql = "SELECT * FROM donor WHERE PatientID='$donorID'";
    $stmt = $conn->query($sql);
    $donors = $stmt->fetchAll();

//    unset($_GET['donorID']);
//    unset($_GET['editMode']);

    if(count($donors) > 0)
    {
        foreach($donors as $donor)
        { ?>

            <div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

            <!--    Info table -->
            <div class="w3-container w3-green w3-card-4 w3-center">
                <h2><?=$donor['FirstName']?> <?php if ($donor['MiddleInitial'] != "") { ?><?=$donor['MiddleInitial']?>.<?php }?> <?=$donor['LastName']?></h2>
            </div>

            <div id="mainDonorRegistrationForm" class="w3-container w3-padding-large w3-card-4 w3-light-grey">
                <!--        <h1 class="w3-jumbo">Donor Registration</h1>-->
                <!--        <p class="w3-xlarge">sub title</p>-->
                <!--            <form action="/action_page.php" class="w3-container">-->

                <!--            <p>sub title stuff.</p>-->

            <form method="post" action="/Action_UpdatePatient.php" enctype="multipart/form-data" class="w3-container" >
                    <div class="w3-row-padding">
                        <div class="w3-col" style="width:40%">
                            <input class="w3-input w3-border" type="text" name="firstName" id="firstName" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['FirstName']?>">
                            <label class="w3-label w3-validate">First Name</label>
                        </div>
                        <div class="w3-col" style="width:20%">
                            <input class="w3-input w3-border" type="text" name="middleInit" id="middleInit" maxlength="1" <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['MiddleInitial']?>">
                            <label class="w3-label">Middle Initial</label>
                        </div>
                        <div class="w3-col" style="width:40%">
                            <input class="w3-input w3-border" type="text" name="lastName" id="lastName" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['LastName']?>">
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
                        <input class="w3-radio" type="radio" name="sex" value="male" id="userIsMale" <?php if ($isEditMode != true) { ?>disabled<?php } ?> <?php if($donor['Sex'] == 'Male') { ?> checked <?php } ?>>
                        <label class="w3-validate">Male</label>
                        <input class="w3-radio" type="radio" name="sex" value="female" id="userIsFem" <?php if ($isEditMode != true) { ?>disabled<?php } ?> <?php if($donor['Sex'] == 'Female') { ?> checked <?php } ?>>
                        <label class="w3-validate">Female</label>
                    </div>

                    <!--    BIRTH DATE    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="date" name="birthDate" id="userBirthDate" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['DateOfBirth']?>">
                        <label class="w3-label w3-validate">Birth date (ex. MM/DD/YYYY)</label>
                    </div>

                    <!--    MOST RECENT ADDRESS    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="text" name="recentAddress" id="recentAddress" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['RecentAddress']?>">
                        <label class="w3-label w3-validate">Most recent address</label>
                    </div>

                    <!--    CITY    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="text" name="city" id="city" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['City']?>">
                        <label class="w3-label w3-validate">City</label>
                    </div>

                    <!--    STATE    -->
                    <div class="w3-padding">
                        <select class="w3-select" name="state" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled >Select State</option>
                            <option value="1" <?php if($donor['State'] == "Alabama") { ?> selected <?php } ?> label="Alabama">Alabama</option>
                            <option value="2" <?php if($donor['State'] == "Alaska") { ?> selected <?php } ?> label="Alaska">Alaska</option>
                            <option value="3" <?php if($donor['State'] == "Arizona") { ?> selected <?php } ?> label="Arizona">Arizona</option>
                            <option value="4" <?php if($donor['State'] == "Arkansas") { ?> selected <?php } ?> label="Arkansas">Arkansas</option>
                            <option value="5" <?php if($donor['State'] == "California") { ?> selected <?php } ?> label="California">California</option>
                            <option value="6" <?php if($donor['State'] == "Colorado") { ?> selected <?php } ?> label="Colorado">Colorado</option>
                            <option value="7" <?php if($donor['State'] == "Connecticut") { ?> selected <?php } ?> label="Connecticut">Connecticut</option>
                            <option value="8" <?php if($donor['State'] == "Delaware") { ?> selected <?php } ?> label="Delaware">Delaware</option>
                            <option value="9" <?php if($donor['State'] == "DistrictOfColumbia") { ?> selected <?php } ?> label="DistrictOfColumbia">District of Columbia</option>
                            <option value="10" <?php if($donor['State'] == "Florida") { ?> selected <?php } ?> label="Florida">Florida</option>
                            <option value="11" <?php if($donor['State'] == "Georgia") { ?> selected <?php } ?> label="Georgia">Georgia</option>
                            <option value="12" <?php if($donor['State'] == "Hawaii") { ?> selected <?php } ?> label="Hawaii">Hawaii</option>
                            <option value="13" <?php if($donor['State'] == "Idaho") { ?> selected <?php } ?> label="Idaho">Idaho</option>
                            <option value="14" <?php if($donor['State'] == "Illinois") { ?> selected <?php } ?> label="Illinois">Illinois</option>
                            <option value="15" <?php if($donor['State'] == "Indiana") { ?> selected <?php } ?> label="Indiana">Indiana</option>
                            <option value="16" <?php if($donor['State'] == "Iowa") { ?> selected <?php } ?> label="Iowa">Iowa</option>
                            <option value="17" <?php if($donor['State'] == "Kansas") { ?> selected <?php } ?> label="Kansas">Kansas</option>
                            <option value="18" <?php if($donor['State'] == "Kentucky") { ?> selected <?php } ?> label="Kentucky">Kentucky</option>
                            <option value="19" <?php if($donor['State'] == "Louisiana") { ?> selected <?php } ?> label="Louisiana">Louisiana</option>
                            <option value="20" <?php if($donor['State'] == "Maine") { ?> selected <?php } ?> label="Maine">Maine</option>
                            <option value="21" <?php if($donor['State'] == "Maryland") { ?> selected <?php } ?> label="Maryland">Maryland</option>
                            <option value="22" <?php if($donor['State'] == "Massachusetts") { ?> selected <?php } ?> label="Massachusetts">Massachusetts</option>
                            <option value="23" <?php if($donor['State'] == "Michigan") { ?> selected <?php } ?> label="Michigan">Michigan</option>
                            <option value="24" <?php if($donor['State'] == "Minnesota") { ?> selected <?php } ?> label="Minnesota">Minnesota</option>
                            <option value="25" <?php if($donor['State'] == "Mississippi") { ?> selected <?php } ?> label="Mississippi">Mississippi</option>
                            <option value="26" <?php if($donor['State'] == "Missouri") { ?> selected <?php } ?> label="Missouri">Missouri</option>
                            <option value="27" <?php if($donor['State'] == "Montana") { ?> selected <?php } ?> label="Montana">Montana</option>
                            <option value="28" <?php if($donor['State'] == "Nebraska") { ?> selected <?php } ?> label="Nebraska">Nebraska</option>
                            <option value="29" <?php if($donor['State'] == "Nevada") { ?> selected <?php } ?> label="Nevada">Nevada</option>
                            <option value="30" <?php if($donor['State'] == "NewHampshire") { ?> selected <?php } ?> label="NewHampshire">New Hampshire</option>
                            <option value="31" <?php if($donor['State'] == "NewJersey") { ?> selected <?php } ?> label="NewJersey">New Jersey</option>
                            <option value="32" <?php if($donor['State'] == "NewMexico") { ?> selected <?php } ?> label="NewMexico">New Mexico</option>
                            <option value="33" <?php if($donor['State'] == "NewYork") { ?> selected <?php } ?> label="NewYork">New York</option>
                            <option value="34" <?php if($donor['State'] == "NorthCarolina") { ?> selected <?php } ?> label="NorthCarolina">North Carolina</option>
                            <option value="35" <?php if($donor['State'] == "NorthDakota") { ?> selected <?php } ?> label="NorthDakota">North Dakota</option>
                            <option value="36" <?php if($donor['State'] == "Ohio") { ?> selected <?php } ?> label="Ohio">Ohio</option>
                            <option value="37" <?php if($donor['State'] == "Oklahoma") { ?> selected <?php } ?> label="Oklahoma">Oklahoma</option>
                            <option value="38" <?php if($donor['State'] == "Oregon") { ?> selected <?php } ?> label="Oregon">Oregon</option>
                            <option value="39" <?php if($donor['State'] == "Pennsylvania") { ?> selected <?php } ?> label="Pennsylvania">Pennsylvania</option>
                            <option value="40" <?php if($donor['State'] == "RhodeIsland") { ?> selected <?php } ?> label="RhodeIsland">Rhode Island</option>
                            <option value="41" <?php if($donor['State'] == "SouthCarolina") { ?> selected <?php } ?> label="SouthCarolina">South Carolina</option>
                            <option value="42" <?php if($donor['State'] == "SouthDakota") { ?> selected <?php } ?> label="SouthDakota">South Dakota</option>
                            <option value="43" <?php if($donor['State'] == "Tennessee") { ?> selected <?php } ?> label="Tennessee">Tennessee</option>
                            <option value="44" <?php if($donor['State'] == "Texas") { ?> selected <?php } ?> label="Texas">Texas</option>
                            <option value="45" <?php if($donor['State'] == "Utah") { ?> selected <?php } ?> label="Utah">Utah</option>
                            <option value="46" <?php if($donor['State'] == "Vermont") { ?> selected <?php } ?> label="Vermont">Vermont</option>
                            <option value="47" <?php if($donor['State'] == "Virginia") { ?> selected <?php } ?> label="Virginia">Virginia</option>
                            <option value="48" <?php if($donor['State'] == "Washington") { ?> selected <?php } ?> label="Washington">Washington</option>
                            <option value="49" <?php if($donor['State'] == "WestVirginia") { ?> selected <?php } ?> label="WestVirginia">West Virginia</option>
                            <option value="50" <?php if($donor['State'] == "Wisconsin") { ?> selected <?php } ?> label="Wisconsin">Wisconsin</option>
                            <option value="51" <?php if($donor['State'] == "Wyoming") { ?> selected <?php } ?> label="Wyoming">Wyoming</option>
                            <option value="52" <?php if($donor['State'] == "FederatedStatesOfMi") { ?> selected <?php } ?> label="FederatedStatesOfMi">Federated States of Mi</option>
                            <option value="53" <?php if($donor['State'] == "AmericanSamoa") { ?> selected <?php } ?> label="AmericanSamoa">American Samoa</option>
                            <option value="54" <?php if($donor['State'] == "Guam") { ?> selected <?php } ?> label="Guam">Guam</option>
                            <option value="55" <?php if($donor['State'] == "MarshallIslands") { ?> selected <?php } ?> label="MarshallIslands">Marshall Islands</option>
                            <option value="56" <?php if($donor['State'] == "Palau") { ?> selected <?php } ?> label="Palau">Palau</option>
                            <option value="57" <?php if($donor['State'] == "PuertoRico") { ?> selected <?php } ?> label="PuertoRico">Puerto Rico</option>
                            <option value="58" <?php if($donor['State'] == "VirginIslands") { ?> selected <?php } ?> label="VirginIslands">Virgin Islands</option>
                            <option value="59" <?php if($donor['State'] == "ArmedForcesEurope") { ?> selected <?php } ?> label="ArmedForcesEurope">Armed Forces Europe</option>
                            <option value="60" <?php if($donor['State'] == "ArmedForcesAmericas") { ?> selected <?php } ?> label="ArmedForcesAmericas">Armed Forces Americas</option>
                            <option value="61" <?php if($donor['State'] == "ArmedForcesPacific") { ?> selected <?php } ?> label="ArmedForcesPacific">Armed Forces Pacific</option>
                        </select>
                        <label class="w3-label w3-validate">State</label>
                    </div>

                    <!--    ZIP code    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="number" name="zipCode" min="10000" max="999999" id="userZIPcode" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['ZIPcode']?>">
                        <label class="w3-label w3-validate">ZIP code</label>
                    </div>

                    <!--    EMAIL    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="email" name="email" id="userEmail" <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['Email']?>">
                        <label class="w3-label w3-validate">Email</label>
                    </div>

                    <!--    PHONE NUMBER    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="number" name="phoneNum" min="1000000000" max="9999999999" id="userPhoneNum" <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['PhoneNum']?>">
                        <label class="w3-label w3-validate">Phone Number</label>
                    </div>

                    <!--    WEIGHT    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="number" name="weight" min="0" id="userWeight" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> value="<?=$donor['Weight']?>">
                        <label class="w3-label w3-validate">Weight</label>
                    </div>

                    <!--    BLOOD TYPE    -->
                    <div class="w3-padding">
                        <select class="w3-select" name="bloodType" <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected>Select Blood Type</option>
                            <option value="1" <?php if($donor['BloodType'] == "A+") { ?> selected <?php } ?> label="A+">A+</option>
                            <option value="2" <?php if($donor['BloodType'] == "A-") { ?> selected <?php } ?> label="A-">A-</option>
                            <option value="3" <?php if($donor['BloodType'] == "B+") { ?> selected <?php } ?> label="B+">B+</option>
                            <option value="4" <?php if($donor['BloodType'] == "B-") { ?> selected <?php } ?> label="B-">B-</option>
                            <option value="5" <?php if($donor['BloodType'] == "AB+") { ?> selected <?php } ?> label="AB+">AB+</option>
                            <option value="6" <?php if($donor['BloodType'] == "AB-") { ?> selected <?php } ?> label="AB-">AB-</option>
                            <option value="7" <?php if($donor['BloodType'] == "O+") { ?> selected <?php } ?> label="O+">O+</option>
                            <option value="8" <?php if($donor['BloodType'] == "O-") { ?> selected <?php } ?> label="O-">O-</option>
                        </select>
                        <label class="w3-label">Blood Type</label>
                    </div>

                            <!--    ORGAN   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="organ" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select Organ</option>
                            <option value="1" <?php if($donor['Organ'] == "Kidney") { ?> selected <?php } ?>>Kidney</option>
                            <option value="2" <?php if($donor['Organ'] == "Liver") { ?> selected <?php } ?>>Liver</option>
                            <option value="3" <?php if($donor['Organ'] == "Lung") { ?> selected <?php } ?>>Lung</option>
                            <option value="4" <?php if($donor['Organ'] == "Heart") { ?> selected <?php } ?>>Heart</option>
                            <option value="5" <?php if($donor['Organ'] == "Pancreas") { ?> selected <?php } ?>>Pancreas</option>
                            <option value="6" <?php if($donor['Organ'] == "Small Intestine") { ?> selected <?php } ?>>Small Intestine</option>
                            <option value="7" <?php if($donor['Organ'] == "Large Intestine") { ?> selected <?php } ?>>Large Intestine</option>
                            <option value="8" <?php if($donor['Organ'] == "Hand") { ?> selected <?php } ?>>Hand</option>
                            <option value="9" <?php if($donor['Organ'] == "Face") { ?> selected <?php } ?>>Face</option>
                        </select>
                        <label class="w3-label">Donating Organ</label>
                    </div

                            <!--    HLA Marker A1   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_A1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker A1</option>
                            <option value="1" <?php if($donor['HLAMarkers_A1'] == "Black") { ?> selected <?php } ?> label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_A1'] == "Blue") { ?> selected <?php } ?> label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_A1'] == "White") { ?> selected <?php } ?> label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers A1</label>
                    </div>

                    <!--    HLA Marker A2   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_A2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker A2</option>
                            <option value="1" <?php if($donor['HLAMarkers_A2'] == "Black") { ?> selected <?php } ?> label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_A2'] == "Blue") { ?> selected <?php } ?> label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_A2'] == "White") { ?> selected <?php } ?> label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers A2</label>
                    </div>

                    <!--    HLA Marker B1  -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_B1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker B1</option>
                            <option value="1" <?php if($donor['HLAMarkers_B1'] == "Black") { ?> selected <?php } ?>  label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_B1'] == "Blue") { ?> selected <?php } ?>  label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_B1'] == "White") { ?> selected <?php } ?>  label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers B1</label>
                    </div>

                    <!--    HLA Marker B2  -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_B2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker B2</option>
                            <option value="1" <?php if($donor['HLAMarkers_B2'] == "Black") { ?> selected <?php } ?>label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_B2'] == "Blue") { ?> selected <?php } ?>label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_B2'] == "White") { ?> selected <?php } ?>label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers B2</label>
                    </div>

                    <!--    HLA Marker C1   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_C1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker C1</option>
                            <option value="1" <?php if($donor['HLAMarkers_C1'] == "Black") { ?> selected <?php } ?>label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_C1'] == "Blue") { ?> selected <?php } ?>label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_C1'] == "White") { ?> selected <?php } ?>label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers C1</label>
                    </div>

                    <!--    HLA Marker C2   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_C2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker C2</option>
                            <option value="1" <?php if($donor['HLAMarkers_C2'] == "Black") { ?> selected <?php } ?>label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_C2'] == "Blue") { ?> selected <?php } ?>label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_C2'] == "White") { ?> selected <?php } ?>label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers C2</label>
                    </div>

                    <!--    HLA Marker DRB1  -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_DRB1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker DRB1</option>
                            <option value="1" <?php if($donor['HLAMarkers_DRB1'] == "Black") { ?> selected <?php } ?>label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_DRB1'] == "Blue") { ?> selected <?php } ?>label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_DRB1'] == "White") { ?> selected <?php } ?>label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers DRB1</label>
                    </div>

                    <!--    HLA Marker DRB2   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_DRB2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled>Select HLA Marker DRB2</option>
                            <option value="1" <?php if($donor['HLAMarkers_DRB2'] == "Black") { ?> selected <?php } ?>label="Black">Black</option>
                            <option value="2" <?php if($donor['HLAMarkers_DRB2'] == "Blue") { ?> selected <?php } ?>label="Blue">Blue</option>
                            <option value="3" <?php if($donor['HLAMarkers_DRB2'] == "White") { ?> selected <?php } ?>label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers DRB2</label>
                    </div>

                    <?php if ($isEditMode == true)
                    { ?>
                        <div class="w3-center">
                            <div class="w3-padding w3-centered" >
                                <button class="w3-btn w3-green w3-round" type="submit" name="submit" value="Submit">Update</button>
                            </div>
                        </div>
                    <?php } ?>
                    </p>
                </form>

                <div class="w3-center">
                    <div class="w3-bar">
                        <a href="https://organdonorsystem.azurewebsites.net/Page_Patient.php?donorID=<?=$donor['PatientID']?>&editMode=true" class="w3-btn w3-teal w3-xlarge w3-padding">Edit</a>
                        <a href="https://organdonorsystem.azurewebsites.net/Action_DeletePatient.php?IDtoDelete=<?=$donor['PatientID']?>" class="w3-btn w3-red w3-xlarge w3-padding">Delete</a>
                    </div>
                </div>

            </div>
                <!--        <a class="w3-button w3-theme w3-hover-white" href="/css/tryit.asp?filename=trycss_default" target="_blank">another freaking button</a>-->
            </div>
        <?php }
    }
}
?>