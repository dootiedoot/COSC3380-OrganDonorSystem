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
        $stmt = $conn->query($sql);
        $donors = $stmt->fetchAll();

        if(count($donors) > 0)
        {?>
            <table class="w3-table-all" id="donorsTable">
                <thead>
                <tr class="w3-green w3-bar">

<!--                    <th><p class="w3-bar-item">#</p></th>-->
                    <!--    TABLE HEADERS  -->
                    <!--    APPLICANT INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['ApplicantInfo'] == true)
                    { ?>
                        <th onclick="sortTable('donorsTable', 1)"><a class="w3-center w3-bar-item">Applicant Status</a></th>
                    <?php } ?>

                    <th onclick="sortTable('donorsTable', 2)"><a class="w3-center w3-bar-item">First Name</a></th>
                    <th onclick="sortTable('donorsTable', 3)"><a class="w3-center w3-bar-item">Last Name</a></th>

                    <!--    GENERAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['GeneralInfo'] == true)
                    { ?>
                        <th onclick="sortTable('donorsTable', 4)"><a class="w3-center w3-bar-item">Sex</a></th>
                        <th onclick="sortTable('donorsTable', 5)"><a class="w3-center w3-bar-item">Birth Date</a></th>
                        <th onclick="sortTable('donorsTable', 6)"><a class="w3-center w3-bar-item">Recent Address</a></th>
                        <th onclick="sortTable('donorsTable', 7)"><a class="w3-center w3-bar-item">City</a></th>
                        <th onclick="sortTable('donorsTable', 8)"><a class="w3-center w3-bar-item">State</a></th>
                        <th onclick="sortTable('donorsTable', 9)"><a class="w3-center w3-bar-item">ZIP Code</a></th>
                        <th onclick="sortTable('donorsTable', 10)"><a class="w3-center w3-bar-item">Email</a></th>
                        <th onclick="sortTable('donorsTable', 11)"><a class="w3-center w3-bar-item">Phone #</a></th>
                    <?php } ?>

                    <!--    MEDICAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['MedicalInfo'] == true)
                    { ?>
                        <th onclick="sortTable('donorsTable', 12)"><a class="w3-center w3-bar-item">BloodType</a></th>
                        <th onclick="sortTable('donorsTable', 13)"><a class="w3-center w3-bar-item">Donating Organ</a></th>
                        <th onclick="sortTable('donorsTable', 14)"><a class="w3-center w3-bar-item">Weight</a></th>
                        <th onclick="sortTable('donorsTable', 15)"><a class="w3-center w3-bar-item">HLA A1</a></th>
                        <th onclick="sortTable('donorsTable', 16)"><a class="w3-center w3-bar-item">HLA A2</a></th>
                        <th onclick="sortTable('donorsTable', 17)"><a class="w3-center w3-bar-item">HLA B1</a></th>
                        <th onclick="sortTable('donorsTable', 18)"><a class="w3-center w3-bar-item">HLA B2</a></th>
                        <th onclick="sortTable('donorsTable', 19)"><a class="w3-center w3-bar-item">HLA C1</a></th>
                        <th onclick="sortTable('donorsTable', 20)"><a class="w3-center w3-bar-item">HLA C2</a></th>
                        <th onclick="sortTable('donorsTable', 21)"><a class="w3-center w3-bar-item">HLA DRB1</a></th>
                        <th onclick="sortTable('donorsTable', 22)"><a class="w3-center w3-bar-item">HLA DRB1</a></th>
                    <?php } ?>

                </tr>
                </thead>

                <!--    TABLE DATA  -->
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