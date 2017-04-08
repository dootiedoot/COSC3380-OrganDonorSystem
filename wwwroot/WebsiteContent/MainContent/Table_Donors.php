<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
    <!--    Donor table -->
    <div id="mainDonorsTable" class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">
        <h2>Registered Donors</h2>
        <!--                <p>If you different hover colors, add w3-hover-<em>color</em> classes to each tr element:</p>-->
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
                    <th>Email</th>
                    <th>Sex</th>
                    <th>Birthdate</th>
                    <th>Phone Number</th>
                    <th>Weight</th>
                    <th>Blood Type</th>
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
                        <td><?= $donor['DEmail']?></td>
                        <td><?= $donor['Sex']?></td>
                        <td><?= $donor['DateOfBirth']?></td>
                        <td><?= $donor['DPhoneNum']?></td>
                        <td><?= $donor['Weight']?></td>
                        <td><?= $donor['BloodType']?></td>
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
