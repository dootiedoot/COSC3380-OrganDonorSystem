<!--    PAGE HEADER   -->
<?php
    require "WebsiteContent/Header.php";
?>

<!-- Top Bar -->
<?php
    require "WebsiteContent/TopBar/TopBar.php";
?>

<!-- Left Sidebar -->
<?php
    require "WebsiteContent/LeftSidebar/LeftSidebar.php";
?>

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
    <!--    Donor table -->
    <div id="mainDonorsTable" class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">
        
        <!--                <p>If you different hover colors, add w3-hover-<em>color</em> classes to each tr element:</p>-->
        <!-- Information on How it works: -->

	<div class="w3-panel w3-green w3-round">
		<h1>You could help save lives</h1>
	</div>
		<p>
            Not everyone knows about the importance of organ donation today. Thousands of people go without treatment do to the sheer unavailability of organs.
            While it may in fact seem like a large undertaking the process has been streamlined to help donors get registerd quickly and easily.
		</p>
	<div class="w3-panel w3-green w3-round">
		<h2>There is nothing to fear</h2>
	</div>
        <p>

            There have been many widespread myths about organ donation such as that if you agree to donate your organs then if you are ever at a hospital the doctors won't try as hard to save your life.
            It is also a widely spread fear that someone could possibly not be dead after their death certificate is signed. While it is unlikely that one would be declared dead when they are still alive,
            people who have agreed to be organ donors can rest assured that they are in fact given more tests to check as to the authenticity of their death.
        </p>

	</div>
    
</div>


<!--    PAGE FOOTER  -->
<?php
    require "WebsiteContent/Footer.php";
?>
