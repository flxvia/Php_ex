<?php 
	
	$senha = 2564;
	$var1 = 250;
	$var2 = 50;
	$div = $var1 / $var2;

	echo "Cadastre uma senha e informe dois valores!";

	if ($senha == 2564) {
		echo "<br/> Senha correta!";
		echo "<br/> A divisão do " . $var1 . " pelo " . $var2 . " é igual a " . $div;
	}
	else{
		echo "<br/> Erro!";

	}

 ?>