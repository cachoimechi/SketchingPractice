<?php
/***********************************************
File: func.inc.php
Author: Adam Krone
Description: Includes all functions used in the
SketchingPractice.com site.
***********************************************/

	//Sanitize Strings
	function sanitize($string) {
		$sanitized = trim(strip_tags(addslashes($string)));
		return $sanitized;
	}
	
	//Redirect
	function redirect($url) {
	
		header("refresh:2;url=$url");
		
		return "<p>You are being redirected.  If your browser doesn't support this,
		<a href=\"$url\">click here</a> to continue.</p></div>";
	
	}