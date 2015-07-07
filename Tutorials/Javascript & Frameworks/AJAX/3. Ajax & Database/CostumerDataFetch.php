<?php

	require 'CostumerDBConfig.php';

	$nameSelected = $_POST['name'];
	
	$query = "SELECT * FROM costemer WHERE (FirstName = '".$nameSelected."')";
	$result = mysql_query($query);

	$table = "<table id='tableData'> ";
	while($row = mysql_fetch_array($result)){
		$table .= "<tr> ";
			$table .= "<td class='tableTitle'> First Name : </td>";
			$table .= "<td> '".$row['FirstName']."' </td>";
		$table .= "</tr> ";
		
		$table .= "<tr>";
			$table .= "<td class='tableTitle'> Last Name : </td>";
			$table .= "<td> '".$row['LastName']."' </td>";
		$table .= "</tr>";
		
		$table .= "<tr>";
			$table .= "<td class='tableTitle'> Address : </td>";
			$table .= "<td> '".$row['Address']."' </td>";
		$table .= "</tr>";
		
		$table .= "<tr>";
			$table .= "<td class='tableTitle'> Telephone Number : </td>";
			$table .= "<td> '".$row['TelephoneNumber']."' </td>";
		$table .= "</tr>";
		
		$table .= "<tr>";
			$table .= "<td class='tableTitle'> Age : </td>";
			$table .= "<td> '".$row['Age']."' </td>";
		$table .= "</tr>";
		
	}
	$table .= "</table>";
	
	echo $table;

?>