<?php

	require('Account.php');
	 	  	    
	$formData = array("usernameField"	=> $_POST["usernameField"], 
					  "passwordField"	=> $_POST["passwordField"], 
					  "rePasswordField"	=> $_POST["rePasswordField"], 
					  "emailName"		=> $_POST["emailName"], 
					  "emailProvider"	=> $_POST["emailProvider"], 
					  "bDateField"		=> $_POST["bDateField"],  
					  "numberField"		=> $_POST["numberField"]);
					  
	if(isset($_POST["sexMField"])) { $formData["sexMField"] = $_POST["sexMField"]; }
	if(isset($_POST["sexWField"])) { $formData["sexWField"] = $_POST["sexWField"]; }
	if(isset($_POST["termsField"])) { $formData["termsField"] = $_POST["termsField"]; }

	$accountObj = new Account();
	$result = "";
	$result = $accountObj->FieldIsEmptyCheck($formData);
	$result .= $accountObj->PasswordFieldsMismatchCheck($formData);
	$result .= $accountObj->TermsAgreedCheck($formData);
	$result .= $accountObj->FieldsLengthCheck($formData);

	if($result == "") {
		$result = "<div class='alert alert-success'>
			<strong> Success!, </strong> Your account has been successfully created!
			</div>";
	}
	
	echo $result;
	
?>