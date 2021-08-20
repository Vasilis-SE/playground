<?php
	
	class Account {
	
		public $check;
	
		//Constructor
		function __construct() {
			$this->check = false;
		}
	
		//Method that checks if any of the form fields are empty.
		public function FieldIsEmptyCheck($formData) {
			
			$checkFlag = false;
			if($formData['usernameField']	== "" || $formData['passwordField'] == "" || 
				$formData['rePasswordField'] == "" || $formData['emailName'] == "" || 
				$formData['bDateField'] == "" || $formData['numberField'] == "") {
				
				$checkFlag = true;
				$this->check = true;
			}
			            
			if(!isset($formData['sexMField']) && !isset($formData['sexWField'])) {
				$checkFlag = true;
				$this->check = true;
			}

			$message = "";
			if($checkFlag) {
				$message = "<div class='alert alert-danger'>
					<strong> Error, </strong> One or more fields are not filled! Please fill all the form data
					and then re submit the form.
				</div>";
				$this->check = true;
			}
			
			return $message;
		}
		
		//Method that checks if the password field and the retype password field mismatch.
		public function PasswordFieldsMismatchCheck($formData) {
		
			$message = "";
			if($formData['passwordField'] != $formData['rePasswordField']) {
				$message = "<div class='alert alert-danger'>
					<strong> Error, </strong> `Password` field and `Retype Password` field mismatch! Please make
					sure that the two fields are identical.
				</div>";
				$this->check = true;
			}
						
			return $message;
		}
	
		//Method that checks if the terms are agreed.
		public function TermsAgreedCheck($formData) {
			
			$message = "";			
			if(!isset($formData['termsField'])) {
				$message = "<div class='alert alert-danger'>
					<strong> Error, </strong> You must agree on the term and condition of this web page in order
					to continue with your account creation.
				</div>";
				$this->check = true;
			}
		
			return $message;
		}
		
		//Method that checks if the appropriate fields contain the right character length.
		public function FieldsLengthCheck($formData) {
		
			$message = "";		
			if(strlen($formData['usernameField']) < 8) {
				$message = "<div class='alert alert-danger'>
					<strong> Error, </strong> The `Username` field must contain at least 8 characters in order
					to be accepted!
				</div>";
				$this->check = true;
			}
			
			if(strlen($formData['passwordField']) < 8) {
				$message .= "<div class='alert alert-danger'>
					<strong> Error, </strong> The `Password` field must contain at least 8 characters in order
					to be accepted!
				</div>";
				$this->check = true;
			}
			
			return $message;
		}
		
	
	}









?>