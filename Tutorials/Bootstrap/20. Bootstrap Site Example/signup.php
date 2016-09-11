<!DOCTYPE html>
<html>
	<head>
		</title> AgencyZ | Sign Up </title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/bootstrap/site_utils/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="/bootstrap/site_utils/jquery.min.js"></script>
		<script src="/bootstrap/javascript/jquery-ui.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="/bootstrap/site_utils/bootstrap.min.js"></script>
		
		<!-- CSS Libraries -->
		<link rel="stylesheet" href="/bootstrap/css/structure.css">
		<link rel="stylesheet" href="/bootstrap/css/generalStyle.css">
		<link rel="stylesheet" href="/bootstrap/css/font-awesome.min.css">
		<link rel="stylesheet" href="/bootstrap/css/jquery-ui.css">
		
		<script>
			$( function() {
				//Date picker functionalities
				$( "#bDateField" ).datepicker({
					minDate: new Date(2014, 11, 25),
					maxDate: new Date(new Date().getFullYear() + 1,  new Date().getMonth(), new Date().getDay())
				})
			} );
		</script>
		
	</head>
	<body>
		
		<!-- Page Wrapper -->
		<div class="container-fluid">
			<div id="headerArea"> 
				<?php include_once('inc.Header.php'); ?>
			</div>
			
			<!-- Main Area -->
			<div id="mainArea">
				
				<form method="POST" id="signupForm" name="signupForm" >
					<div class="form-group">
						<label for="usernameField">Username:</label>
						<input type="text" class="form-control" id="usernameField">
					</div>
					
					<div class="form-group">
						<label for="passwordField">Password:</label>
						<input type="password" class="form-control" id="passwordField">
					</div>
					
					<div class="form-group">
						<label for="rePasswordField">Retype Password:</label>
						<input type="password" class="form-control" id="rePasswordField">
					</div>
					
					<div class="form-group">
						<label for="emailName">Email:</label>
						<input type="text" class="form-control" id="emailName">
						<span> @ </span>
						<select id="emailProvider" class="form-control">
							<option value=""> gmail.com </option>
							<option value=""> yahoo.com </option>
							<option value=""> hotmail.com </option>
							<option value=""> outlook.com </option>
							<option value=""> gmail.gr </option>
							<option value=""> yahoo.gr </option>
							<option value=""> hotmail.gr </option>
							<option value=""> outlook.gr </option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="bDateField">Birth Date:</label>
						<input type="text" class="form-control" id="bDateField">
					</div>
					
					
				</form>
			</div>
			<!-- End Of Main Area -->
				
			<!-- Footer Area -->
			<div id="footerArea" style="width: 100%; position: inherited; left: 0; right: 0; 
				float: left;"> 
				
				<?php require_once('inc.Footer.php'); ?>
			</div>
			<!-- End Of Footer Area -->
			
		</div>
		<!-- End Of Page Wrapper -->
		
	</body>
</html>