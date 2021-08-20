<?php


	$jsonResp[] = CheckIfAnyFieldIsEmpty();
	$jsonResp[] = UsernameFieldLengthCheck();
	$jsonResp[] = PasswordFieldLengthCheck();
	$jsonResp[] = PasswordFieldsMismatchCheck();
	$jsonResp[] = CheckIfTermsAreChecked();
	
	$jsonResp[] = SuccessfulSubmission($jsonResp);
	
	header('Content-Type: application/json');
	echo json_encode($jsonResp);

	//Function that checks if any of the form fields are empty.
	function CheckIfAnyFieldIsEmpty() {

		$jsonResp = array("value" => "");
		if($_POST["username"] == "" || $_POST["password"] == "" || $_POST["repass"] == "" ||
			$_POST["emailName"] == "" || $_POST["emailService"] == "" ) {
			
			$jsonResp["value"] = array("status" => "1", "message" => "<div class='alert alert-danger fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Error occurred!,</strong> One or more fields of the form are empty! 
				Please fill all the necessary fields...</div>");
		}
		
		return $jsonResp;
	}
	
	//Function that checks the length of username field
	function UsernameFieldLengthCheck() {
		
		$jsonResp = array("value" => "");
		if(strlen($_POST["username"]) < 5) {
			$jsonResp["value"] = array ("status" => "1", "message" => "<div class='alert alert-danger fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Error occurred!,</strong> The `Username` field must contain at least 
				5 characters in total!</div>");
		}
		return $jsonResp;
	}
	
	//Function that checks the length of password field
	function PasswordFieldLengthCheck() {
		
		$jsonResp = array("value" => "");
		if(strlen($_POST["password"]) < 5) {
			$jsonResp["value"] = array ("status" => "1", "message" => "<div class='alert alert-danger fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Error occurred!,</strong> The `Password` field must contain at least 
				5 characters in total!</div>");
		}
		return $jsonResp;
	}
	
	//Function that checks if the password field and the retyped password fields mismatch.
	function PasswordFieldsMismatchCheck() {
		
		$jsonResp = array("value" => "");
		if($_POST["password"] != $_POST["repass"]) {
			$jsonResp["value"] = array ("status" => "1", "message" => "<div class='alert alert-danger fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Error occurred!,</strong> The `Password` field and the `Retype Password` 
				field mismatch!</div>");
		}
		return $jsonResp;
	}
	
	//Check if terms and conditions are checked.
	function CheckIfTermsAreChecked() {
	
		$jsonResp = array("value" => "");
		if($_POST["terms"] == "false") {
			$jsonResp["value"] = array ("status" => "1", "message" => "<div class='alert alert-danger fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Error occurred!,</strong> The `Terms & Conditions` check box is not checked!
				in order to proceed you need to accept the terms and conditions...</div>");
		}
		return $jsonResp;
	}
	
	//Method that checks if there are any errors during submission, if there aren't then abs
	//success message is displayed.
	function SuccessfulSubmission($jsonResp) {
	
		$resp = array("value" => "");
		$errorFlag = false;
		for($i = 0; $i < count($jsonResp); $i++){
			$jsonObj = $jsonResp[$i];
			$jsonVal = $jsonObj["value"];

			if($jsonVal != "") {
				$errorFlag = true;
			}
		}
		
		if(!$errorFlag) {
			$resp["value"] = array ("status" => "1", "message" => "<div class='alert alert-success fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Success!,</strong> The form has been successfully submitted!</div>");
			return $resp;
		}
		else {
			return $jsonResp;
		}
	
	}
	

?>