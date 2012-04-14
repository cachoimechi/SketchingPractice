<?php

/***********************
Classes
***********************/

	//USER MANAGEMENT
	class User {

		//Login
		function login($username, $password) {

			//sanitize strings
			$username = sanitize($username);
			$password = md5(sanitize($password));

			//return values
			$nouser = "<h3>The username you specified does not exist!</h3>";
			$nomatch = "<h3>Incorrect password.</h3>";
			$success = "<h3>You have been logged in.</h3><p>Welcome back, $username!";

			//query db
			include "db.inc.php";
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$result = $mydb->query($sql);
			$row = $result->fetch_assoc();

			//check if user exists
			if ( $result->num_rows == 0 ) {

				$output = redirect("index.php");
				return $nouser . $output;

			//check if passwords match
			} else if ( $row['password'] != $password ) {

				$output = redirect("index.php");
				return $nomatch . $output;

			//setup session info
			} else {

				session_start();

				$_SESSION['username'] = $username;
				$_SESSION['user_id'] = $row['user_id'];
				
				$output = redirect("members.php");
				return $success . $output;

			}

			$result->close();
			$mydb->close();

		}

		//Logout
		function logout() {
		
			$_SESSION['username'] = '';
		
			session_destroy();
			
			$output = redirect("index.php");
			
			return "<h3>You have been successfully logged out.</h3><div class=\"padding\">" . $output;
		
		}

		//Create User
		function create($username, $password, $email) {
		
			//sanitize strings
			$username = sanitize($username);
			$password = sanitize($password);
			$email = sanitize($email);
			
			//encrypt password
			$password = md5($password);
			
			//return values
			$success = "<h3>User created successfully!</h3>";
			$failure = "<h3>Error: Please try again later.</h3><div class=\"padding\">";
			$used = "<h3>That user name is already being used.</h3><div class=\"padding\">";
			
			//query db
			include "db.inc.php";
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$result = $mydb->query($sql);
			
			//check if user exists
			if ( $result->num_rows != 0 ) {
				
				return $used . redirect("index.php");
			
			//setup user
			} else {
			
				$sql = "INSERT INTO users (username, password, email)
				VALUES ('$username', '$password', '$email')";
						
				//error handling
				if ($mydb->query($sql) == TRUE) {
				
					return $success;
				
				} else {
				
					return $failure . redirect("index.php");
				
				}
			
			}
			
			$mydb->close();
		
		}
	}