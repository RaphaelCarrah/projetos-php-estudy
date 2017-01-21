	<?php 
		$nasc = $_GET["nasc"];
		$idade = date("Y") - $nasc;
		if($idade>=18){
			$d = "você pode dirigir";
			$v = "você pode votar";
		}
		else{
			if($idade>=16 && $idade<18){
			$v = "você pode votar, mas é opcional";
			$d = "você não pode dirigir";
			}
			else{
			$v = "você pode não pode votar";
			$d = "você não pode dirigir";				
			}

			
		}
		echo "Com essa idade $d e $v"
	 ?>