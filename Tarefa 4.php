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


