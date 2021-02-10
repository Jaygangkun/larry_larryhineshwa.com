<!DOCTYPE html>
<html>
<header>
	<script src="jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="mystyle.css">
</header>
<body>
<div id="headerdiv">
	<table >
		<tr>
			<td><img src="hwa_header.jpg"></td>
			<td><img src="header2.jpg"></td>
			<td id="socialcell"><a href="https://www.facebook.com/profile.php?id=100008339314922"><img src="fb.png"></td>
			<td><a href="https://www.linkedin.com/in/larry-hines-66a8a21/"><img src="linkedin.png"></td>
			<td><a href="https://www.instagram.com/lwhmicrovision/"><img src="ig.png"></td>
		</tr>
	</table>
</div>


<div id="bodydiv">
	<?php
	$send_email = false;
	
	if(isset($_POST['placeorder'])){
		require_once ('mail_handler.php');
	}
	
	if($send_email){
		?>
		<h2 style="text-align: center;">Thank you for your order!  I appreciate you!  You will receive an invoice by email shortly, please let me know if you need anything else.</h2>
		<?php
	}
	?>
	<form class="input-form" name="textinput" id="input_form" method="POST">
	<table>
 		 <tr>
     			<td id="inputcell">

				
					<label for="propertyaddress">Covered Property Address</label>
  					<input type="text" id="propertyaddress" name="propertyaddress" required>
  					<label for="mailingaddress">Mailing Address (If Different)</label>
  					<input type="text" id="mailingaddress" name="mailingaddress">
  					<label for="buyername">Buyer Name(s)</label>
  					<input type="text" id="buyername" name="buyername" required>
  					<label for="buyeremail">Buyer Email Address</label><br>
  					<input type="text" id="buyeremail" name="buyeremail"><br>
  					<label for="buyerphone">Buyer Phone</label><br>
 					<input type="text" id="buyerphone" name="buyerphone"><br>
  					<label for="titlecompany">Title Company</label><br>
  					<input type="text" id="titlecompany" name="titlecompany"><br>
  					<label for="escrowofficer">Escrow Officer Name</label><br>
  					<input type="text" id="escrowofficer" name="escrowofficer"><br>
  					<label for="escrowofficeremail">Escrow Officer Email Address</label><br>
  					<input type="text" id="escrowofficeremail" name="escrowofficeremail"><br>
  					<label for="escrowofficerphone">Escrow Officer Phone</label><br>
  					<input type="text" id="escrowofficerphone" name="escrowofficerphone"><br>
  					<label for="referringagent">Referring Agent Name and Agency</label><br>
  					<input type="text" id="referringagent" name="referringagent" required><br>
  					<label for="referringagentphone">Referring Agent Phone</label><br>
  					<input type="text" id="referringagentphone" name="referringagentphone" required ><br>
  					<label for="referringagentemail">Referring Agent Email Address</label><br>
  					<input type="text" id="referringagentemail" name="referringagentemail" required ><br>
  			</td>

			<td id="radiocell">
	<table>
		<tr>
			<td>
  					<label for="closingdate"><u>Closing Date</u></label><br>
  					<input type="date" id="closingdate" name="closingdate" required ><br><br>
  					<label for="hometype"><u>Type of Home</u></label><br><br>
  					<input type="radio" id="Single Family" name="hometype" value="singlefamily"><label for="Single Family">Single Family</label><br>
  					<input type="radio" id="Townhome/Condo/Mobile Home" name="hometype" value="towncondomobile"><label for="Townhome/Condo/Mobile Home">Townhome/Condo/Mobile Home</label><br>
  					<input type="radio" id="Duplex/Triplex/Fourplex" name="hometype" value="multiflat"><label for="Multiflat">Duplex/Triplex/Fourplex</label><br><br>
			</td>
			<td>
  					<label for="warrantytype"><u>Select Warranty Type</u></label><br><br>
  					<input type="radio" id="Gold" name="warrantytype" value="Gold"><label for="Gold">Gold - $370</label><br>
  					<input type="radio" id="Platinum" name="warrantytype" value="Platinum"><label for="Platinum">Platinum - $450</label><br>
  					<input type="radio" id="Diamond" name="warrantytype" value="Diamond"><label for="Diamond">Diamond - $500</label><br>
  					<input type="radio" id="Sellers" name="warrantytype" value="Sellers"><label for="Sellers">Sellers Warranty</label><br>
  					<input type="radio" id="New Construction" name="warrantytype" value="New Construction"><label for="New Construction">New Construction</label><br>
  					<input type="radio" id="Multiyear" name="warrantytype" value="Multi-Year"><label for="Multiyear">Multi-Year Warranty</label><br><br>
			</td>
		</tr>
	</table>
  					<label for="warrantynotes"><u>Warranty Notes - (describe warranty type if new construction or multi-year)</u></label><br>
  					<input type="text" id="notes" name="warrantynotes" value="warrantynotes"><br><br>
  					<label for="options"><u>Options</u></label><br><br>
  					<input type="checkbox" id="greenplus" name="optiontype[]" value="greenplus"><label for="greenplus">$70 Green Plus</label><br>
  					<input type="checkbox" id="roofleak" name="optiontype[]" value="roofleak"><label for="roofleak">$50 Limited Roof Leak Repair</label><br>
  					<input type="checkbox" id="termite" name="optiontype[]" value="termite"><label for="termite">$75 Subterranean Termite Treatment</label><br>
  					<input type="checkbox" id="freezer" name="optiontype[]" value="freezer"><label for="freezer">$50 Freezer-Standalone</label><br>
  					<input type="checkbox" id="wetbar" name="optiontype[]" value="wetbar"><label for="wetbar">$25 Wet Bar Refrigerator/2nd Refrigerator</label><br>
  					<input type="checkbox" id="poolspa" name="optiontype[]" value="poolspa"><label for="poolspa">$150 Pool/Spa Combo</label><br>
  					<input type="checkbox" id="addpoolspa" name="optiontype[]" value="addpoolspa"><label for="addpoolspa">$150 Additional Pool or Spa</label><br>
  					<input type="checkbox" id="saltpool" name="optiontype[]" value="saltpool"><label for="saltpool">$300 Salt Water Pool (Includes Pool/Spa Combo)</label><br>
  					<input type="checkbox" id="wellpump" name="optiontype[]" value="wellpump"><label for="wellpump">$100 Well Pump</label><br>
  					<input type="checkbox" id="septicpump" name="optiontype[]" value="septicpump"><label for="septicpump">$75 Septic System/Sewage Ejector Pump & Septic Tank Pumping</label><br>
  					<input type="checkbox" id="waterline" name="optiontype[]" value="waterline"><label for="waterline">$90 External Water Line Repair</label><br>
  					<input type="checkbox" id="waterlineandsewer" name="optiontype[]" value="waterlineandsewer"><label for="waterlineandsewer">$195 External Water Line + Sewer & Septic Line Repair</label><br><br>
  					<label for"ordername"><u>Enter Your Name</u></label><br>
  					<input type="text" id="sendername" name="sendername" ><br>
  					<label for"orderemail"><u>Enter Your Email Address</u></label><br>
  					<input type="text" id="orderemail" name="orderemail" ><br><br>
  					<input type="submit" id="placeorder" name="placeorder" style="width:100%;" value="Place Warranty Order">
				

     			</td>
	  
     			<td id="contactinfocell"><h2>Agent Toolbox</h2><br>
    					<a href="https://www.hwahomewarranty.com/professionals/costs"><img src="https://www.hwahomewarranty.com/images/hwa/HWA-HTMLButton.gif" border="0" width="180" height="90" ALT="View Home Warranty Plans from HWA"></a><br><br>
  					<ul class="doubleBullets">
					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/about-hwa-home-warranty-coverage-video">Understand HWA Home Warranty Coverage</a></li>
					</ul>
					<h2>Check our our Warranty Wisdom series to learn how to get the most out of your home warranty!</h2>
					<ul class="doubleBullets">
					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/home-warranty-vs-homeowners-insurance-video">Home Warranty vs. Homeowners Insurance - What's the Difference?</a></li>
					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/why-choose-hwa-video">Why Choose HWA</a></li>
					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/who-we-are-video">Home Warranty of America (HWA): Who We Are</a></li>
					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/choosing-coverage-video">How Do I Know What Coverage I Need for My Home Warranty?</a></li>
					</ul>
					<ul class="doubleBullets">
					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/what-is-covered-video">What's Covered by an HWA Home Warranty?</a></li>

					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/file-a-claim-video">How Do I File a Claim with Home Warranty of America?</a></li>
					<li><a href="https://www.hwahomewarranty.com/learning-center/videos/claim-rejection-video">Why Was My Claim Rejected?</a></li>
					</ul><br><H2>Set me up on the HWA Warranty Order Portal and let me enter orders myself</h2>

     			</td>
  		</tr>
		
	</table>							
		
</form>
</div>

</body>
</html>