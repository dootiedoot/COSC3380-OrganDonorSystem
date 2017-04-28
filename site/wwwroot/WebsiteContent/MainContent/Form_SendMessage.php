<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <?php
    session_start();
    if ($_SESSION['messagePostStatus'] == "Successful")
    { ?>

        <div class="w3-panel w3-green w3-display-container">
                <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <h3>Message Sent!</h3>
        </div>

        <?php unset($_SESSION['messagePostStatus']);
    }
    else if ($_SESSION['messagePostStatus'] == "Unsuccessful")
    { ?>
        <div class="w3-panel w3-red w3-display-container">
                <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <h3>Unable To Send Message</h3>
        </div>

        <?php unset($_SESSION['messagePostStatus']);
    } ?>

    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Send Message</h2>
    </div>

    <div id="mainDonorRegistrationForm" class="w3-container w3-padding-large w3-card-4 w3-light-grey">
    
        <form method="post" action="/Action_SendMessage.php" enctype="multipart/form-data" class="w3-container">
<!--        message recipient input   -->
            <div class="w3-padding w3-center" style="width:40%; margin-left: auto; margin-right: auto">
                <label class="w3-label w3-padding w3-validate">Message Recipient</label> </br>
                <input class="w3-input w3-border" type="text" name="messageRecipient" id="messageRecipient" required placeholder="To:">
            </div>

<!--        message subject input    -->
            <div class="w3-padding w3-center" style="width:40%; margin-left: auto; margin-right: auto">
                <label class="w3-label w3-padding w3-validate">Message Subject</label> </br>
                <input class="w3-input w3-border" type="text" name="messageSubject" id="messageSubject" required placeholder="Subject:">
            </div>

<!--        message body input    -->
            <div class="w3-padding w3-center" style="width:40%; margin-left: auto; margin-right: auto">
                <label class="w3-label w3-padding w3-validate">Message Body</label> </br>
                <textarea rows="15" cols="80" name="messageBody" required placeholder="Body:"> </textarea>
            </div>

            <div class="w3-padding w3-center">
                <button class="w3-btn w3-green w3-large" type="submit" name="send" value="Submit">Send</button>
            </div>
        </form>

    </div>
</div>