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
		<h1>How to donate</h1>
	</div>
		<p>
             		If you wish to donate, look up your state's organ donation website and register to be a donor. 
			The chance to save a life is just a few clicks away!
		</p>
	<div class="w3-panel w3-green w3-round">
		<h2>The organ donation process</h2>
	</div>
        <ul class="w3-ul w3-card-4">
        	<li>There are several different ways that a person can become an organ donor in the United States. Anyone over the age of 18 is eligible to sign up, and in several states, people under the age of 18 can too. </li>
		<li>There are several ways to sign up. The primary way that people sign up for organ donation is by registering online on their state website or by registering at a local motor vehicle department.</li>
		<li>When registering for donation most states give you the option to choose which organs and tissues you donate, or to donate everything that can be used.</li>
		<li>If you ever want to take yourself off the organ donation list all you have to do is look for an option such as "updating your status" on your state's site and you will be able to remove yourself.</li>
	    </ul>
        

	</div>
    
</div>


<!--    PAGE FOOTER  -->
<?php
    require "WebsiteContent/Footer.php";
?>
