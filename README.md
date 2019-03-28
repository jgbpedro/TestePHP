# Teste PHP
Teste para Monuv Câmeras em Nuvem

## Palpite da Megasena

#### 1 - Criar uma função que retorne um array com 6 dezenas aleatórias entre 1 e 60, atentando que os números nunca se repitam e que estejam na ordem crescente.

```php
function sortearDezenas(){	
	//Array para guardar uma dezena com valor entre 1 e 60
	$dezenas = [];

	//Para cada índice, será sorteado um número
	for ($indice = 0; $indice < 6; $indice++) { 
		
		//Se o número não for repetido, será adicionado ao array de dezenas
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
```


#### 2 - Utilizando a função acima e pensando num volante da Megasena, criar um layout html contendo 3 tabelas com 10 colunas e 6 linhas numeradas com as 60 dezenas e destacando com a cor azul(#0000FF) os números sorteados. Para isso, deverão constar 3 apostas não repetidas. Há várias formas de resolver, porém, essa atividade não será avaliada pelo layout e sim pela lógica e organização do código.

#### 3 - Criar uma simples classe que possa ler o conteúdo de um arquivo texto. Essa classe deverá conter um atributo privado que será usado para guardar o conteúdo do arquivo lido, um método para carregar o arquivo e outro para visualizar o atributo.

#### 4 - Utilizando a classe criada acima, criar um form que solicite ao usuário um arquivo e que ao submeter seja visualizado o conteúdo.
