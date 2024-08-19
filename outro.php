<?php 	
		echo "Digite um número indepedente, sendo as opções 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12. </br>Sendo essa a ordem das músicas na partitura do menu do Ocarina of Time </br></br></br>";
		$num = 0;
		switch ($num) {
			case '1': echo "Sua escolha é Zelda Lullaby";
				break;
			case '2': echo "Sua escolha é Epona's Song";
				break;
			case '3': echo "Sua escolha é Saria's Song";
				break;
			case '4': echo "Sua escolha é Sun Song";
				break;
			case '5': echo "Sua escolha é Song of Time";
				break;
			case '6': echo "Sua escolha é Song of Storms";
				break;
			case '7': echo "Sua escolha é Minuet of Forest";
				break;
			case '8': echo "Sua escolha é Bolero of Fire";
				break;
			case '9': echo "Sua escolha é Serenade of Water";
				break;
			case '10': echo "Sua escolha é Nocturne of Shadow";
				break;
			case '11': echo "Sua escolha é Requiem of Spirits";
				break;
			case '12': echo "Sua escolha é Prelude of Light";
				break;
			default: echo "Majora's também existe";
				break; 
		}
?>