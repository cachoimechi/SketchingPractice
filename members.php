<?php
/***********************************************
File: members.php
Author: Adam Krone
Description: Homepage for registered members.
***********************************************/

	session_start();
	
	include "auth.inc.php";
	require "func.inc.php";
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sketching Practice | Members Area</title>
	<link href="style/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<nav>
	<div id="center_nav">
	  <div id="logo"></div>
	  <div id="tour"><a class="link" href="#"></a></div>
	  <div id="register"><a class="link" href="#"></a></div>
	  <div id="login"><a class="link" href="#"></a></div>
	</div>
</nav> <!-- End Nav -->
<div id="container">
	<div id="main">
		<?php echo "<h1>Welcome back, " . $_SESSION['username'] . "!</h1>"; ?>
		<p><a href="logout.php">Logout</a>
	</div>
</div> <!-- End Container -->
<footer>
    <div id="footer_container">
      <div id="copyright">
        <h2>Copyright &amp; Usage</h2>
        <p>This site and its content is <span class="span_white">&copy; 2012 Sketching Practice</span>, except where noted. All Rights Reserved.
        <p>Any redistribution or reproduction of part or all of the conents in any form is prohibited other than the following: 1) you may print or download to a local hard disk extracts for your personal and non-commercial use only 2) you may copy the content to individual third parties for their personal use, but only if you acknowledge this website (or the orignal author, as noted) to be the source of the material.
        <p>You may not, except with our express written permission, distrubute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.
      </div>
      <div id="about_footer">
        <h2>About Sketching Practice</h2>
        <p><span class="span_white">SketchingPractice.com</span> aims to end the monotony of sketching practice for the art, design, and architecture fields. We aim to build a community around a set of simple tools that can help you grow as creative individuals, while taking on the role of teacher/student in order to grow together.
        <p><span class="span_white">Adam Krone</span> is the creator of <span class="span_white">SketchingPractice.com</span>.
        <h2>About Adam</h2>
        <img src="img/self-portrait.jpg" id="about_img" />
        <p>Designer extrodinaire, Adam Krone can plug into a variety of roles, including web, graphic, and sound design, music composition, videography, photography, Rubik's Cube solving, and generally being awesome. Learn more about him at his <a href="http://adamkrone.com" target="_new">personal site</a>.
      </div>
    </div>
  </footer> <!-- End Footer -->
</body>
</html>