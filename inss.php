<?php 	
		$sal = 4200.00;
		if ($sal<1500.01) {
			echo "$sal";
			$sal = $sal * 0.9;
			echo "$sal";
		}
		else if ($sal > 1500.00 && $sal < 1600.01) {
			echo "Seu salário bruto é de $sal</br>";
			$sal = $sal * 0.85;
			echo "Seu desconto é de 15%</br>E seu salario que receberá é de $sal";
		}else if ($sal > 1600.00 &&  $sal < 1800.01) {
			echo "Seu salário bruto é de $sal</br>";
			$sal = $sal * 0.8;
			echo "Seu desconto é de 20%</br>E seu salario que receberá é de $sal";
		}else if ($sal > 1800.00 &&  $sal < 2500.01) {
			echo "Seu salário bruto é de $sal</br>";
			$sal = $sal * 0.725;
			echo "Seu desconto é de 27,5%</br>E seu salario que receberá é de $sal";
		}else {
			echo "Você recebe muito, ou é um vagabundo (formalmente escrevendo, não trabalha)";
		}
?>