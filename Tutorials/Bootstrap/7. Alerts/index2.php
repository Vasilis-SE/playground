<!DOCTYPE html>
<html>
	<head>
		<title> Bootstrap Tutorials 2 - Alerts  </title>
		
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<script type="text/javascript">
	
		//Document ready event start
		$(document).ready(function() {
		
			$("#submitFormBtn").click(function() {

				var gender = "";
				if($("#manGender").is(":checked")) { gender = "male"; } else { gender = "female"; }

				var terms = false;
				if($("#rulesAcc").is(":checked")) { terms = true; }

				var data = {"username": $("#username").val(),
							"password": $("#password").val(),
							"repass": $("#rePassword").val(),
							"gender": gender,
							"emailName": $("#emailName").val(),
							"emailService": $("#emailService").val(),
							"terms": terms };
					
				$.ajax({
					type:"POST",
					url:"validationScript.php",
					data: data,
					success:function(data) {

						var i;
						for(i = 0; i < data.length; i++) {
							var jsonObj = data[i];
							var jsonDataVal = jsonObj["value"];
							if(jsonDataVal["status"] == "1") {
								var resultContent = $('#resultArea').html();
								$('#resultArea').html(resultContent + jsonDataVal["message"]);
							} 

						}	
					}
				});
				
			}); //Submit button end.
		
		
		}); //End of document ready
	
	</script>
	<style>
		table {
			border-spacing: 10px;
			border-collapse: separate;
		}
	</style>
	<body style="font-family: Verdana; background: lightgrey;">

		<div class="container" style="background: white; border-radius: 5px;">
			<h2> Alerts With Form Example </h2>
			<p> The below is an example of bootstrap alerts used in a validation form which uses 
				ajax code to call php scripts </p>
			<hr>
			
			<table class="">
				<tr>
					<td> Username : </td>
				</tr>
				<tr>
					<td> <input type="text" id="username" /> </td>
				</tr>
				<tr>
					<td> Password : </td>
				</tr>
				<tr>
					<td> <input type="password" id="password" /> </td>
				</tr>
				<tr>
					<td> Retype Password : </td>
				</tr>
				<tr>
					<td> <input type="password" id="rePassword" /> </td>
				</tr>
				<tr>
					<td> Male : </td>
					<td> <input type="radio" id="manGender" name="sex" checked="checked" /> </td>
				</tr>
				<tr>
					<td> Female : </td>
					<td> <input type="radio" id="femaleGender" name="sex" /> </td>
				</tr>
				<tr>
					<td> Email : </td>
				</tr>
				<tr>
					<td> <input type="text" id="emailName" /> </td>
					<td> @ </td>
					<td> 
						<select id="emailService">
							<option value="yahoo.com"> yahoo.com </option>
							<option value="yahoo.gr"> yahoo.gr </option>
							<option value="gmail.com"> gmail.com </option>
							<option value="gmail.gr"> gmail.gr </option>
							<option value="hotmail.com"> hotmail.com </option>
							<option value="hotmail.gr"> hotmail.gr </option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Terms & Conditions : </td>
					<td> <input type="checkBox" id="rulesAcc" /> </td>
				</tr>
				<tr>
					<td> <button id="submitFormBtn"> Submit </button> </td>
				</tr>
			</table>

			<div id="resultArea"> </div>

			<br/>
		</div>
		
	</body>
</html>
