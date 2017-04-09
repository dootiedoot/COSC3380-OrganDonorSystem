<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
<!-- Donor registration form -->
    <div class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">
        <form method="post" action="/Action_RegisterUser.php" enctype="multipart/form-data" class="w3-container" >
            <h2>User Registration</h2>
<!--            <p>sub title stuff.</p>-->
            <!--                <p>-->
            <div class="w3-row-padding">
                <div class="w3-half">
                    <input class="w3-input w3-border" type="text" name="username" required placeholder="Insert username...">
                    <label class="w3-label w3-validate">Username</label>
                </div>
                <div class="w3-half">
                    <input class="w3-input w3-border" type="password" name="password" required placeholder="Insert password...">
                    <label class="w3-label w3-validate">Password</label>
                </div>
            </div>

            <p>
            <div class="w3-padding">
                <input class="w3-input" type="email" name="email" required>
                <label class="w3-label w3-validate">Email</label>
            </div>
            </p>

            </p>
            <div class="w3-padding">
                <select class="w3-select" name="roleType">
                    <option value="" disabled selected>Select role type</option>
                    <option value="1">Admin</option>
                    <option value="2">Donor</option>
                    <option value="3">Recipient</option>
                    <option value="4">Doctor</option>
                    <option value="5">Surgeon</option>
                    <option value="6">DefaultUser</option>
                </select>
            </div>
            <p>
            <div class="w3-padding w3-centered">
                <button class="w3-btn w3-green w3-round" type="submit" name="submit" value="Submit">Register User</button>
            </div>
            </p>
        </form>
    </div>
</div>