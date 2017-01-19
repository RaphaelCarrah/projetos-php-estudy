<?php 
	$nota1 = $_GET["nota1"];
	$nota2 = $_GET["nota2"];
	$nota3 = $_GET["nota3"];
	$m = ($nota1 + $nota2 + $nota3)/3;
	$info = ($m > 6)?"Sua média foi $m, parabéns!":"Sua media foi $m você não passou";
	echo $info;
 ?>
