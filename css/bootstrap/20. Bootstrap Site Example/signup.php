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
					minDate: new Date(2016, 0, 1),
					maxDate: new Date(new Date().getFullYear(),  new Date().getMonth() + 1, new Date().getDay())
				})
				
				$(".expandTerms").click(function() {
					
					if($("#expandArrow").is(":visible")) {
						$("#collapseArrow").show();
						$("#expandArrow").hide();
						$("#termsWindow").slideToggle( "slow", function() {});
					}
					else {
						$("#collapseArrow").hide();
						$("#expandArrow").show();
						$("#termsWindow").slideToggle( "slow", function() {});
					}
				});
				
				$("#signupForm").submit(function(e) {
					e.preventDefault();
					var values = $(this).serialize();

					$.ajax({ url: 'php/createAccount.php',
						data: values,
						type: 'POST',
						success: function(output) {
							$("#resultArea").html("");
							$("#resultArea").html(output);
						}
					});
					
				});
				
			});
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
				
				<div style="height: 100%; width: 70%; margin: 0 auto; margin-top: 10%;">
					<form id="signupForm" name="signupForm" >
						<div class="form-group">
							<label for="usernameField">Username:</label>
							<input type="text" class="form-control" name="usernameField" id="usernameField">
						</div>
						
						<div class="form-group">
							<label for="passwordField">Password:</label>
							<input type="password" class="form-control" name="passwordField" id="passwordField">
						</div>
				
						<div class="form-group">
							<label for="rePasswordField">Retype Password:</label>
							<input type="password" class="form-control" name="rePasswordField" id="rePasswordField">
						</div>
						
						<div class="form-group">
							<label for="emailName">Email:</label>
							<div style="width: 100%;">
								<input type="text" class="form-control" name="emailName" id="emailName" style="width: 46%; float: left;">
								&nbsp <span style="float: left; padding: 5px;"> @ </span> &nbsp
								<select name="emailProvider" id="emailProvider" class="form-control" style="width: 49%; float: left;">
									<option value="gmail.com"> gmail.com </option>
									<option value="yahoo.com"> yahoo.com </option>
									<option value="hotmail.com"> hotmail.com </option>
									<option value="outlook.com"> outlook.com </option>
									<option value="gmail.gr"> gmail.gr </option>
									<option value="yahoo.gr"> yahoo.gr </option>
									<option value="hotmail.gr"> hotmail.gr </option>
									<option value="outlook.gr"> outlook.gr </option>
								</select>
							</div>
						</div>
						<br/>
						<div class="form-group">
							<label for="bDateField">Birth Date:</label>
							<input name="bDateField" type="text" class="form-control" id="bDateField">
						</div>
					
						<div class="form-group">
							<label for="sexField" style="float: left;">Sex:</label> <br/>

							<label>
								Male
								<input type="radio" id="sexField" name="sexMField" />
							</label> &nbsp &nbsp
							<label>
								Female
								<input type="radio" id="sexField" name="sexWField"/> 
							</label> 
							
						</div>
						
						<div class="form-group">
							<label for="numberField">Phone Number:</label>
							<input type="number" class="form-control" name="numberField" id="numberField">
						</div>
		 				
						<div class="form-group">
							<label for="termsField">Term & Conditions</label>
							<input type="checkbox" class="" name="termsField" id="termsField">
							
							<span id="expandArrow" class="expandTerms glyphicon glyphicon-triangle-bottom"> </span>
							<span id="collapseArrow" class="expandTerms glyphicon glyphicon-triangle-top" style="display: none;"> </span>
							
							<div id="termsWindow" style="width: 80%; margin: 0 auto; display: none;">
								<?php include_once('php/articlesCenter.php'); echo $articleObj["terms"]; ?>
							</div>
						</div>
						<button class="btn btn-primary"> Submit </button>
						
					</form>
				</div>
				
				<div id="resultArea" style="height: 100%; width: 70%; margin: 0 auto; margin-top: 3%;"> 
				</div>

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