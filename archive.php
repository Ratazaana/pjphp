<?php 
	print "Usando print pR exibir na tela <br/ >";
	$data= "20 de Agosto de 2020";
	$salario= 850.00;
	$cargo= "Aprendiz";

	echo "Arquivo criado em $data";

	printf("Salário mínino: R$%.2f <br/ >", $salario);

	$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);
	echo $texto;
?>