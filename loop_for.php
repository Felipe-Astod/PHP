<?php

	$i=0;
	$tam=5;
	$vet=array($tam);
	
	for($i=0; $i < $tam; $i++) {
	
		echo"valor de i: $i<br>";
	}
	
	for ($i=0; $i <240; $i++) {
		echo "-";
	}
	
	for($i=0; $i < $tam; $i++) {
		$vet[$i]=$i*2;
	}
	
	for($i=0; $i <$tam; $i++) {
		echo"Valor da posição $i: $vet[$i]<br/>";
	}
?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title> </title>
</head>

<body>

	<p> </p>
	
	
	
</body>

</html>

	