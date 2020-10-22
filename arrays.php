<?php

	//array
	
	$vet=array(7);
	$vet2=array("nome"=> "felipe", "cidade"=>"são jose", "curso"=>"PHP");
	
	
	$mat=array(
		array("carro", 65000),
		array("carro2", 35000),
		array("carro3", 50000)
	);
	
	$i= 6;
	
	$vet[0]= "carro";
	$vet[1]= "aviao";
	$vet[2]= "navio";
	$vet[3]= "moto";
	$vet[4]= "onibus";
	$vet[5]= 123213;
	$vet[6]= $vet2["nome"];
	
	echo "elemento de indice $i: ".$vet[$i]."<hr/>";
	
	echo "nome: ".$vet2["nome"]."<br/>cidade:".$vet2["cidade"]."<br/>curso: ".$vet2["curso"]."<hr/>"; 
	
	echo "carro A ".$mat[0][0]."<br/> Valor: ".$mat[0][1]."<br/>";
	echo "carro b ".$mat[1][0]."<br/> Valor: ".$mat[1][1]."<br/>";
	echo "carro c ".$mat[2][0]."<br/> Valor: ".$mat[2][1]."<br/>";


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

	