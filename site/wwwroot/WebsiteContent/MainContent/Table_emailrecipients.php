<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Email Recipients</h2>
    </div>

    <!--    Donor table -->
    <div class="w3-card-4 w3-light-grey">

        <?php
        $sql_select = "SELECT * FROM emailrecipients LIMIT 0, 100";
        $stmt = $conn->query($sql_select);
        $emailrecipients = $stmt->fetchAll();
        if(count($emailrecipients) > 0)
        {?>
            <table class="w3-table-all">
                <thead>
                <tr class="w3-green">
                    <th>email_recipient</th>
                    <th>Doctor</th>
                    <th>emailrecipients</th>
                </tr>
                </thead>

                <?php
                $counter = 1;
                foreach($emailmessages as $emailmessage)
                {?>
                    <tr class="w3-hover-green">
                        <td><?= $emailmessage['email_recipient']?></td>
                        <td><?= $emailmessage['Doctor']?></td>
                        <td><?= $emailmessage['emailrecipients']?></td>
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