<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Email Messages</h2>
    </div>

    <!--    Donor table -->
    <div class="w3-card-4 w3-light-grey">

        <?php
        $sql_select = "SELECT * FROM emailmessage LIMIT 0, 100";
        $stmt = $conn->query($sql_select);
        $emailmessages = $stmt->fetchAll();
        if(count($emailmessages) > 0)
        {?>
            <table class="w3-table-all">
                <thead>
                <tr class="w3-green">
                    <th>Sender</th>
                    <th>Recipient</th>
                    <th>Subject</th>
                    <th>Body</th>
                </tr>
                </thead>

                <?php
                $counter = 1;
                foreach($emailmessages as $emailmessage)
                {?>
                    <tr class="w3-hover-green">
                        <td><?= $emailmessage['Sender']?></td>
                        <td><?= $emailmessage['Recipient']?></td>
                        <td><?= $emailmessage['Subject']?></td>
                        <td><?= $emailmessage['Body']?></td>
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