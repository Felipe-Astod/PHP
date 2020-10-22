<?php
	
	//variaveis
	$vnome="felipe";
	$vnum=20;
	$vnum2=1999;
	$soma=0;
	
	//constantes
	define("cnome","felipe");
	define("ver", PHP_VERSION);
	define("dir",__DIR__);
	
	
	echo "nome: $vnome<br/>";
	
	$vnome="chiquim";
	echo "nome: $vnome<br/>";
	// chamando por concatenação
	
	$vnome="felipe";
	echo "o nome é ".$vnome."<br/>";
	
	$soma=10+20;
	
	echo "soma: $soma<hr/>";
	
	
	echo"constante cnome:" .cnome."<br/>";
	
	// constante 	FILE
	echo "o caminho do arquivo é ".__FILE__."<br/>";
	
	echo "Versão do php: ".ver."<br/>";
	
	echo "nome do diretorio ".dir."<br/>";
	
	echo "versão do SO: ".PHP_OS."<br/>";
	
	echo "numero da linha: ".__LINE__."<br/>";


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

	