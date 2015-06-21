<?php
	
	require 'CostumerDBConfig.php';
	
	$query = "SELECT * FROM costemer";
	$result = mysql_query($query);
	
	$options = "<select id='dropDownList'> ";
	while($row = mysql_fetch_array($result)){
		$options .= "<option value='".$row['FirstName']."'>".$row['FirstName']."</option>";
	}
	$options .= "</select>";
	
	echo $options;
	
?>