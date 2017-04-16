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

    <!--    recipient table -->
    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Recipients</h2>
    </div>

    <!--    Table selection checkboxes  -->
    <form method="post" action="/Action_UpdateRecipientTable.php" enctype="multipart/form-data" class="w3-container w3-card-4 w3-padding">

        <input class="w3-check" type="checkbox" name="GeneralInfo" <?php if($_SESSION['GeneralInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>General info</label>

        <input class="w3-check" type="checkbox" name="MedicalInfo" <?php if($_SESSION['MedicalInfo'] == true) {?> checked="checked" <?php } ?>>
        <label>Medical info</label>

        <div class="w3-padding w3-center">
            <button class="w3-btn w3-green w3-large" type="submit" name="submit" value="Submit">Search</button>
        </div>

    </form>

    <div id="mainRecipientsTable" class="w3-card-4 w3-light-grey w3-responsive">

        <?php
//        $sql = "SELECT * FROM recipient LIMIT 0, 100";
        $sql = "SELECT * FROM recipient";
        $stmt = $conn->query($sql);
        $recipients = $stmt->fetchAll();

        if(count($recipients) > 0)
        {?>
            <table class="w3-table-all" id="recipientsTable">
                <thead>
                <tr class="w3-green">

                    <th onclick="sortTable('recipientsTable', 0)"><a class="w3-center w3-text-white">#</a></th>

                    <!--    TABLE HEADERS  -->
                    <!--    APPLICANT INFO COLUMNS    -->

                    <th onclick="sortTable('recipientsTable', 2)"><a class="w3-center w3-text-white">First Name</a></th>
                    <th onclick="sortTable('recipientsTable', 3)"><a class="w3-center w3-text-white">Last Name</a></th>

                    <!--    GENERAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['GeneralInfo'] == true)
                    { ?>
                        <th onclick="sortTable('recipientsTable', 4)"><a class="w3-center w3-text-white">Sex</a></th>
                        <th onclick="sortTable('recipientsTable', 5)"><a class="w3-center w3-text-white">Birth Date</a></th>
                        <th onclick="sortTable('recipientsTable', 6)"><a class="w3-center w3-text-white">Recent Address</a></th>
                        <th onclick="sortTable('recipientsTable', 7)"><a class="w3-center w3-text-white">City</a></th>
                        <th onclick="sortTable('recipientsTable', 8)"><a class="w3-center w3-text-white">State</a></th>
                        <th onclick="sortTable('recipientsTable', 9)"><a class="w3-center w3-text-white">ZIP Code</a></th>
                        <th onclick="sortTable('recipientsTable', 10)"><a class="w3-center w3-text-white">Email</a></th>
                        <th onclick="sortTable('recipientsTable', 11)"><a class="w3-center w3-text-white">Phone #</a></th>
                    <?php } ?>

                    <!--    MEDICAL INFO COLUMNS    -->
                    <?php
                    if ($_SESSION['MedicalInfo'] == true)
                    { ?>
                        <th onclick="sortTable('recipientsTable', 12)"><a class="w3-center w3-text-white">BloodType</a></th>
                        <th onclick="sortTable('recipientsTable', 13)"><a class="w3-center w3-text-white">Donating Organ</a></th>
                        <th onclick="sortTable('recipientsTable', 14)"><a class="w3-center w3-text-white">Weight</a></th>
                        <th onclick="sortTable('recipientsTable', 15)"><a class="w3-center w3-text-white">HLA A1</a></th>
                        <th onclick="sortTable('recipientsTable', 16)"><a class="w3-center w3-text-white">HLA A2</a></th>
                        <th onclick="sortTable('recipientsTable', 17)"><a class="w3-center w3-text-white">HLA B1</a></th>
                        <th onclick="sortTable('recipientsTable', 18)"><a class="w3-center w3-text-white">HLA B2</a></th>
                        <th onclick="sortTable('recipientsTable', 19)"><a class="w3-center w3-text-white">HLA C1</a></th>
                        <th onclick="sortTable('recipientsTable', 20)"><a class="w3-center w3-text-white">HLA C2</a></th>
                        <th onclick="sortTable('recipientsTable', 21)"><a class="w3-center w3-text-white">HLA DRB1</a></th>
                        <th onclick="sortTable('recipientsTable', 22)"><a class="w3-center w3-text-white">HLA DRB1</a></th>
                    <?php } ?>

                </tr>
                </thead>

                <!--    TABLE DATA  -->
                <?php
                $counter = 1;
                foreach($recipients as $recipient)
                {?>
                    <tr class="w3-hover-green">

                        <td><a href="https://organdonorsystem.azurewebsites.net/Page_Patient.php?recipientID=<?=$recipient['PatientID']?>" id="<?= $recipient['PatientID']?>" class="w3-center"><?= $counter?>.</a></td>

                        <td><p class="w3-center"><?= $recipient['FirstName']?></p></td>
                        <td><p class="w3-center"><?= $recipient['LastName']?></p></td>

                        <!--    GENERAL STATUS COLUMNS    -->
                        <?php
                        if ($_SESSION['GeneralInfo'] == true)
                        { ?>
                            <td><p class="w3-center"><?= $recipient['Sex']?></p></td>
                            <td><p class="w3-center"><?= $recipient['DateOfBirth']?></p></td>
                            <td><p class="w3-center"><?= $recipient['RecentAddress']?></p></td>
                            <td><p class="w3-center"><?= $recipient['City']?></p></td>
                            <td><p class="w3-center"><?= $recipient['State']?></p></td>
                            <td><p class="w3-center"><?= $recipient['ZIPcode']?></p></td>
                            <td><p class="w3-center"><?= $recipient['Email']?></p></td>
                            <td><p class="w3-center"><?= $recipient['PhoneNum']?></p></td>
                        <?php } ?>

                        <!--    MEDICAL INFO COLUMNS    -->
                        <?php
                        if ($_SESSION['MedicalInfo'] == true)
                        { ?>
                            <td><p class="w3-center"><?= $recipient['BloodType']?></p></td>
                            <td><p class="w3-center"><?= $recipient['Organ']?></p></td>
                            <td><p class="w3-center"><?= $recipient['Weight']?></p></td>
                            <td><p class="w3-center"><?= $recipient['HLAMarkers_A1']?></p></td>
                            <td><p class="w3-center"><?= $recipient['HLAMarkers_A2']?></p></td>
                            <td><p class="w3-center"><?= $recipient['HLAMarkers_B1']?></p></td>
                            <td><p class="w3-center"><?= $recipient['HLAMarkers_B2']?></p></td>
                            <td><p class="w3-center"><?= $recipient['HLAMarkers_C2']?></p></td>
                            <td><p class="w3-center"><?= $recipient['HLAMarkers_DRB1']?></p></td>
                            <td><p class="w3-center"><?= $recipient['HLAMarkers_DRB2']?></p></td>
                        <?php } ?>
                        <!--                        <td>--><?//= $recipient['Weight']?><!--</td>-->
<!--                        <td>--><?//= $recipient['BloodType']?><!--</td>-->


                    </></tr>
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