<?php
session_start();

require "Database/MySQLconfig.php";
//require "Database/updateDateAddedtoDB.php";

//             Following the database connection code, add code for updating information into the database.
if(!empty($_GET))
{
    //  Assign variables
    $recipientID = $_GET['recipientID'];
    $isEditMode = $_GET['editMode'];
    $sql = "SELECT * FROM recipient WHERE PatientID='$recipientID'";
    $stmt = $conn->query($sql);
    $recipients = $stmt->fetchAll();

//    unset($_GET['donorID']);
//    unset($_GET['editMode']);

    if(count($recipients) > 0)
    {
        foreach($recipients as $recipient)
        { ?>

            <div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

            <!--    Info table -->
            <div class="w3-container w3-green w3-card-4 w3-center">
                <h2><?=$recipient['FirstName']?> <?php if ($recipient['MiddleInitial'] != "") { ?><?=$recipient['MiddleInitial']?>.<?php }?> <?=$recipient['LastName']?></h2>
            </div>

            <div id="mainrecipientRegistrationForm" class="w3-container w3-padding-large w3-card-4 w3-light-grey">
                <!--        <h1 class="w3-jumbo">Donor Registration</h1>-->
                <!--        <p class="w3-xlarge">sub title</p>-->
                <!--            <form action="/action_page.php" class="w3-container">-->

                <!--            <p>sub title stuff.</p>-->

            <form method="post" action="/Action_UpdatePatientRecipient.php" enctype="multipart/form-data" class="w3-container" >
                    <div class="w3-row-padding">
                        <div class="w3-col" style="width:40%">
                            <input class="w3-input w3-border" type="text" name="firstName" id="firstName" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['FirstName']?>">
                            <label class="w3-label w3-validate">First Name</label>
                        </div>
                        <div class="w3-col" style="width:20%">
                            <input class="w3-input w3-border" type="text" name="middleInit" id="middleInit" maxlength="1" <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['MiddleInitial']?>">
                            <label class="w3-label">Middle Initial</label>
                        </div>
                        <div class="w3-col" style="width:40%">
                            <input class="w3-input w3-border" type="text" name="lastName" id="lastName" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['LastName']?>">
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
                        <input class="w3-radio" type="radio" name="sex" value="male" id="userIsMale" <?php if ($isEditMode != true) { ?>disabled<?php } ?> <?php if($recipient['Sex'] == 'Male') { ?> checked <?php } ?>>
                        <label class="w3-validate">Male</label>
                        <input class="w3-radio" type="radio" name="sex" value="female" id="userIsFem" <?php if ($isEditMode != true) { ?>disabled<?php } ?> <?php if($recipient['Sex'] == 'Female') { ?> checked <?php } ?>>
                        <label class="w3-validate">Female</label>
                    </div>

                    <!--    BIRTH DATE    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="date" name="birthDate" id="userBirthDate" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                        <label class="w3-label w3-validate">Birth date (ex. MM/DD/YYYY)</label>
                    </div>

                    <!--    MOST RECENT ADDRESS    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="text" name="recentAddress" id="recentAddress" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['RecentAddress']?>">
                        <label class="w3-label w3-validate">Most recent address</label>
                    </div>

                    <!--    CITY    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="text" name="city" id="city" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['City']?>">
                        <label class="w3-label w3-validate">City</label>
                    </div>

                    <!--    STATE    -->
                    <div class="w3-padding">
                        <select class="w3-select" name="state" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['State']?></option>
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
                        <input class="w3-input" type="number" name="zipCode" min="10000" max="999999" id="userZIPcode" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['ZIPcode']?>">
                        <label class="w3-label w3-validate">ZIP code</label>
                    </div>

                    <!--    EMAIL    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="email" name="email" id="userEmail" <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['Email']?>">
                        <label class="w3-label w3-validate">Email</label>
                    </div>

                    <!--    PHONE NUMBER    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="number" name="phoneNum" min="1000000000" max="9999999999" id="userPhoneNum" <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['PhoneNum']?>">
                        <label class="w3-label w3-validate">Phone Number</label>
                    </div>

                    <!--    WEIGHT    -->
                    <div class="w3-padding">
                        <input class="w3-input" type="number" name="weight" min="0" id="userWeight" required <?php if ($isEditMode != true) { ?>disabled<?php } ?> placeholder="<?=$recipient['Weight']?>">
                        <label class="w3-label w3-validate">Weight</label>
                    </div>

                    <!--    BLOOD TYPE    -->
                    <div class="w3-padding">
                        <select class="w3-select" name="bloodType" <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['BloodType']?></option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">AB+</option>
                            <option value="6">AB-</option>
                            <option value="7">O+</option>
                            <option value="8">O-</option>
                        </select>
                        <label class="w3-label">Blood Type</label>
                    </div>

                            <!--    ORGAN   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="organ" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['Organ']?></option>
                            <option value="1">Kidney</option>
                            <option value="2">Liver</option>
                            <option value="3">Lung</option>
                            <option value="4">Heart</option>
                            <option value="5">Pancreas</option>
                            <option value="6">Small Intestine</option>
                            <option value="7">Large Intestine</option>
                            <option value="8">Hand</option>
                            <option value="9">Face</option>
                        </select>
                        <label class="w3-label">Donating Organ</label>
                    </div

                            <!--    HLA Marker A1   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_A1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_A1']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers A1</label>
                    </div>

                    <!--    HLA Marker A2   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_A2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_A2']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers A2</label>
                    </div>

                    <!--    HLA Marker B1  -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_B1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_B1']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers B1</label>
                    </div>

                    <!--    HLA Marker B2  -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_B2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_B2']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers B2</label>
                    </div>

                    <!--    HLA Marker C1   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_C1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_C1']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers C1</label>
                    </div>

                    <!--    HLA Marker C2   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_C2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_C2']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers C2</label>
                    </div>

                    <!--    HLA Marker DRB1  -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_DRB1" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_DRB1']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
                        </select>
                        <label class="w3-label w3-validate">HLAMarkers DRB1</label>
                    </div>

                    <!--    HLA Marker DRB2   -->
                    <div class="w3-padding">
                        <select class="w3-select" name="HLAMarkers_DRB2" required <?php if ($isEditMode != true) { ?>disabled<?php } ?>>
                            <option value="" disabled selected><?=$recipient['HLAMarkers_DRB2']?></option>
                            <option value="1" label="Black">Black</option>
                            <option value="2" label="Blue">Blue</option>
                            <option value="3" label="White">White</option>
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
                        <a href="https://organdonorsystem.azurewebsites.net/Page_RecipientPatient.php?recipientID=<?=$recipient['PatientID']?>&editMode=true" class="w3-btn w3-teal w3-xlarge w3-padding">Edit</a>
                        <a href="https://organdonorsystem.azurewebsites.net/Action_DeleteRecipient.php?IDtoDelete=<?=$recipient['PatientID']?>" class="w3-btn w3-red w3-xlarge w3-padding">Delete</a>
                    </div>
                </div>

            </div>
                <!--        <a class="w3-button w3-theme w3-hover-white" href="/css/tryit.asp?filename=trycss_default" target="_blank">another freaking button</a>-->
            </div>
        <?php }
    }
}
?>