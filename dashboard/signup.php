<?php
require "db/DB.php";
if(isset($_POST["signup"])){
	
	//post variables
	$password = $_POST["password1"];
	$email  = $_POST["email"];
    $password1 = $_POST["password1"];
	$password2 = $_POST["password2"];
	$first_name = $_POST["firstname"];
	$last_name = $_POST["lastname"];
	$username = $first_name.'-'.$last_name;
	
	//varibles to validate the password
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);
	
	//Check the strength of the password
	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
		die('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
	}else{
		//Strong password.';
		$user_exist = user_exist($username);
		if(user_exist($username)=="ok"){
			die("The Username is taken");
		}
		else if(email_exist($email)=="ok"){
			die("The email is already registered with another user");
		}
		else{
			if($password1 == $password2){ //password confirmation
			$password = $password1;
			$create_user = create_user($email,$password,$first_name,$last_name,$username);
      
			   if($create_user =="ok"){
				   header("location:../index.html#popup3");
			   }
			   else{
					die("".$create_user);
			   }
			} 
			else{
					die("Passwords do not match.");
			}
		}
	}
}
?> 
