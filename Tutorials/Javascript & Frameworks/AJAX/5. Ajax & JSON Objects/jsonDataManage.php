<?php

	if(isset($_POST)) {
		
		$result = DataFieldsEmpty();
		if($result != ""){
			$data = array('message' => $result, 'color' => 0);
			die(json_encode($data));
		}
		else{
			if($_POST['password'] != $_POST['rePassword']){
				$result = "Password and Repeat Password fields mismatch!";
				$data = array('message' => $result, 'color' => 0);
				die(json_encode($data));
			}
			else{
				$result = "Successful form submition";
				$data = array('message' => $result, 'color' => 1);
				die(json_encode($data));
			}
		}
	}
	else{
		$result = "Form hasn't been submitted!";
		$data = array('message' => $result, 'color' => 0);
		die(json_encode($data));
	}

	function DataFieldsEmpty(){
		$message = "";
		
		if(empty($_POST['firstName']))
			$message .= "First Name field is empty!<br/>";
		if(empty($_POST['lastName']))
			$message .= "Last Name field is empty!<br/>";
		if(empty($_POST['password']))
			$message .= "Password field is empty!<br/>";
		if(empty($_POST['rePassword']))
			$message .= "Repeat Password field is empty!<br/>";
			
		return $message;
	}
?>