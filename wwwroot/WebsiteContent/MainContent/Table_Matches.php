<?php
    session_start();

//    //  Initial state of checkmarks
//    if(!isset($_SESSION['GeneralInfo']))
//        $_SESSION['GeneralInfo'] = 'on';
//    if(!isset($_SESSION['MedicalInfo']))
//        $_SESSION['MedicalInfo'] = 'on';
//    if(!isset($_SESSION['ApplicantInfo']))
//        $_SESSION['ApplicantInfo'] = 'on';
?>

<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <!--    Donor table -->
    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Matches</h2>
    </div>

    <!--    Table selection checkboxes  -->
<!--    <form method="post" action="/Action_UpdateDonorTable.php" enctype="multipart/form-data" class="w3-container w3-card-4 w3-padding">-->
<!---->
<!--        <input class="w3-check" type="checkbox" name="GeneralInfo" --><?php //if($_SESSION['GeneralInfo'] == true) {?><!-- checked="checked" --><?php //} ?><!-->
<!--        <label>General info</label>-->
<!---->
<!--        <input class="w3-check" type="checkbox" name="MedicalInfo" --><?php //if($_SESSION['MedicalInfo'] == true) {?><!-- checked="checked" --><?php //} ?><!-->
<!--        <label>Medical info</label>-->
<!---->
<!--        <input class="w3-check" type="checkbox" name="ApplicantInfo" --><?php //if($_SESSION['ApplicantInfo'] == true) {?><!-- checked="checked" --><?php //} ?><!-->
<!--        <label>Applicant Status</label>-->
<!---->
<!--        <div class="w3-padding w3-center">-->
<!--            <button class="w3-btn w3-green w3-large" type="submit" name="submit" value="Submit">Search</button>-->
<!--        </div>-->
<!---->
<!--    </form>-->

    <div id="mainDonorsTable" class="w3-card-4 w3-light-grey w3-responsive">

        <?php
        //  Query all donors
        $sql_select = "SELECT * FROM donor";
        $stmt = $conn->query($sql_select);
        $donors = $stmt->fetchAll();

        //  Query all recipients
        $sql_select = "SELECT * FROM recipient";
        $stmt = $conn->query($sql_select);
        $recipients = $stmt->fetchAll();

        if(count($recipients) > 0)
        {?>
            <table class="w3-table-all" id="matchesTable">
<!--                <thead>-->
<!--                <tr class="w3-green">-->
<!---->
<!--                    <th><p class="w3-center">#</p></th>-->
<!--<!---->
<!--<!--                    <!--    APPLICANT INFO COLUMNS    -->
<!--<!--                    --><?php
////                    if ($_SESSION['ApplicantInfo'] == true)
////                    { ?>
<!--<!--                        <th><p class="w3-center">Applicant Status</p></th>-->
<!--<!--                    --><?php ////} ?>
<!---->
<!--                    <th><p class="w3-center">First Name</p></th>-->
<!--                    <th><p class="w3-center">Last Name</p></th>-->
<!---->
<!--                    <!--    GENERAL INFO COLUMNS    -->
<!--<!--                    --><?php
////                    if ($_SESSION['GeneralInfo'] == true)
////                    { ?>
<!--                        <th><p class="w3-center">Sex</p></th>-->
<!--                        <th><p class="w3-center">Birth date</p></th>-->
<!--                        <th><p class="w3-center">Recent Address</p></th>-->
<!--                        <th><p class="w3-center">City</p></th>-->
<!--                        <th><p class="w3-center">State</p></th>-->
<!--                        <th><p class="w3-center">ZIP code</p></th>-->
<!--                        <th><p class="w3-center">Email</p></th>-->
<!--                        <th><p class="w3-center">Phone Number</p></th>-->
<!--<!--                    --><?php ////} ?>
<!---->
<!--                    <!--    MEDICAL INFO COLUMNS    -->
<!--<!--                    --><?php
////                    if ($_SESSION['MedicalInfo'] == true)
////                    { ?>
<!--                        <th><p class="w3-center">Blood Type</p></th>-->
<!--                        <th><p class="w3-center">Donating Organ</p></th>-->
<!--                        <th><p class="w3-center">Weight</p></th>-->
<!--                        <th><p class="w3-center">HLA A1</p></th>-->
<!--                        <th><p class="w3-center">HLA A2</p></th>-->
<!--                        <th><p class="w3-center">HLA B1</p></th>-->
<!--                        <th><p class="w3-center">HLA B2</p></th>-->
<!--                        <th><p class="w3-center">HLA C1</p></th>-->
<!--                        <th><p class="w3-center">HLA C2</p></th>-->
<!--                        <th><p class="w3-center">HLA DRB1</p></th>-->
<!--                        <th><p class="w3-center">HLA DRB2</p></th>-->
<!--<!--                    --><?php ////} ?>
<!---->
<!--                </tr>-->
<!--                </thead>-->

                <?php
                $counter = 1;
                foreach($recipients as $recipient)
                {?>
                    <tr
                        <td>
                            <button onclick="ToggleElement(<?=$recipient['PatientID']?>)" class="w3-btn w3-block w3-padding"> <?=$recipient['FirstName']?> <?=$recipient['LastName']?> matches for <?=$recipient['Organ']?></button>
                            <div id="<?=$recipient['PatientID']?>" class="w3-hide w3-container w3-card-4">
                                <table class="w3-table-all" id=<?=$recipient['PatientID']?>>

                                    <!--    TABLE HEADER  -->
                                    <thead>
                                    <tr class="w3-green w3-bar">
                                        <th onclick="sortTable(<?=$recipient['PatientID']?>, 0)"><a class="w3-center w3-bar-item">First Name</a></th>
                                        <th onclick="sortTable(<?=$recipient['PatientID']?>, 1)"><a class="w3-center w3-bar-item">Last Name</a></th>
                                        <th onclick="sortTable(<?=$recipient['PatientID']?>, 2)"><a class="w3-center w3-bar-item">% Matched</a></th>
                                    </tr>
                                    </thead>

                                    <!--    TABLE DATA  -->
                                    <?php
                                    //  COMPARE TO RECIPIENTS
                                    foreach($donors as $donor)
                                    {?>
                                        <?php if (  $donor['Organ'] == $recipient['Organ'])
                                        { ?>
                                            <tr

                                            <!--    Calculate the match percentage    -->
                                            <?php
                                            $matchRate = 0;

                                            if ($recipient['HLAMarkers_A1'] == $donor['HLAMarkers_A1'])
                                                $matchRate += 1;
                                            if ($recipient['HLAMarkers_A2'] == $donor['HLAMarkers_A2'])
                                                $matchRate += 1;
                                            if ($recipient['HLAMarkers_B1'] == $donor['HLAMarkers_B1'])
                                                $matchRate += 1;
                                            if ($recipient['HLAMarkers_B2'] == $donor['HLAMarkers_B2'])
                                                $matchRate += 1;
                                            if ($recipient['HLAMarkers_C1'] == $donor['HLAMarkers_C1'])
                                                $matchRate += 1;
                                            if ($recipient['HLAMarkers_C2'] == $donor['HLAMarkers_C2'])
                                                $matchRate += 1;
                                            if ($recipient['HLAMarkers_DRB1'] == $donor['HLAMarkers_DRB1'])
                                                $matchRate += 1;
                                            if ($recipient['HLAMarkers_DRB2'] == $donor['HLAMarkers_DRB2'])
                                                $matchRate += 1;

                                            $matchRate = ($matchRate / 8) * 100;
                                            ?>

                                            <td class="w3-light-gray w3-round w3-padding w3-center"><?=$donor['FirstName']?></td>
                                            <td class="w3-light-gray w3-round w3-padding w3-center"><?=$donor['LastName']?></td>
                                            <div class="w3-light-grey">
                                                <td <div class="w3-container w3-blue w3-round w3-padding" style="width:<?=$matchRate?>%"><?=$matchRate?>% Matched</div></td>
                                            </div>

                                            </tr>
                                        <?php } ?>
                                    <?php } ?>

                                    <!--    SORT TABLE  -->
                                    <script> sortTable(<?=$recipient['PatientID']?>, 2); </script>
<!--                                    --><?php //var_dump($recipient['PatientID']) ?>

                                </table>
                            </div>
                        </td>
<!--                    <td><div class="w3-center w3-hover-white w3-button" onclick="ToggleElement(--><?//= $donor['PatientID'] ?> <?//= $donor['PatientID'] ?><!-- </div>>-->
<!--                    <div id= --><?//= $donor['PatientID'] ?><!-- class="w3-hide w3-show w3-white w3-card-4 w3-center">-->
<!--                    <a href="/How_donation_works.php" class="w3-bar-item w3-button w3-animate-left w3-round"> <i class="fa fa-heartbeat"></i> How Donation Works</a>-->
<!--                    </div></td>-->

<!--                    <td><p class="w3-center">--><?//= $counter?><!--.</p></td>-->

<!--                        <!--    APPLICANT INFO COLUMNS    -->
<!--<!--                        --><?php
//                        if ($_SESSION['ApplicantInfo'] == true)
////                        { ?>
<!--<!--                            --><?php ////if ($donor['ApplicantStatus'] == 'Unevaluated')   {?><!--<!-- <td><p class="w3-center"></p><i class="glyphicon glyphicon-unchecked" style="color:grey"></i></td> --><?php ////}
////                             else if ($donor['ApplicantStatus'] == 'Pass')          {?><!--<!-- <td><p class="w3-center"></p><i class="glyphicon glyphicon-check" style="color:green"></i></td> --><?php ////}
////                             else if ($donor['ApplicantStatus'] == 'Fail')          {?><!--<!-- <td><p class="w3-center"></p><i class="fa fa-times-rectangle-o" style="color:red"></i></td> --><?php ////} ?>
<!--<!--                        --><?php ////} ?>
<!---->
<!--                        <td><p class="w3-center">--><?//= $donor['FirstName']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['LastName']?><!--</p></td>-->
<!---->
<!--                        <!--    GENERAL STATUS COLUMNS    -->
<!--                        <td><p class="w3-center">--><?//= $donor['Sex']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['DateOfBirth']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['RecentAddress']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['City']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['State']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['ZIPcode']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['Email']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['PhoneNum']?><!--</p></td>-->
<!---->
<!--                        <!--    MEDICAL INFO COLUMNS    -->
<!--                        <td><p class="w3-center">--><?//= $donor['BloodType']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['Organ']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['Weight']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_A1']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_A2']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_B1']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_B2']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_C1']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_C2']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_DRB1']?><!--</p></td>-->
<!--                        <td><p class="w3-center">--><?//= $donor['HLAMarkers_DRB2']?><!--</p></td>-->
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

        <?php } ?>
    </div>
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

    function sortTable(tableName, n)
    {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById(tableName);
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
         no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            /*Loop through all table rows (except the
             first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                 one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                 based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                 and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount ++;
            } else {
                /*If no switching has been done AND the direction is "asc",
                 set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>