<!DOCTYPE html>
<html>
	<head>
		<title> AgencyZ | Home </title>
		
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/bootstrap/site_utils/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="/bootstrap/site_utils/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="/bootstrap/site_utils/bootstrap.min.js"></script>

		<!-- CSS Libraries -->
		<link rel="stylesheet" href="/bootstrap/css/structure.css">
		<link rel="stylesheet" href="/bootstrap/css/generalStyle.css">
		<link rel="stylesheet" href="/bootstrap/css/font-awesome.min.css">
		
	</head>
	<body style="font-family: Verdana;">

		<!-- Carousel Display -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			
			<div class="carousel-inner" role="listbox" style="box-shadow: 0px 2px 5px #888888;">
				<div id="screener"></div>
				
				<div class="item active">
					<img src="/bootstrap/images/bg1.jpg" />
				</div>                                   
														 
				<div class="item">                       
					<img src="/bootstrap/images/bg2.jpg" />
				</div>                                   
														 
				<div class="item">                       
					<img src="/bootstrap/images/bg3.jpg" />
				</div>                                   
														 
				<div class="item">                       
					<img src="/bootstrap/images/bg4.jpg" />
				</div>
				
			</div>
		</div> <!-- End of carousel -->

		<!-- Page wrapper -->
		<div class="container-fluid" style="padding: 0px;">
			
			<div id="headerArea"> 
				<?php include_once('inc.Header.php'); ?>
			</div>
			
			<div id="mainArea">
				<div style="width: 100%; left: 0; float: left; right: 0; margin-top: 15%;">
					<p style="font-size: 30px; padding: 10px;"> Find The Best Destination For Your Hollydays </p>
				</div>
				
				
				<div style="width: 100%; height: 400px; left: 0; float: left; right: 0; background: #82d6fc;">
				</div>
				
				
				<div style="width: 100%; height: 300px; left: 0; float: left; right: 0;">
				</div>
				
				<div style="width: 100%; height: 400px; left: 0; float: left; right: 0; background: #b3ffb3;">
				</div>
			</div>
			
			
			<div id="footerArea" style="width: 100%; position: inherited; left: 0; right: 0; 
				float: left;"> 
				
				<?php require_once('inc.Footer.php'); ?>
			</div>
			
		</div> <!-- End Wrapper -->
	</body>
</html>
