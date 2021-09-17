<?php 

	$horas = 220;
	$salhora = 9;
	$numdep = 3;
	$inss;
	$ir;

	$salbruto = $horas *  $salhora + (50*$numdep);

	if ($salbruto <= 1000) {
		$inss = $salbruto * (8.5 / 100);
		echo "O desconto INSS do salário é de " . $inss . " reais.";
	}
	elseif ($salbruto > 1000) {
		$inss = $salbruto * (9 / 100);
		echo "O desconto INSS do salário é de " . $inss . " reais.";
		$ir = $salbruto * (7 / 100);
		echo "O desconto IR do salário é de " . $ir . " reais.";
	}

	if ($salbruto <= 500) {
		$ir = 0;
		echo "O desconto IR do salário é de " . $ir . " reais.";
	}
	elseif ($salbruto <= 1000) {
		$ir = $salbruto * (5 / 100);
		echo "O desconto IR do salário é de " . $ir . " reais.";
	}

	$salliq = $salbruto - $inss - $ir;
	echo "O salário líquido do colaborador é de " . $salliq . " reais";

 ?>