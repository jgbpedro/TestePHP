# Teste PHP
Teste para Monuv Câmeras em Nuvem

## Palpite da Mega sena

#### 1 - Criar uma função que retorne um array com 6 dezenas aleatórias entre 1 e 60, atentando que os números nunca se repitam e que estejam na ordem crescente.

Arquivo `Tarefa 1.php`:

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

Arquivo `Tarefa 2.php`:

```php
<!DOCTYPE html>
<html>
<head>
	<title>Tarefa 2</title>
</head>
<body>
	<?php require('Tarefa 1.php'); ?>

	<?php for ($num_apostas = 0; $num_apostas < 3; ++$num_apostas): ?>
		<?php $dezenas = sortearDezenas(); ?>


		<h3> Numeros sorteados: 
			<?php foreach ($dezenas as $dezena): ?>
				<?= $dezena ?>
			<?php endforeach ?>
		</h3>
		<table border="1">
			<?php for ($indice = 0; $indice < 60; ++$indice): ?>
				
				<?php if($indice % 10 == 0): ?>					
					<tr>
						<?php for ($coluna = 1; $coluna <= 10; ++$coluna): ?>
							<td 
								<?php if(in_array(($indice + $coluna), $dezenas)): ?>	
								style="color : #0000FF"
								<?php endif; ?>													
							>
							<?= $indice + $coluna ?>	
							</td>
						<?php endfor; ?>
					</tr>
				<?php endif; ?>		
			<?php endfor; ?>
		</table>

	<?php endfor; ?>
</body>
</html>
```

#### 3 - Criar uma simples classe que possa ler o conteúdo de um arquivo texto. Essa classe deverá conter um atributo privado que será usado para guardar o conteúdo do arquivo lido, um método para carregar o arquivo e outro para visualizar o atributo.

Arquivo `Tarefa 3.php`

```php
<?php	

class ArquivoTexto
{
	public function  __construct() {
        if (isset($_POST) && !empty($_POST)) {
        	$this->carregarArquivo();
        	$this->visualizarConteudo();
        }
    }

    //Atributo privado para guardar o conteudo
	private $conteudo;

	//Método para obter o conteudo
	public function getConteudo(){
		return $this->conteudo;
	}

	//Método para gravar o valor do conteúdo
	public function setConteudo($conteudo){
		$this->conteudo = $conteudo;
	}

	//Método para carregar o arquivo enviado pelo formulário e guardar no atributo privado $conteudo
	public function carregarArquivo(){
		$conteudo = file_get_contents($_FILES['ArquivoTexto']['tmp_name']);
		$this->setConteudo($conteudo);
	}

	//Método para visualizar o conteudo
	public function visualizarConteudo(){
		echo $this->getConteudo();
	}
}
```

#### 4 - Utilizando a classe criada acima, criar um form que solicite ao usuário um arquivo e que ao submeter seja visualizado o conteúdo.

Arquivo `Tarefas 4.php`

```php
<!DOCTYPE html>
<html>
<head>
	<title>
		Tarefa 4
	</title>

</head>
<body>
	
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="ArquivoTexto">
		<input type="submit" name="Enviar">
	</form>
	
	<!-- Após submeter o formulário, o conteudo será exibido -->
	<p>
		<?php	
			require("Tarefa 3.php");
			$text = new ArquivoTexto();
		?>
	</p>

</body>
</html>
```
