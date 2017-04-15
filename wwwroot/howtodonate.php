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
		<h2>Facts about organ donation</h2>
	</div>
        
    <ul>
		<li>Anyone can be a donor, no matter the age. The medical condition of the donor will be evaluated and determine whether they are eligible to donate.</li>
		<li>Only the information that will ensure the compatibility, such as blood type, HLA markers, and other pertinent medical information are important for receiving or donating an organ.</li>
		<li>The list of organs and tissues that can be donated includes: bone, heart, lungs, kidneys, pancreas, liver, intestines, tendons, heart valves, corneas, and skin.</li>
		<li>Even if you have registered as a donor, it is wise to inform your family so they may understand the decision.</li>
	</ul>
        
		
	<div class="w3-panel w3-green w3-round">
		<h2>Live donations</h2>
	</div>
		<p>
			Many people still require transplants, but supply does not meet demand yet. Donating parts of the liver, a kidney, or tissue can help increase the supply of organs and improve the lives of others.
		</p>
	</div>
    
</div>


<!--    PAGE FOOTER  -->
<?php
    require "WebsiteContent/Footer.php";
?>
