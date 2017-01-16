<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Imprimindo dados na tela PHP</title>
</head>
<body>
<?php 
	$name = "Raphael";
	$lastn = "Carrah";
	$namec = $name." ".$lastn;
	$age = 21;
	$email = "raphaelscarrah95@gmail.com";
 ?>
	<h1>Usuario</h1>
	<ul>
		<li>Nome:  <?php echo $namec ?> </li>
		<li>Idade: <?php echo $age ?></li>
		<li>Email: <?php echo $email ?></li>
	</ul>
</body>
</html>