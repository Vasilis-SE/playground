<?php 
	
	require('database.config.php');
	
	$query = "SELECT * FROM game";
	$result = mysql_query($query);
	
	$table_data = "<table id='gameTable'>";
	$rndNum = rand(1, 3);
	while($row = mysql_fetch_array($result)){
		
		
		if($row["AI"] == $rndNum){
			$table_data .= "<tr>";
			$table_data .= "<td> Title : </td>";
			$table_data .= "<td> ".$row['gameTitle']." </td>";
			$table_data .= "<td rowspan='4'> <img id='gameImg' src='/ajax/Images/".$row["gameImageUrl"]."'> </td>";
			$table_data .= "</tr>";
			
			$table_data .= "<tr>";
			$table_data .= "<td> Release : </td>";
			$table_data .= "<td> ".$row['gameRelease']." </td>";
			$table_data .= "</tr>";
			
			$table_data .= "<tr>";
			$table_data .= "<td> Company : </td>";
			$table_data .= "<td> ".$row['gameCompany']." </td>";
			$table_data .= "</tr>";
			
			$table_data .= "<tr>";
			$table_data .= "<td> Genre : </td>";
			$table_data .= "<td> ".$row['gameGenre']." </td>";
			$table_data .= "</tr>";	
		}
	}
	$table_data .= "</table>";
	
	echo $table_data;
	
?>