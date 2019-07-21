<?php
	
	$name = $_POST['name'];
	
	$a[] = "Diana";
	$a[] = "Eva";
	$a[] = "Fiona";
	$a[] = "Raquel";
	$a[] = "Cindy";
	$a[] = "Doris";
	$a[] = "Eve";
	$a[] = "Nina";
	$a[] = "Ophelia";
	$a[] = "Evita";
	$a[] = "Sunniva";
	$a[] = "Tove";
	$a[] = "Unni";
	$a[] = "Violet";
	$a[] = "Liza";
	$a[] = "Elizabeth";
	$a[] = "Ellen";
	$a[] = "Wenche";
	$a[] = "Vicky";
	$a[] = "Anna";
	$a[] = "Brittany";
	$a[] = "Gunda";
	$a[] = "Hege";
	$a[] = "Inga";
	$a[] = "Johanna";
	$a[] = "Kitty";
	$a[] = "Linda";
	$a[] = "Cinderella";
	$a[] = "Petunia";
	$a[] = "Amanda";
	
	$nameToLower = strtolower($name);
	$len=strlen($nameToLower);
	$hint = "";
	if($name !== ""){
		foreach ($a as $nameGiven) {
			if(stristr($nameToLower, substr($nameGiven, 0, $len))){
				$hint = $nameGiven;
			}
		}
	}
	
	if($hint !== ""){
		echo $hint;
	}
	else{
		echo "no suggestions!";
	}

	
	
?>