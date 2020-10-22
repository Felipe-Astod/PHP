<?php

	$vet=array("mouse", "teclado", "monitor", "memoria", "sair", "microfone", "impressora");
	$tam=count($vet);
	$i=0;
	
	
	echo"usando break no while<br/><br/>";
	$i=0;
	while($i <$tam){
		
		echo "$vet[$i]<br/>";
		$i++;
		if($vet[$i]=="sair"){
			break;
		}
	}
	
	
	echo"usando break no Dowhile<br/><br/>";
	$i=0;
	do{
		echo "$vet[$i]<br/>";
		$i++;
		if($vet[$i]=="sair"){
			break;
		}
		
	}while($i<$tam);
	
	
	echo "<hr/>";
	echo"usando break no for<br/><br/>";
	for($i=0; $i<$tam; $i++){
		echo "$vet[$i]<br/>";
			if($vet[$i]=="sair"){
			break;
		}	
	}


echo "<hr/>";
	echo"usando break no foreacht<br/><br/>";
	foreach($vet as $pc){
		echo "$pc<br/>";
			if($pc =="sair"){
			break;
		}	
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

	