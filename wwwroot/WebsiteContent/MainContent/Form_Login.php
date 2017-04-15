<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <!--    Show invalid user login error if any -->
    <?php
        session_start();
        if (isset($_SESSION['isLoginError']))
        { ?>

            <div class="w3-panel w3-red w3-display-container">
                <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                <h3>Login error!</h3>
                <p>Username or Password is incorrect.</p>
            </div>

            <?php unset($_SESSION['isLoginError']);
        }
    ?>

    <div class="w3-container w3-green w3-card-4 w3-center">
        <h2>Login</h2>
    </div>

    <div id="mainLoginForm" class="w3-container w3-padding-large w3-card-4 w3-light-grey w3-center">
        <!--        <h1 class="w3-jumbo">Donor Registration</h1>-->
        <!--        <p class="w3-xlarge">sub title</p>-->
        <!--            <form action="/action_page.php" class="w3-container">-->


        <form method="post" action="/Action_LoginUser.php" enctype="multipart/form-data" class="w3-container">
<!--        Username input   -->
            <div class="w3-padding w3-center" style="width:40%; margin-left: auto; margin-right: auto">
                <input class="w3-input w3-border" type="text" name="username" id="username" required placeholder="Insert username...">
                <label class="w3-label w3-padding w3-validate">Username</label>
            </div>

<!--        Password input    -->
            <div class="w3-padding w3-center" style="width:40%; margin-left: auto; margin-right: auto">
                <input class="w3-input w3-border" type="password" name="password" id="password" required placeholder="Insert password...">
                <label class="w3-label w3-padding w3-validate">Password</label>
            </div>

            <div class="w3-padding w3-center">
                <button class="w3-btn w3-green w3-large" type="submit" name="submit" value="Submit">Login</button>
            </div>
        </form>

        <p class="w3-large">
            <!--            <p><div class="w3-code cssHigh no translate">-->
        <!--body {<br>
            background-color: #d0e4fe;<br>}<br>h1 {<br>
            color: orange;<br>
            text-align: center;<br>}<br>p {<br>
            font-family: "Times New Roman";<br>
            font-size: 20px;<br>}-->
    </div>
</div>