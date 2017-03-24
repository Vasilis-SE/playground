<?php
	echo "Length : ".$_SERVER['CONTENT_LENGTH'];
	
	$tmp_file = $_FILES['fileField']['tmp_name'];
	$fileName = $_FILES['fileField']['name'];

	move_uploaded_file($tmp_file, 'Uploads/'.$fileName);
?>
