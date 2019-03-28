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
