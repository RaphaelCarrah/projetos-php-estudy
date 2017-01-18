<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores ternarios</title>
</head>
<body>
	<?php 
		$n1 = 3;
		$n2 = 4;
		$calcular = "s";
		$soma = ($calcular == "s") ? ($n1+$n2):"Tudo bem, não irei calcular" ;
		echo $soma;
	 ?>
</body>
</html>