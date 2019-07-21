<?php

	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$password = $_POST['password'];
	$repassword = $_POST['repass'];
	$emailAddress = $_POST['emailAddr'];
	$emailService = $_POST['emailServ'];
	$terms = $_POST['terms'];
	
	if($firstName == "" || $lastName == "" || $password == "" || $repassword == "" ||
	   $emailAddress == ""){
		echo "One or more fields are empty!";
	}
	else{
		if($terms == "off"){
			echo "You must accept the terms in order to submit the form!";
		}
		else{
			if($password != $repassword)
				echo "Password and Re Type Password mismatch!";
			else
				echo "Successfull Form Submition!";
		}
	}
	

?>