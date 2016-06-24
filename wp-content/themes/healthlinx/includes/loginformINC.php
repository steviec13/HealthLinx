<?php
	/**
	* Job Seekers Login page
	* Custom theme for HealthLinx 
	* Created by Steven Castillo
	**/
	
	// Redirects for logging in and out, includes sitelock and login form
	$groupswithaccess="PUBLIC";
	// Login and logout pages are ignored
	$loginpage= "https://www.healthlinx.com/HUB/outcomes/outcomes.php";
	$logoutpage= "opportunities2";
	$loginredirect=2;
	//require_once($_SERVER['DOCUMENT_ROOT']."/slpw/sitelokpw.php");
?>
<section class="allContent">
<h1>Job Seekers Login</h1>

<?php siteloklogin(); ?>
 <?php if (!$slpublicaccess) { ?>
Currently logged in as:  <?php echo $slcustom1, ' ', $slname; ?>
 <?php } ?>
<?php if ($msg!="") print $msg; ?>
<br /> 
<form name="siteloklogin" action="/leadership-excellence/open-positions/" method="POST" onSubmit="return validatelogin()">
<?php siteloklogin(); ?>
<strong>Email address:</strong>
<input type="text" name="username" value="">
<strong>Password: </strong>
<input type="password" name="password" value="" >
<br />
<input type="Submit" name="login" value="Login" align="center">
</form>

<a href="javascript: void forgotpw()">Forgot your password?</a>

<?php if (!$slpublicaccess) { ?>
Welcome, <?php echo $slcustom1; ?>!</span></strong><span class="style2"><br>
Click <a href="/includes/opportunities2.php" class="pagenavText"><strong><b>HERE</b></strong></a> to search available <b>Permanent Career Opportunities</b>, or call one of our Leadership Consultants. (Note: not all opportunities are listed on our site.)
To learn about our available <strong>Transitional Leadership</strong> opportunities, please contact one of our Transitional Leadership consultants.
<?php if (sl_isactivememberof("LRC")){  ?>
	Access our <b>Leader Resource Center</b> <a href="../LRC/index.php" class="pagenavText"><strong>HERE</strong></a>!</span></div>
<?php } ?>
    To view and change your Leader Profile details, click 
    <a href="leader_profile.php" class="pagenavText"><strong>HERE</strong></a>
<?php } ?>
New members get started now:
<a href="../../register/"><strong>Click here to create your leader profile!</strong></a>
</section>