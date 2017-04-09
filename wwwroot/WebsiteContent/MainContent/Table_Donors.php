<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
    <!--    Donor table -->

    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Registered Donors</h2>
    </div>

    <div id="mainDonorsTable" class="w3-card-4 w3-light-grey">

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
<!--                    <th>Weight</th>-->
<!--                    <th>Blood Type</th>-->
                </tr>
                </thead>

                <?php
                $counter = 1;
                foreach($donors as $donor)
                {?>
                    <tr class="w3-hover-green">
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
