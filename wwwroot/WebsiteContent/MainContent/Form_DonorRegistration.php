<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
<!-- Donor registration form -->
    <div id="mainDonorRegistrationForm" class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">
        <!--        <h1 class="w3-jumbo">Donor Registration</h1>-->
        <!--        <p class="w3-xlarge">sub title</p>-->
        <!--            <form action="/action_page.php" class="w3-container">-->

        <form method="post" action="RegisterDonor.php" enctype="multipart/form-data" class="w3-container" >
            <h2>Donor Registration</h2>
            <p>sub title stuff.</p>
            <!--                <p>-->
            <div class="w3-row-padding">
                <div class="w3-col" style="width:40%">
                    <input class="w3-input w3-border" type="text" name="firstName" id="firstName" required placeholder="Insert first name...">
                    <label class="w3-label w3-validate">First Name</label>
                </div>
                <div class="w3-col" style="width:20%">
                    <input class="w3-input w3-border" type="text" name="middleInit" id="middleInit" maxlength="1" placeholder="Insert middle initial...">
                    <label class="w3-label">Middle Initial</label>
                </div>
                <div class="w3-col" style="width:40%">
                    <input class="w3-input w3-border" type="text" name="lastName" id="lastName" required placeholder="Insert last name...">
                    <label class="w3-label w3-validate">Last Name</label>
                </div>
            </div>
            <!--                </p>-->
            <!--                <p>-->
            <!--                    <input class="w3-input" type="text" name="first" required>-->
            <!--                    <label class="w3-label w3-validate">First Name</label>-->
            <!--                </p>-->
            <p>
            <div class="w3-padding">
                <input class="w3-input" type="email" name="email" required>
                <label class="w3-label w3-validate">Email</label>
            </div>
            </p>
            <p>
            <div class="w3-padding">
                <input class="w3-radio" type="radio" name="gender" value="male" checked>
                <label class="w3-validate">Male</label>

                <input class="w3-radio" type="radio" name="gender" value="female">
                <label class="w3-validate">Female</label>
            </div>
            </p>
            <p>
            <div class="w3-padding">
                <input class="w3-input" type="date" name="birthDate" required>
                <label class="w3-label w3-validate">Birth date</label>
            </div>
            </p>
            <p>
            <div class="w3-padding">
                <input class="w3-input" type="number" name="phoneNum" min="1000000000" max="9999999999" required>
                <label class="w3-label w3-validate">Phone Number</label>
            </div>
            </p>
            <p>
            <div class="w3-padding">
                <input class="w3-input" type="number" name="weight" min="0" required>
                <label class="w3-label w3-validate">Weight</label>
            </div>
            </p>
            <div class="w3-padding">
                <select class="w3-select" name="bloodType">
                    <option value="" disabled selected>Select blood type</option>
                    <option value="1">A+</option>
                    <option value="2">A-</option>
                    <option value="3">B+</option>
                    <option value="4">B-</option>
                    <option value="5">AB+</option>
                    <option value="6">AB-</option>
                    <option value="7">O+</option>
                    <option value="8">O-</option>
                </select>
            </div>
            <p>
            <div class="w3-padding w3-centered">
                <button class="w3-btn w3-green" type="submit" name="submit" value="Submit">Submit</button>
            </div>
            </p>
        </form>
        <!--            <a class="w3-button w3-theme w3-hover-white" href="/css/default.asp">Learn more about donation button</a>-->
        <!--            <a class="w3-button w3-theme w3-hover-white" href="/ccsref/default.asp">button 2</a>-->
        <p class="w3-large">
            <!--            <p><div class="w3-code cssHigh notranslate">-->
        <!--body {<br>
            background-color: #d0e4fe;<br>}<br>h1 {<br>
            color: orange;<br>
            text-align: center;<br>}<br>p {<br>
            font-family: "Times New Roman";<br>
            font-size: 20px;<br>}-->
    </div>
    <!--        <a class="w3-button w3-theme w3-hover-white" href="/css/tryit.asp?filename=trycss_default" target="_blank">another freaking button</a>-->
</div>