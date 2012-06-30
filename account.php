<?php
/***********************************************
File: members.php
Author: Adam Krone
Description: Homepage for registered members.
***********************************************/

	session_start();
	
	include "auth.inc.php";
	require "func.inc.php";
	require "class.inc.php";

	$user = new User();
	$info = $user->getUser($_SESSION['user_id']);
	
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
	  <a href="logout.php">Logout</a> <a href="account.php">Account</a> <a href="timer.php">Timer</a> <a href="members.php">Home</a>
	</div>
</nav> <!-- End Nav -->
<div id="container">
	<div id="main">
		<div id="content">
			<h1>Account Management</h1>
			<div id="forms">	
				<div id="user_info">
					<h2>User Information</h2>
					<p><strong>username:</strong> <?php echo $info['username']; ?></p>
					<p><strong>email:</strong> <?php echo $info['email']; ?></p>
				</div>
				<form id="change_email_form" class="form" action="change_email.php" method="post">
				
					<h4>Change Email</h4>
					
					<p>Email</p>
					<p><input type="text" name="email"></p>
					
					<p><input class="submit" type="submit" name="submit" value="Submit!"></p>
				
				</form>
				<form id="change_password_form" class="form" action="change_password.php" method="post">
							
					<h4>Change Password</h4>
					
					<p>Old Password</p>
					<p><input type="password" name="old_password"></p>
					
					<p>New Password</p>
					<p><input type="password" name="new_password"></p>
					
					<p>Repeat New Password</p>
					<p><input type="password" name="repeat_password"></p>
					
					<p><input class="submit" type="submit" name="submit" value="Submit!"></p>
				
				</form>	
			</div>
		</div>
		<div id="sidebar">
			<h2>Sidebar</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
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
</body>
</html>