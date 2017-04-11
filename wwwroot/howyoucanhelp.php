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
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
		</p>
	<div class="w3-panel w3-green w3-round">
		<h2>Facts about organ donation</h2>
	</div>
        <p>
            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
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
