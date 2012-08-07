<?php
//Add the MXit library
require_once("mxit_core.php");

//We need to get the show image bool before any HTML headers is sent
$show_images = showImages();
?>

<html>
<head>
	<title>MXit Mobi Library Examples</title>
	
	<!-- To clear the conversation screen on the device with every new page the following META can be added
		to the header of each page that needs to clear the screen. -->
	<?php print $clear_screen; ?>
</head>
<body>

	 <h1>MXit Mobi Library Examples</h1>
	 
	 <!-- * See if images should be shown to visiting device
	 	 * Function: showImages()
		 * Cookies will be saved for a user, this will prevent the file to be read each time from disc
		 * The function will check if the visiting device is a MXit user, if the visiting device is not a MXit user 
		 * it will return true as default
		 * The function returns a bool
		 * true = images can be shown
		 * false = images should not be shown 
	-->

	<h2><b>Image test</b></h2>
	Text above image<br />
	
	<!-- Lets see if we need to show the image to the user or not -->
	<?php if($show_images){
		print '<img src="./images/M_handyicon.png" width="88" height="88" /> <br />';
	}?>

	Text below image

	<br /><br />
	
	<!-- *Get information about the visiting MXit user 
		* Function: getUserDetails()
		* Returns a object with the following:
		* MXit-Login
        * Device-User-Agent
        * MXit-Contact
        * MXit-Nick
		* MXit-Id-R
		* MXit-Location
		* MXit-Profile	
		* Ua-Pixels
	-->
	
	<h2>MXit User Details</h2>
	
	<?php $user_details = getUserDetails();

		print '<b>Login ID:</b> ' . $user_details->login . '<br />';
        print '<b>Device User Agent:</b> ' . $user_details->useragent . '<br />';
        print '<b>Contact:</b> ' . $user_details->contact . '<br />';
        print '<b>Nickname:</b> ' . $user_details->nick . '<br />';
		print '<b>MXit ID:</b> ' . $user_details->mxitid . '<br />';
		print '<b>Location:</b> ' . $user_details->locations . '<br />';
		print '<b>Profile:</b> ' . $user_details->profile . '<br />';
		print '<b>Screen size:</b> ' . $user_details->pixels . '<br />';
	?>
	
	<br /><br />
	
	<!-- For any content that the user needs to download we need to tell the MXit application to launch the
		download in the phone's default wap browser 
		The $launch_in_browser can be added to the anchor link-->
	
	<h2>Launch Download In Phone Browser</h2>
	This example will download a image via the devices default wap browser<br />
	<a href="./images/M_handyicon.png" <?php print $launch_in_browser?>>Download</a> image
	
	<br /><br />
	
	<!-- To resize a image dynamically according to the users screen size
		The following example will size the image 50% according to the users screen size -->
		
	<h2>Resize Image Dynamically</h2>	
	<!-- Get the screen size of the visiting device -->
	<?php 
		$user_details = getUserDetails();
		$screen_size = $user_details->pixels;
		
		if($show_images){	
			$width = floor(0.50*(substr($screen_size, 0, 3)));
			$height = floor(0.50*(substr($screen_size, 0, 3)));
			print '<img src="./images/M_handyicon.png" width="' . $width . '" height="' . $height . '" />';
		}
	?>
</body>
</html>

	
