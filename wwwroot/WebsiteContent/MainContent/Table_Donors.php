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

        <p><input class="w3-check" type="checkbox" name="GeneralInfo" <?php if($_SESSION['GeneralInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>General info</label></p>

        <p><input class="w3-check" type="checkbox" name="MedicalInfo" <?php if($_SESSION['MedicalInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>Medical info</label></p>

        <p><input class="w3-check" type="checkbox" name="ApplicantInfo" <?php if($_SESSION['ApplicantInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>Applicant Status</label></p>

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
                    
                    <th>#</th>

                    <?php
                    if ($_SESSION['GeneralInfo'] == true)
                    { ?>
                        <th>First Name</th>
                        <th>Middle Initial</th>
                        <th>Last Name</th>
                        <th>Sex</th>
                        <th>Birthdate</th>
                        <th>Recent Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>ZIP code</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    <?php } ?>

                    <?php
                    if ($_SESSION['MedicalInfo'] == true)
                    { ?>
                        <th>Blood Type</th>
                        <th>Weight</th>
                        <th>HLA A1</th>
                        <th>HLA A2</th>
                        <th>HLA B1</th>
                        <th>HLA B2</th>
                        <th>HLA C1</th>
                        <th>HLA C2</th>
                        <th>HLA DRB1</th>
                        <th>HLA DRB2</th>
                    <?php } ?>
                </tr>
                </thead>

                <?php
                $counter = 1;
                foreach($donors as $donor)
                {?>
                    <tr class="w3-hover-green">
                        <?php
                        if ($_SESSION['GeneralInfo'] == true)
                        { ?>
                            <td><?= $counter?>.</td>
                            <td><?= $donor['FirstName']?></td>
                            <td><?= $donor['MiddleInitial']?></td>
                            <td><?= $donor['LastName']?></td>
                            <td><?= $donor['Sex']?></td>
                            <td><?= $donor['DateOfBirth']?></td>
                            <td><?= $donor['RecentAddress']?></td>
                            <td><?= $donor['City']?></td>
                            <td><?= $donor['State']?></td>
                            <td><?= $donor['ZIPcode']?></td>
                            <td><?= $donor['Email']?></td>
                            <td><?= $donor['PhoneNum']?></td>
                        <?php } ?>

                        <?php
                        if ($_SESSION['MedicalInfo'] == true)
                        { ?>
                            <td><?= $donor['BloodType']?></td>
                            <td><?= $donor['Weight']?></td>
                            <td><?= $donor['HLAMarkers_A1']?></td>
                            <td><?= $donor['HLAMarkers_A2']?></td>
                            <td><?= $donor['HLAMarkers_B1']?></td>
                            <td><?= $donor['HLAMarkers_B2']?></td>
                            <td><?= $donor['HLAMarkers_C1']?></td>
                            <td><?= $donor['HLAMarkers_C2']?></td>
                            <td><?= $donor['HLAMarkers_DRB1']?></td>
                            <td><?= $donor['HLAMarkers_DRB2']?></td>
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
