<?php

	$transp=array("carro", "moto", "bicicleta", "onibus ", "avião", "navio");

	foreach ($transp as $veiculo) {
		echo "$veiculo<br/>"; 
		if($veiculo =="bicicleta"){
			break;
		}
	}
echo"<hr><br/>";


foreach($transp as $veiculo){
	if($veiculo =="bicicleta"){
			echo "bicicleta esta na lista de veiculos<br/>";
			break;
		}
}


foreach($transp as $veiculo){
	if($veiculo =="avião"){
			echo "avião esta na lista de veiculos<br/>";
			break;
		}
}

foreach($transp as $veiculo){
	if($veiculo =="trem"){
			echo "trem esta na lista de veiculos<br/>";
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