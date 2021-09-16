<?php 
	
	$valor = 2000;
	$codigo = 1;
	

		switch ($codigo) {
		case 1:
			$valor = $valor + ($valor * 10/100);
			echo "O valor mais o acrescimo resulta em " . $valor;
			break;
		case 3:
			$valor = $valor + ($valor * 25/100);
			echo $valor;
			break;
		case 4:
			$valor = $valor + ($valor * 30/100);
			echo $valor;
			break;
		case 8:
			$valor = $valor + ($valor + 50/100);
			echo $valor;
			break;
		default:
		echo "Nenhum código foi selecionado";
		break;
		}
	
	
	

 ?>