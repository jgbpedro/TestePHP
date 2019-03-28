<!DOCTYPE html>
<html>
<head>
	<title>Tarefa 2</title>
</head>
<body>
	<?php 
		require('Tarefa 1.php');
	?>

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
