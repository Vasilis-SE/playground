<html>
	<head>
		<title> Ajax Tutorials - Ajax & Database Interaction </title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<style type="text/css">
			#wrapper{
				width: 600px;
				height: 500px;
				
				border: 3px;
				border-style: solid;
				border-radius: 10px;
			}
			#listPart{
				width: 600px;
				height: 100px;
				
				background: lightgrey;
				border-radius: 5px;
				float: top;
			}
			#resultPart{
				width: 600px;
				height: 400px;
				
				background: lightgreen;
				border-radius: 5px;
			}
			#dropDownList{
				padding-top: 3px;
				padding-bottom: 3px;
				padding-left: 12px;
				padding-right: 12px;
				margin-top: 30px;
				margin-left: 10px;
				
				font-size: 16px;
			}
			#listField{
				font-size: 20px;
				margin-left: 20px;
			}
			#tableData{
				font-size: 19px;
			    border-spacing: 10px;
				padding: 10px;
			}
			.tableTitle{
				text-decoration: underline;
			}
		</style>
		
		<script type="text/javascript">
			$(document).ready(function(){
				
				$("#dropDownList").change(function(){
					var nameSelected = $("#dropDownList").val();
					
					var xmlhttp;

					if (window.XMLHttpRequest){
						// code for IE7+, Firefox, Chrome, Opera, Safari
  						xmlhttp=new XMLHttpRequest();
  					}
					else{
						// code for IE6, IE5
  						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  					}

  					xmlhttp.onreadystatechange=function(){
  						if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
							$("#result").html(xmlhttp.responseText);
    					}
  					}

  					xmlhttp.open("POST", "/ajax/CostumerDataFetch.php", true);
					xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xmlhttp.send("name="+nameSelected);
				});
			});
		</script>
		
	</head>
	<body>
		<div id="wrapper">
			<div id="listPart">
				<span id="listField">
					Choose one of the names on the list : 
					<?php require 'CostumersFetch.php'; ?>
				</span>
				
			</div>
			
			<div id="resultPart">
				<span id="result"> </span>
			</div>
		</div>
	</body>
</html>