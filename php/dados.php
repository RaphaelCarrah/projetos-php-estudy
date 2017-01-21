<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo "Média Calculada" ?></title>
	<link rel="stylesheet" href="../css/main.css">
	</style>
</head>
<body>
<div class="container">
<?php 
	$nota1 = $_GET["nota1"];
	$nota2 = $_GET["nota2"];
	$nota3 = $_GET["nota3"];
	$m = ($nota1 + $nota2 + $nota3)/3;
	$m = number_format($m,1);
	$info = ($m >= 6)?"<h1>Sua média foi $m <br/>Parabéns!</h1>":"<h1>Sua media foi $m você não passou </h1>";
	echo $info;
 ?>

 <hr>
<input type="button" class="btn" value="Voltar" onClick="history.go(-1)"> 
</div>	
</body>
</html>
