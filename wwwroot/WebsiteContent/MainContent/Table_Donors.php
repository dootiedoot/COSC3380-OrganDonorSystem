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
        $sql_select = "SELECT * FROM donor LIMIT 0, 100";
        $stmt = $conn->query($sql_select);
        $donors = $stmt->fetchAll();

        if(count($donors) > 0)
        {?>
            <table class="w3-table-all">
                <thead>
                <tr class="w3-green">

                    <th><p class="w3-center">#</p></th>

                    <!--    APPLICANT INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['ApplicantInfo'] == true)
                    { ?>
                        <th><p class="w3-center">Applicant Status</p></th>
                    <?php } ?>

                    <th><p class="w3-center">First Name</p></th>
                    <th><p class="w3-center">Last Name</p></th>

                    <!--    GENERAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['GeneralInfo'] == true)
                    { ?>
                        <th><p class="w3-center">Sex</p></th>
                        <th><p class="w3-center">Birth date</p></th>
                        <th><p class="w3-center">Recent Address</p></th>
                        <th><p class="w3-center">City</p></th>
                        <th><p class="w3-center">State</p></th>
                        <th><p class="w3-center">ZIP code</p></th>
                        <th><p class="w3-center">Email</p></th>
                        <th><p class="w3-center">Phone Number</p></th>
                    <?php } ?>

                    <!--    MEDICAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['MedicalInfo'] == true)
                    { ?>
                        <th><p class="w3-center">Blood Type</p></th>
                        <th><p class="w3-center">Donating Organ</p></th>
                        <th><p class="w3-center">Weight</p></th>
                        <th><p class="w3-center">HLA A1</p></th>
                        <th><p class="w3-center">HLA A2</p></th>
                        <th><p class="w3-center">HLA B1</p></th>
                        <th><p class="w3-center">HLA B2</p></th>
                        <th><p class="w3-center">HLA C1</p></th>
                        <th><p class="w3-center">HLA C2</p></th>
                        <th><p class="w3-center">HLA DRB1</p></th>
                        <th><p class="w3-center">HLA DRB2</p></th>
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
