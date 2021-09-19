<?php 

	$salhora = 12;
    $qtaula = 240;
	$inss;

	$salbruto = $qtaula *  $salhora;
        
        $inss = $salbruto * (9 / 100);

	$salliq = $salbruto - $inss;
	echo "O salário líquido do colaborador é de " . $salliq . " reais";

 ?>