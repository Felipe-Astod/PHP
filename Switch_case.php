<?php
	//1:carro  - 2:moto - 3:bicicleta - 4:navio - 5:avião

	$opc=6;	

	switch($opc) {
		case 1:
			echo"carro";
			break;
			
		case 2:
			echo"moto";
			break;
			
		case 3:
			echo"bicicleta";
			break;
			
		case 4:
			echo"navio";
			break;
			
		case 5:
			echo"avião";
			break;
			
		default:
			 echo"opção de transporte não existente";
			 break;
	}
	
	echo"<hr>";
	
	switch($opc) {
		case ( $opc <= 3 and $opc > 0):
			echo "transporte terestre";
			break;
			
		case 4:
			echo "transporte maritimo ";
			break;
			
		case 5:
			echo "transporte aereo ";
			break;
		
		default:
			 echo"vai a pé filho da puta";
			 break;
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

	