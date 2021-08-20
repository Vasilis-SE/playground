<!DOCTYPE html>
<html>
	<head>
		<title> Bootstrap Tutorials - Pagination & Pager </title>
		
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>

	<body style="font-family: Verdana; background: lightgrey;">

		<div class="container" style="background: white; border-radius: 5px;">
			<h2> File Uploader With Progress Bar </h2>
			<p> This is a simple example on how to use bootstrap progress bars in real code and 
			display to the user the progress of a task.</p>
			
			<!-- Form that calls itself after submittion-->
			<form action="#">
				<input type="file" name="fileField"> <br/>
				<button class="btn btn-sm-upload btn-info" type="submit"> Upload </button>
				<button class="btn btn-sm-cancel btn-danger" type="button"> Cancel </button>
				<br/>
				<div class="progress progress-striped active" style="display: none;">
					<div class="progress-bar" > </div>
				</div>

			</form>
			<br/><br/>
			<script>
				$(document).on('submit', 'form', function(e){
					e.preventDefault();
					$('.progress').css('display', 'block');
					//Get the whole form object in a variable.
					$form = $(this);
					
					UploadFileProcess($form);
				});
			
				//Method that handles the file submittion
				function UploadFileProcess($form) {
					
					$form.find('.progress-bar')
						.removeClass('progress-bar-success')
						.removeClass('progress-bar-danger');
						
					var formData = new FormData($form[0]); //form element.
					var request = new XMLHttpRequest();
					
					request.upload.addEventListener('progress', function(e) {
						var percent = Math.round(e.loaded / e.total * 100);
						$form.find('.progress-bar')
							.width(percent + '%')
							.html(percent + '%');
							
					});
					
					//The progress completed the load event.
					request.addEventListener('load', function(e){
						$form.find('.progress-bar')
							.addClass('progress-bar-success')
							.html('Upload Complete...');
							
					}); 
					
					//The progress cancelled the load event.
					$form.on('click', 'cancel', function(e) {
						request.abort();
						$form.find('.progress-bar')
							.addClass('progress-bar-danger')
							.removeClass('progress-bar-success')
							.html('Upload Canceled...');
					
					});

					request.open('post', 'server.php');
					request.send(formData);
				}
				
			</script>
			
		</div>
		
	</body>
</html>
