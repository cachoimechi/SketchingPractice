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
	<link href="slider/slider.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav>
	<div id="center_nav">
	  <div id="logo"></div>
	  <a href="logout.php">Logout</a> <a href="account.php">Account</a> <a href="timer.php">Timer</a> <a href="members.php">Home</a>
	</div>
</nav> <!-- End Nav -->
<div id="container">
	<div id="main">
		<div id="content">
			<?php echo "<h1>Welcome back, " . $_SESSION['username'] . "!</h1>"; ?>
			<p>Your homepage has been customized with news and information related to your interests. To update or make changes to these or
				any of your user settings, manage your account <a href="account.php">here</a>.</p>
			<!--Begin Slider-->
		<a id="arrowLeft" href="#"></a>
    	<a id="arrowRight" href="#"></a>
		<div id="sliderWrap">
			<ul id="slider">
				<li class="slider_slide">
					<iframe width="500" height="284" src="http://www.youtube.com/embed/Lgg8ebwk4MQ" frameborder="0" allowfullscreen></iframe>
				</li>
				<li class="slider_slide">
					<iframe width="500" height="284" src="http://www.youtube.com/embed/M2p_ZxhXii0" frameborder="0" allowfullscreen></iframe>
				</li>
				<li class="slider_slide">
					<iframe width="500" height="284" src="http://www.youtube.com/embed/Kbd5A6wHoLo" frameborder="0" allowfullscreen></iframe>
				</li>
			</ul>
		</div>
		<!--End Slider-->
			<h2>Content 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<h2>Content 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div id="sidebar">
				<h2>Sidebar Content 1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<hr>
				<h2>Sidebar Content 2</h2>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
	</div>
</div> <!-- End Container -->
 <footer>
    <div id="footer_container">
      <div id="about_footer">
        <h2>About Sketching Practice</h2>
        <p><span class="span_white">SketchingPractice.com</span> aims to end the monotony of sketching practice for the art, design, and architecture fields. We aim to build a community around a set of simple tools that can help you grow as creative individuals, while taking on the role of teacher/student in order to grow together.
        <p><span class="span_white">Adam Krone</span> is the creator of <span class="span_white">SketchingPractice.com</span>.
        <a href="" class="social_media" id="facebook">Facebook</a><a href="" class="social_media" id="twitter">Twitter</a><a href="" class="social_media" id="youtube">YouTube</a><a href="" class="social_media" id="rss">RSS</a>
      </div>
      <div id="copyright">
        <h2>About Adam</h2>
        <img src="img/self-portrait.jpg" id="about_img" />
        <p>Designer extrodinaire, Adam Krone can plug into a variety of roles, including web, graphic, and sound design, music composition, videography, photography, Rubik's Cube solving, and generally being awesome. Learn more about him at his <a href="http://adamkrone.com" target="_new">personal site</a>.
        <h2>Copyright &amp; Usage</h2>
        <p>This site and its content is <span class="span_white">&copy; 2012 Sketching Practice</span>, except where noted. All Rights Reserved.
      </div>
    </div>
  </footer> <!-- End Footer -->
<!--Scripts-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="slider/slider.js"></script>
</body>
</html>