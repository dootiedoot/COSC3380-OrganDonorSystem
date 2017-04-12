<?php
    session_start();

    //  Initial state of checkmarks
    if(!isset($_SESSION['GeneralInfo']))
        $_SESSION['GeneralInfo'] = 'on';
    if(!isset($_SESSION['MedicalInfo']))
        $_SESSION['MedicalInfo'] = 'on';
    if(!isset($_SESSION['ApplicantInfo']))
        $_SESSION['ApplicantInfo'] = 'on';
?>

<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <!--    Donor table -->
    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Donors</h2>
    </div>

    <!--    Table selection checkboxes  -->
    <form method="post" action="/Action_UpdateDonorTable.php" enctype="multipart/form-data" class="w3-container w3-card-4 w3-padding">

        <input class="w3-check" type="checkbox" name="GeneralInfo" <?php if($_SESSION['GeneralInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>General info</label>

        <input class="w3-check" type="checkbox" name="MedicalInfo" <?php if($_SESSION['MedicalInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>Medical info</label>

        <input class="w3-check" type="checkbox" name="ApplicantInfo" <?php if($_SESSION['ApplicantInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>Applicant Status</label>

        <div class="w3-padding w3-center">
            <button class="w3-btn w3-green w3-large" type="submit" name="submit" value="Submit">Search</button>
        </div>

    </form>

    <div id="mainDonorsTable" class="w3-card-4 w3-light-grey w3-responsive">

        <?php
//        $sql = "SELECT * FROM donor LIMIT 0, 100";
        $sql = "SELECT * FROM donor";

        //  Add sorting if any
        if ($_GET['sort'] == 'FirstName')           $sql .= " ORDER BY FirstName ASC";
        elseif ($_GET['sort'] == 'LastName')        $sql .= " ORDER BY LastName ASC";
        elseif ($_GET['sort'] == 'Sex')             $sql .= " ORDER BY Sex ASC";
        elseif ($_GET['sort'] == 'BirthDate')       $sql .= " ORDER BY DateOfBirth ASC";
        elseif ($_GET['sort'] == 'RecentAddress')   $sql .= " ORDER BY RecentAddress ASC";
        elseif ($_GET['sort'] == 'City')            $sql .= " ORDER BY City ASC";
        elseif ($_GET['sort'] == 'State')           $sql .= " ORDER BY State ASC";
        elseif ($_GET['sort'] == 'ZIPcode')         $sql .= " ORDER BY ZIPcode ASC";
        elseif ($_GET['sort'] == 'Email')           $sql .= " ORDER BY Email ASC";
        elseif ($_GET['sort'] == 'PhoneNum')        $sql .= " ORDER BY PhoneNum ASC";

        elseif ($_GET['sort'] == 'BloodType')       $sql .= " ORDER BY BloodType ASC";
        elseif ($_GET['sort'] == 'DonatingOrgan')   $sql .= " ORDER BY Organ ASC";
        elseif ($_GET['sort'] == 'HLAA1')           $sql .= " ORDER BY HLAMarkers_A1 ASC";
        elseif ($_GET['sort'] == 'HLAA2')           $sql .= " ORDER BY HLAMarkers_A2 ASC";
        elseif ($_GET['sort'] == 'HLAB1')           $sql .= " ORDER BY HLAMarkers_B1 ASC";
        elseif ($_GET['sort'] == 'HLAB2')           $sql .= " ORDER BY HLAMarkers_B2 ASC";
        elseif ($_GET['sort'] == 'HLAC1')           $sql .= " ORDER BY HLAMarkers_C1 ASC";
        elseif ($_GET['sort'] == 'HLAC2')           $sql .= " ORDER BY HLAMarkers_C2 ASC";
        elseif ($_GET['sort'] == 'HLADRB1')         $sql .= " ORDER BY HLAMarkers_DRB1 ASC";
        elseif ($_GET['sort'] == 'HLADRB2')         $sql .= " ORDER BY HLAMarkers_DRB2 ASC";

        elseif ($_GET['sort'] == 'ApplicantStatus') $sql .= " ORDER BY ApplicantStatus ASC";

        $stmt = $conn->query($sql);
        $donors = $stmt->fetchAll();

        if(count($donors) > 0)
        {?>
            <table class="w3-table-all">
                <thead>
                <tr class="w3-green w3-bar">

<!--                    <th><p class="w3-bar-item">#</p></th>-->

                    <!--    APPLICANT INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['ApplicantInfo'] == true)
                    { ?>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=ApplicantStatus">Applicant Status</a></th>
                    <?php } ?>

                    <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=FirstName">First Name</a></th>
                    <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=LastName">Last Name</a></th>

                    <!--    GENERAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['GeneralInfo'] == true)
                    { ?>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=Sex">Sex</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=BirthDate">Birth Date</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=RecentAddress">Recent Address</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=City">City</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=State">State</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=ZIPcode">ZIP Code</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=Email">Email</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=PhoneNum">Phone #</a></th>
                    <?php } ?>

                    <!--    MEDICAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['MedicalInfo'] == true)
                    { ?>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=BloodType">BloodType</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=DonatingOrgan">Donating Organ</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=Weight">Weight</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLAA1">HLA A1</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLAA2">HLA A2</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLAB1">HLA B1</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLAB2">HLA B2</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLAC1">HLA C1</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLAC2">HLA C2</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLADRB1">HLA DRB1</a></th>
                        <th><a class="w3-center w3-bar-item" href="Page_Donors.php?sort=HLADRB2">HLA DRB1</a></th>
                    <?php } ?>

                </tr>
                </thead>

                <?php
                $counter = 1;
                foreach($donors as $donor)
                {?>
                    <tr class="w3-hover-green">

                        <td><p class="w3-center"><?= $counter?>.</p></td>

                        <!--    APPLICANT INFO COLUMNS    -->
                        <?php
                        if ($_SESSION['ApplicantInfo'] == true)
                        { ?>
                            <?php if ($donor['ApplicantStatus'] == 'Unevaluated')   {?> <td><p class="w3-center"></p><i class="glyphicon glyphicon-unchecked" style="color:grey"></i></td> <?php }
                             else if ($donor['ApplicantStatus'] == 'Pass')          {?> <td><p class="w3-center"></p><i class="glyphicon glyphicon-check" style="color:green"></i></td> <?php }
                             else if ($donor['ApplicantStatus'] == 'Fail')          {?> <td><p class="w3-center"></p><i class="fa fa-times-rectangle-o" style="color:red"></i></td> <?php } ?>
                        <?php } ?>

                        <td><p class="w3-center"><?= $donor['FirstName']?></p></td>
                        <td><p class="w3-center"><?= $donor['LastName']?></p></td>

                        <!--    GENERAL STATUS COLUMNS    -->
                        <?php
                        if ($_SESSION['GeneralInfo'] == true)
                        { ?>
                            <td><p class="w3-center"><?= $donor['Sex']?></p></td>
                            <td><p class="w3-center"><?= $donor['DateOfBirth']?></p></td>
                            <td><p class="w3-center"><?= $donor['RecentAddress']?></p></td>
                            <td><p class="w3-center"><?= $donor['City']?></p></td>
                            <td><p class="w3-center"><?= $donor['State']?></p></td>
                            <td><p class="w3-center"><?= $donor['ZIPcode']?></p></td>
                            <td><p class="w3-center"><?= $donor['Email']?></p></td>
                            <td><p class="w3-center"><?= $donor['PhoneNum']?></p></td>
                        <?php } ?>

                        <!--    MEDICAL INFO COLUMNS    -->
                        <?php
                        if ($_SESSION['MedicalInfo'] == true)
                        { ?>
                            <td><p class="w3-center"><?= $donor['BloodType']?></p></td>
                            <td><p class="w3-center"><?= $donor['Organ']?></p></td>
                            <td><p class="w3-center"><?= $donor['Weight']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_A1']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_A2']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_B1']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_B2']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_C1']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_C2']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_DRB1']?></p></td>
                            <td><p class="w3-center"><?= $donor['HLAMarkers_DRB2']?></p></td>
                        <?php } ?>
                        <!--                        <td>--><?//= $donor['Weight']?><!--</td>-->
<!--                        <td>--><?//= $donor['BloodType']?><!--</td>-->


                    </tr>
                    <?php

                    $counter++;
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
</div>

<!--    FUNCTIONS    -->
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