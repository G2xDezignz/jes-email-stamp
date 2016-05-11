<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>eMail Signature Stamp</title>
<link rel="icon" href="favicon.ico" />
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Open+Sans);
@import url("css/styles.css");
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!-- Full Width Image Header -->
<header class="header-image" id="intro">
<div class="header-overlay">
    <div class="container">
        <h1>Create an eMail Signature</h1>
        <p>As part of an ongoing effort in presenting a consistent corporate image, all employees of JES and affiliate companies are required to create an official eMail signature. This web app is designed to assist in customizing one especially for you to be used.</p>
        <p class="go"><a href="#emailSigTemplate" class="btn btn-primary btn-lg">Get started...</a></p>
    </div><!-- /.container #intro -->
</div>
</header>

<!-- eMail Signature Creator -->
<section id="emailSigTemplate">
<div class="container">

<div id="sigCreate" class="col-lg-6">
<h2>Begin customizing your eMail Signature...</h2>
<form method="post" id="emailSigForm" action="#sigCustom">
<fieldset>
<p class="msg req">* Denotes a required field</p>
<p><label for="empName" class="lbl_input">Name</label>
<input name="empName" type="text" required id="empName" placeholder="Name" title="Name" size="30" maxlength="75"<?php echo(isset($_POST['empName']) ? ' value="'.$_POST['empName'].'"' : ''); ?>> <span class="req">*</span> </p>
<p><label for="empTitle" class="lbl_input">Title</label>
<input name="empTitle" type="text" required id="empTitle" placeholder="Title" title="Title" size="30" maxlength="500"<?php echo(isset($_POST['empTitle']) ? ' value="'.$_POST['empTitle'].'"' : ''); ?>> <span class="req">*</span> </p>
<p><label for="empEmail" class="lbl_input">eMail</label>
<input name="empEmail" type="email" required id="empEmail" placeholder="eMail" title="Email" size="30" maxlength="255"<?php echo(isset($_POST['empEmail']) ? ' value="'.$_POST['empEmail'].'"' : ''); ?>> <span class="req">*</span> </p>
<p><label for="empMobile" class="lbl_input">Mobile</label>
<input name="empMobile" type="tel" id="empMobile" placeholder="Mobile" pattern="\d{10}" size="20" maxlength="10"<?php echo(isset($_POST['empMobile']) ? ' value="'.$_POST['empMobile'].'"' : ''); ?> title="Mobile (numbers only)"> <span class="msg">numbers only</span></p>
<p><label for="empFax" class="lbl_input">Fax</label>
<input name="empFax" type="tel" id="empFax" placeholder="Fax" pattern="\d{10}" size="20" maxlength="10"<?php echo(isset($_POST['empFax']) ? ' value="'.$_POST['empFax'].'"' : ''); ?> title="Fax (numbers only)"> <span class="msg">numbers only</span></p>
<p><label for="selCompany" class="lbl_input">Company</label>
<select name="selCompany" required id="selCompany">
  <option value="" disabled<?php echo(!isset($_POST['selCompany']) ? ' selected' : ''); ?>>Select your Company...</option>
  <option value="jes"<?php echo($_POST['selCompany']=='jes' ? ' selected' : ''); ?>>JES Holdings, LLC</option>
  <option value="aep"<?php echo($_POST['selCompany']=='aep' ? ' selected' : ''); ?>>Affordable Equity Partners, Inc.</option>
  <option value="chm"<?php echo($_POST['selCompany']=='chm' ? ' selected' : ''); ?>>Capital Health Management, Inc.</option>
  <option value="fwc"<?php echo($_POST['selCompany']=='fwc' ? ' selected' : ''); ?>>Fairway Construction Co., Inc.</option>
  <option value="fwmCorp"<?php echo($_POST['selCompany']=='fwmCorp' ? ' selected' : ''); ?>>Fairway Management, Inc. (Office)</option>
  <option value="fwm"<?php echo($_POST['selCompany']=='fwm' ? ' selected' : ''); ?>>Fairway Management, Inc. (Property)</option>
  <option value="dev"<?php echo($_POST['selCompany']=='dev' ? ' selected' : ''); ?>>JES Dev Co, Inc.</option>
  <option value="primeCorp"<?php echo($_POST['selCompany']=='primeCorp' ? ' selected' : ''); ?>>JES Prime Senior Living (Office)</option>
  <option value="prime"<?php echo($_POST['selCompany']=='prime' ? ' selected' : ''); ?>>JES Prime Senior Living (Property)</option>
  <option value="metro"<?php echo($_POST['selCompany']=='metro' ? ' selected' : ''); ?>>Metro Concrete &amp; Equipment Rental</option>
</select> <span class="req">*</span> </p>
<div id="corp_office">
<p class="extra">Select Corporate office location:</p>
<p><label for="selOffice" class="lbl_input">Office</label>
<select name="selOffice" id="selOffice">
  <option value="" disabled<?php echo(!isset($_POST['selOffice']) ? ' selected' : ''); ?>>Select your Office...</option>
  <option value="como"<?php echo($_POST['selOffice']=='como' ? ' selected' : ''); ?>>Columbia</option>
  <option value="atl"<?php echo($_POST['selOffice']=='atl' ? ' selected' : ''); ?>>Atlanta</option>
  <option value="stl"<?php echo($_POST['selOffice']=='stl' ? ' selected' : ''); ?>>St Louis</option>
</select> <span class="req">*</span> </p>
</div>
<div id="fwm_office">
<p class="extra">If company is FWM or JES Prime, complete the following:</p>
<p><label for="fwmProp" class="lbl_input">Property</label>
<input name="fwmProp" type="text" id="fwmProp" placeholder="Property Name" title="Property Name" size="30" maxlength="255"<?php echo(isset($_POST['fwmProp']) ? ' value="'.$_POST['fwmProp'].'"' : ''); ?>> <span class="req">*</span> </p>
<p><label for="fwmPhone" class="lbl_input">Phone</label>
<input name="fwmPhone" type="tel" id="fwmPhone" placeholder="Office Phone" pattern="\d{10}" size="20" maxlength="10"<?php echo(isset($_POST['fwmPhone']) ? ' value="'.$_POST['fwmPhone'].'"' : ''); ?> title="Office Phone (numbers only)"> <span class="msg">numbers only</span> <span class="req">*</span></p>
<p><label for="fwmAddr" class="lbl_input">Address</label>
<input name="fwmAddr" type="text" id="fwmAddr" placeholder="Office Address" title="Office Address" size="30" maxlength="75"<?php echo(isset($_POST['fwmAddr']) ? ' value="'.$_POST['fwmAddr'].'"' : ''); ?>> <span class="req">*</span> </p>
<p><label for="fwmCity" class="lbl_input">City</label>
<input name="fwmCity" type="text" id="fwmCity" placeholder="City" title="City" size="30" maxlength="75"<?php echo(isset($_POST['fwmCity']) ? ' value="'.$_POST['fwmCity'].'"' : ''); ?>> <span class="req">*</span> </p>
<p><label for="fwmState" class="lbl_input">State</label>
<input name="fwmState" type="text" id="fwmState" placeholder="State" title="State" size="15" maxlength="25"<?php echo(isset($_POST['fwmState']) ? ' value="'.$_POST['fwmState'].'"' : ''); ?>> <span class="req">*</span> &nbsp; <label for="fwmZip" class="lbl_input">Zip</label>
<input name="fwmZip" type="text" id="fwmZip" placeholder="Zip" title="Zip" size="8" maxlength="15"<?php echo(isset($_POST['fwmZip']) ? ' value="'.$_POST['fwmZip'].'"' : ''); ?>> <span class="req">*</span> </p>
</div>
<div id="chm_office">
<p class="extra">If CHM, please select Care Center:</p>
<p><label for="selCenter" class="lbl_input">Location</label>
<select name="selCenter" id="selCenter">
  <option value="" disabled<?php echo(!isset($_POST['selCenter']) ? ' selected' : ''); ?>>Select your Care Center...</option>
  <option value="countryclub"<?php echo($_POST['selCenter']=='countryclub' ? ' selected' : ''); ?>>Country Club</option>
  <option value="crown"<?php echo($_POST['selCenter']=='crown' ? ' selected' : ''); ?>>Crown</option>
  <option value="wilshire"<?php echo($_POST['selCenter']=='wilshire' ? ' selected' : ''); ?>>Wilshire at Lakewood</option>
</select> <span class="req">*</span> </p>
<p><input name="cbCHM" type="checkbox" id="cbCHM" value="CHM"<?php echo($_POST['cbCHM']=='CHM' ? ' checked' : ''); ?>> <label for="cbCHM" class="lbl_cb">Use CHM logo</label> </p>
</div>
<p><input name="cbIRS" type="checkbox" id="cbIRS" value="IRS"<?php echo($_POST['cbIRS']=='IRS' ? ' checked' : ''); ?>> <label for="cbIRS" class="lbl_cb">Include IRS disclosure</label> </p>
<p><input name="emailSubmit" type="submit" id="emailSubmit" form="emailSigForm" value="create signature"> &nbsp; <input type="button" name="sigReset" id="sigReset" form="emailSigForm" value="start over" onClick="location.href='_phase2.php'"></p>
</fieldset>
</form>
</div><!-- /#sigCreate -->

<div id="sigCustom" class="col-lg-6">
<?php
if (isset($_POST['emailSubmit']) && $_POST['emailSubmit']=="create signature") {
	// set demographics
	$ename = $_POST['empName'];
	$etitle = $_POST['empTitle'];
	$email = $_POST['empEmail'];
	$mobile = $_POST['empMobile'];
	$fax = $_POST['empFax'];
	$irs = $_POST['cbIRS'];
	$chm = $_POST['cbCHM'];
	$pname = $_POST['fwmProp'];
	
	// set company logo, official name and url
	switch ($_POST['selCompany']) {
		case 'aep':
			$logo = 'aep.png';
			$company = 'Affordable Equity Partners, Inc.';
			$web = 'www.aepartners.com';
			break;
		case 'chm':
			if ($chm=='CHM') {
				$logo = 'chm.png';
				$company = 'Capital Health Management, Inc.';
				$web = 'www.capitalhealthmanagement.com';
			} else {
				switch ($_POST['selCenter']) {
					case 'countryclub':
						$logo = 'countryclub.png';
						$company = 'Country Club Care Center';
						$web = 'www.countryclubcarecenter.com';
						break;
					case 'crown':
						$logo = 'crown.png';
						$company = 'Crown Care Center';
						$web = 'www.crowncarecenter.com';
						break;
					case 'wilshire':
						$logo = 'wilshire.png';
						$company = 'Wilshire at Lakewood Care Center';
						$web = 'www.wilshireatlakewoodcarecenter.com';
						break;
					default:
						$logo = 'chm.png';
						$company = 'Capital Health Management, Inc.';
						$web = 'www.capitalhealthmanagement.com';
				}
			}
			break;
		case 'fwc':
			$logo = 'fwc.png';
			$company = 'Fairway Construction Co., Inc.';
			$web = 'www.fairwayconstruction.net';
			break;
		case 'fwm':
		case 'fwmCorp':
			$logo = 'fwm.png';
			$company = 'Fairway Management, Inc.';
			$web = 'www.fairwaymanagement.com';
			break;
		case 'dev':
			$logo = 'dev.png';
			$company = 'JES Dev Co., Inc.';
			$web = '';
			break;
		case 'prime':
		case 'primeCorp':
			$logo = 'prime.png';
			$company = 'JES Prime Senior Living';
			$web = 'www.jesprimeseniorliving.com';
			break;
		case 'metro':
			$logo = 'metro.png';
			$company = 'Metro Concrete &amp; Equipment Rental';
			$web = '';
			break;
		default:
			$logo = 'jes.png';
			$company = 'JES Holdings, LLC';
			$web = 'www.jesholdings.com';
	}
		
	// set address and phone
	switch ($_POST['selCompany']) {
		case 'chm':
			switch ($_POST['selCenter']) {
				case 'countryclub':
					$addr = '503 Regent Drive, Warrensburg, MO 64093';
					$phone = '660-429-4444';
					$fax = '6604294331';
					break;
				case 'crown':
					$addr = '3001 East Elm, Harrisonville, MO 64701';
					$phone = '816-380-6525';
					$fax = '8163804963';
					break;
				case 'wilshire':
					$addr = "600 NE Meadowview Drive, Lee's Summit, MO 64064";
					$phone = '816-554-9866';
					$fax = '8165549867';
					break;
			}
			break;
		case 'fwm':
		case 'prime':
			$addr = $_POST['fwmAddr'].", ".$_POST['fwmCity'].", ".$_POST['fwmState']." ".$_POST['fwmZip'];
			$ph = $_POST['fwmPhone'];
			$phone = substr($ph,0,3)."-".substr($ph,3,3)."-".substr($ph,6,4);
			break;
		default:
			switch ($_POST['selOffice']) {
				case 'atl':
					$addr = '3290 Northside Parkway NW, Suite 300, Atlanta, GA 30327';
					$phone = '404-841-2227';
					break;
				case 'stl':
					$addr = '168 N Meramec, Suite 201, Clayton, MO 63105';
					$phone = '573-443-2021';
					break;
				default:
					$addr = '206 Peach Way, Columbia, MO 65203';
					$phone = '573-443-2021';
			}
	} 
	 
	
	// FWC has seperate phone number
	if ($_POST['selCompany']=='fwc') {
		if ($_POST['selOffice']=='como') {
			$phone = '573-303-3765';
		}
		if ($_POST['selOffice']=='atl') {
			$phone = '404-935-0077';
		}
	}
?>
    <h2>eMail Signature</h2>
    <div id="stamp" onClick="select_all(this)">
    <!-- Begin eMail signature template -->
    <div id="sig_template" style="direction:ltr; max-width:600px;">
        <table border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
            <td style="vertical-align:top; padding:1px 10px 0 0;">
                <div id="sig_logo" style="float:left;">
                    <img src="http://<?php echo($_SERVER['SERVER_NAME']); ?>/logos/<?php echo($logo); ?>" />
                </div><!-- /#sig_logo -->
            </td>
            <td style="vertical-align:top; border-left:1px solid rgb(42,42,42); padding:1px 0 1px 10px;">
            <div style="font:13.5px Calibri, Arial, 'Helvetica Neue', Helvetica, sans-serif; color:#000; font-size-adjust: none; font-stretch: normal;">
                <div id="sig_info">
                    <p><span class="sig_name" style="font-weight:bold"><?php echo($ename); ?></span><br>
                    <span class="sig_title" style="font-style:oblique"><?php echo($etitle); ?></span></p>
                </div><!-- /#sig_info -->
                <div id="sig_company">
                <?php 
				switch ($_POST['selCompany']) {
					case 'fwm':
					case 'prime':
					// display for properties 
				?>
                    <p><span class="sig_property_name" style="font-weight:bold"><?php echo($pname); ?></span><br>
                    <span class="sig_company_address"><?php echo($addr); ?></span><br>
                    <span class="sig_company_contact">Office <?php echo($phone); ?>
                    <?php echo($mobile<>'' ? ' | Mobile '.substr($mobile,0,3)."-".substr($mobile,3,3)."-".substr($mobile,6,4) : ''); ?>
                    <?php echo($fax<>'' ? ' | Fax '.substr($fax,0,3)."-".substr($fax,3,3)."-".substr($fax,6,4) : ''); ?>
                    </span><br>
                    <span class="sig_email"><a href="mailto:<?php echo($email); ?>"><?php echo($email); ?></a></span></p>
                    <p><span class="sig_company_name" style="font-weight:bold"><?php echo($company); ?></span>
                    <?php if ($web != '') { ?> | <a href="http://<?php echo($web); ?>"><?php echo($web); ?></a><?php } //endif ?>
                    </p>
                <?php // default display
						break;
					default:
				?>
                    <p><span class="sig_company_name" style="font-weight:bold"><?php echo($company); ?></span>
                    <?php if ($web != '') { ?> | <a href="http://<?php echo($web); ?>"><?php echo($web); ?></a><?php } //endif ?><br>
                    <span class="sig_company_address"><?php echo($addr); ?></span><br>
                    <span class="sig_company_contact">Office <?php echo($phone); ?>
                    <?php echo($mobile<>'' ? ' | Mobile '.substr($mobile,0,3)."-".substr($mobile,3,3)."-".substr($mobile,6,4) : ''); ?>
                    <?php echo($fax<>'' ? ' | Fax '.substr($fax,0,3)."-".substr($fax,3,3)."-".substr($fax,6,4) : ''); ?>
                    </span><br>
                    <span class="sig_email"><a href="mailto:<?php echo($email); ?>"><?php echo($email); ?></a></span></p>
				<?php } //end company switch ?>
                </div><!-- /#sig_company -->
            </div>
            </td>
            </tr>
         </tbody>
         </table>
    </div><!-- /#sig_template -->
    <br>
    <div id="disclosures" style="font:11px Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size-adjust: none; font-stretch: normal;">
         <p>
		 <?php if ($irs=='IRS') { // IRS disclosure?>
             <strong>DISCLAIMER:</strong> Any accounting, business or tax advice contained in this communication, including attachments and enclosures, is not intended as a thorough, in-depth analysis of specific issues, nor a substitute for a formal opinion, nor is it sufficient to avoid tax-related penalties. <br><br>
             <?php /*<strong>DISCLAIMER:</strong> Any accounting, business or tax advice contained in this communication, including attachments and enclosures, is not intended as a thorough, in-depth analysis of specific issues, nor a substitute for a formal opinion, nor is it sufficient to avoid tax-related penalties. If this electronic communication provides any U.S. tax advice, such advice is general in nature, does not necessarily address all the facts concerning your situation, and is not written nor intended to be used and cannot be used for the purpose of avoiding Federal tax penalties nor for promoting, marketing or recommending to another party, any tax related matters addressed herein.<br><br> */ ?>
         <?php } ?>
         <?php if ($_POST['selCompany']=="chm") { // CHM disclosure ?>
             <strong>NOTICE:</strong> The information contained in this transmission may contain privileged and confidential information - including patient information - protected by federal and state privacy laws. It is intended only for the use of the person(s) named above. If you are not the intended recipient, you are hereby notified that any review, dissemination, distribution, or duplication of this communication is strictly prohibited. If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.<br><br>  
			  <strong>WARNING:</strong> Although the sender has taken reasonable precautions, the recipient should check this email and any attachments for the presence of viruses. CHM does not accept any liability for breach of security, error or virus that may result from the transmission of this message.
         <?php } else { // general disclosure ?>
             <strong>NOTICE:</strong> This e-mail, including attachments and enclosures, is for the sole use of the intended recipient(s) and may contain information that is confidential and/or protected by legal privilege. Any unauthorized review, use, copy, disclosure or distribution of this e-mail is strictly prohibited. If you are not the intended recipient, please notify the sender immediately and destroy all copies of this e-mail.<br><br>  
			  <strong>WARNING:</strong> Although the sender has taken reasonable precautions, the recipient should check this email and any attachments for the presence of viruses. <?php echo(strtoupper($_POST['selCompany'])); ?> does not accept any liability for breach of security, error or virus that may result from the transmission of this message.
         <?php } ?>
         </p>
    </div><!-- /#disclosures -->
    <!-- End eMail signature template -->
    </div><!-- /#stamp -->
<?php } // end sigCustom display ?>
</div><!-- /#sigCustom -->

</div><!-- /.container -->
</section>

<!-- Instruction(s) Panel -->
<section id="instructions">
<div class="container">
    <h2>How to configure your eMail signature in...</h2>
    <div role="tabpanel">
    <!--- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="active"><a href="#outlook" role="tab" aria-controls="outlook" data-toggle="tab">Outlook</a></li>
        <li><a href="#owa" role="tab" aria-controls="owa" data-toggle="tab">Outlook Web App (OWA)</a></li>
        <li><a href="#ios" role="tab" aria-controls="ios" data-toggle="tab">iPhone/iPad</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
    	<div role="tabpanel" class="tab-pane fade in active" id="outlook">
            <ol>
                <li>Click the customized eMail signature to select and copy <em>(Ctrl + C)</em></li>
                <li>In Outlook, open a new email</li>
                <li>Click on the <strong>Signature</strong> icon, select <strong><u>S</u>ignatures...</strong></li>
                <li>Click on the <strong><u>N</u>ew</strong> button and set a name for the signature file</li>
                <li>Paste <em>(Ctrl + V)</em>  in the <strong>Edi<u>t</u> Signature</strong> box</li>
                <li>Click on the <strong><u>S</u>ave</strong> button</li>
                <li>Under the <strong>Choose default signature</strong> section, select the appropriate signature file for <strong>New <u>m</u>essages</strong>. Click <strong>OK</strong> to finalize.</li>
            </ol>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="owa">
            <ol>
                <li>Click the customized eMail signature to select and copy <em>(Ctrl + C)</em></li>
                <li>In OWA, go to <em>Options</em> &gt; <em>See All Options...</em></li>
                <li>Select <strong>Settings</strong>; select <strong>Mail</strong> (if not already selected)</li>
                <li>Paste <em>(Ctrl + V)</em>  in the <strong>E-Mail Signature</strong> box</li>
                <li>Click on the <strong>Save</strong> button</li>
            </ol>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="ios">
            <ol>
                <li>Create the signature on the device itself</li>
                <li>Select and copy the eMail signature</li>
                <li>Go to <strong>Settings</strong> &gt; <strong>Mail, Contacts, Calendars</strong>. Scroll and select <strong>Signature</strong></li>
                <li>Paste the signature</li>
                <li>To keep the proper formatting...
                	<ol>
                    <li><strong>On an iPhone</strong>: Grip the phone firmly with one hand and gently shake the phone until you see the <em>Undo Typing</em> dialog box; click <strong>undo</strong></li>
                    <li><strong>On an iPad</strong>: Click the number keypad (via the on-screen virtual keyboard) and then the <strong>undo</strong> button</li>
                    </ol>
                </li>
            </ol>
         </div>
    </div>
    </div><!-- /tabpanel -->
</div><!-- /.container -->
</section>

<!-- Footer -->
<footer>
<div class="container" id="footer">
    <p>&copy; Copyright 2015 - <?php echo(date("Y")); ?> | JES Holdings, LLC</p>
    <p>This eMail Signature web app is designed for use by employees of JES Holdings and affiliate companies.</p>
</div><!-- /.container #footer --> 
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Placeholdher JavaScript (for IE9) --> 
<script src="js/placeholders.min.js"></script> 

<script type="text/javascript">
// how-to panel(s)
$(document).ready(function() { 
    $("#myTab a").click(function(e) {
    	e.preventDefault();
    	$(this).tab('show');
    });
});

// copy to clipboard
function select_all(el) {
	if (typeof window.getSelection != "undefined" && typeof document.createRange != "undefined") {
		var range = document.createRange();
		range.selectNodeContents(el);
		var sel = window.getSelection();
		sel.removeAllRanges();
		sel.addRange(range);
	} else if (typeof document.selection != "undefined" && typeof document.body.createTextRange != "undefined") {
		var textRange = document.body.createTextRange();
		textRange.moveToElementText(el);
		textRange.select();
	}
}

// Hide/Show "extra" info
$(document).ready(function(){
	// init obj arrays
	var fwmObj = ["#fwmProp","#fwmPhone","#fwmAddr","#fwmCity","#fwmState","#fwmZip"];

	// func - reset corp_office
	jQuery.fn.resetCorp = function() {
		$("#corp_office").hide("fast");
		$("#selOffice").removeAttr("required");
		$("#selOffice").find('option[value=""]').attr("selected",true);
	}
	
	// func - reset chm_office
	jQuery.fn.resetCHM = function() {
		$("#chm_office").hide("fast");
		$("#selCenter").removeAttr("required");
		$("#selCenter").find('option[value=""]').attr("selected",true);
		$("#cbCHM").attr("checked",false);
	}
	
	// func - reset fwm_office
	jQuery.fn.resetFWM = function() {
		$("#fwm_office").hide("fast");
		$.each(fwmObj, function(i,v) {
			$(v).val('');
			$(v).removeAttr("required");
		});
	}

	// hide/show on page load/reload
	switch ($("#selCompany").val()) {
		case 'jes':
		case 'aep':
		case 'fwc':
		case 'dev':
		case 'metro':
		case 'fwmCorp':
		case 'primeCorp':
			$("#fwm_office").css("display","none");
			$("#chm_office").css("display","none");
			break;
		case 'chm':
			$("#fwm_office").css("display","none");
			$("#corp_office").css("display","none");
			break;
		case 'fwm':
		case 'prime':
			$("#corp_office").css("display","none");
			$("#chm_office").css("display","none");
			break;
		default:
			$("#fwm_office").css("display","none");
			$("#corp_office").css("display","none");
			$("#chm_office").css("display","none");
	}
	
	// hide/show changes...
	$("#selCompany").change(function(){
		var id = $(this).find("option:selected").attr("value");
 
 		switch (id){
		case 'chm':
			// init chm_office
			$("#chm_office").show("fast");	
			$("#selCenter").attr("required","required");	
			// reset fwm_office
			$("#fwm_office").resetFWM();
			// reset corp_office
			$("#corp_office").resetCorp();
			break;
		case 'fwm':
		case 'prime':
			// init fwm_office
			$("#fwm_office").show("fast");
			$.each(fwmObj, function(i,v) {
				$(v).attr("required","required");
			});
			// reset chm_office
			$("#chm_office").resetCHM();
			// reset corp_office
			$("#corp_office").resetCorp();
			break;
		default:
			// init corp_office
			$("#corp_office").show("fast");	
			$("#selOffice").attr("required","required");	
			// reset chm_office
			$("#chm_office").resetCHM();
			// reset fwm_office
			$("#fwm_office").resetFWM();
		}
	});
});	

</script>

</body>
</html>
