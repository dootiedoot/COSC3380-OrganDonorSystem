<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Recipients</h2>
    </div>

    <div id="mainDonorsTable" class="w3-card-4 w3-light-grey w3-responsive">

        <!--                <p>If you different hover colors, add w3-hover-<em>color</em> classes to each tr element:</p>-->
        <?php
        $sql_select = "SELECT * FROM recipient";
        $stmt = $conn->query($sql_select);
        $recipients = $stmt->fetchAll();

        if(count($recipients) > 0)
        {?>
            <table class="w3-table-all">
                <thead>
                <tr class="w3-green">
                    <th>#</th>

                    <th>First Name</th>
<!--                    <th>Middle Initial</th>-->
                    <th>Last Name</th>

                    <th>Weight</th>
                    <th>Blood type</th>
                    <th>Needed Organ</th>
                    <th>Date added</th>
                    <th>Birth date</th>
                    <th>Region #</th>
                    <th>HLA A1</th>
                    <th>HLA A2</th>
                    <th>HLA B1</th>
                    <th>HLA B2</th>
                    <th>HLA C1</th>
                    <th>HLA C2</th>
                    <th>HLA DRB1</th>
                    <th>HLA DRB2</th>
                </tr>
                </thead>

                <?php
                $counter = 1;
                foreach($recipients as $recipient)
                {?>
                    <tr class="w3-hover-green">
                        <td><?= $counter?>.</td>
                        <td><?= $recipient['FirstName']?></td>
<!--                        <td>--><?//= $recipient['MiddleInitial']?><!--</td>-->
                        <td><?= $recipient['LastName']?></td>

                        <td><?= $recipient['Weight']?></td>
                        <td><?= $recipient['BloodType']?></td>
                        <td><?= $recipient['Organ']?></td>
                        <td><?= $recipient['DateAddedToWaitlist']?></td>
                        <td><?= $recipient['DateOfBirth']?></td>
                        <td><?= $recipient['RegionNum']?></td>
                        <td><?= $recipient['HLAMarkers_A1']?></td>
                        <td><?= $recipient['HLAMarkers_A2']?></td>
                        <td><?= $recipient['HLAMarkers_B1']?></td>
                        <td><?= $recipient['HLAMarkers_A2']?></td>
                        <td><?= $recipient['HLAMarkers_C1']?></td>
                        <td><?= $recipient['HLAMarkers_C2']?></td>
                        <td><?= $recipient['HLAMarkers_DRB1']?></td>
                        <td><?= $recipient['HLAMarkers_DRB2']?></td>

                    </tr>
                    <?php

                    $counter++;
                }?>
            </table>
            <?php
        }
        else
        {?>
            <h3>No one needs an organ!</h3>
            <?php
        } ?>
    </div>
</div>
