<?php	

function sortearDezenas(){	
	//Array para guardar uma dezena com valor entre 1 e 60
	$dezenas = [];

	//Para cada índice, será sorteado um número
	for ($j=0; $j < 6; $j++) { 
		
		//Se o número não for repetido, será adicionado ao array de dezena
		while (true) {
			$numero = rand(1,60);

			if(!in_array($numero, $dezenas)){
				array_push($dezenas, $numero);
				break;
			}	
		}

	}
	//Os números serão organizados em ordem crescente
	sort($dezenas);

	//Retorna o array com as 6 dezenas
	return $dezenas;
}
