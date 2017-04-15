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
		<h1>How you can help us</h1>
	</div>
		<p>
            If you haven't already, register to be a donor! If you want to help in a more big picture sort of way, message your government representatives and ask them to vote to change organ donation to an "opt-out" consent process. The Opt-out system makes it so that every person is already defaulted to opting into being a donor. One wouldn't expect this to be such a big deal, but statistics show that areas where the default choice is to be an organ donor have much higher numbers of organ donors compared to other places. This helps save lives, and still gives those people that do not want to donate their organs the option to opt-out of the list of donors without any repercussions. 
		</p>
	
		
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
