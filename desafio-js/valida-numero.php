<!DOCTYPE html>
<?php 
	include "config.php";
	$num = $_POST['numero'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado - Seleção de Desenvolvedor de Software - Escribo</title>
</head>
<body>

	<?php 
				
		echo "Resultado do somatório de todos os valores inteiros divisíveis por 3 ou 5 que sejam inferiores ao
número passado: <b>".somaTotalInteiros($num)."</b>";

	?>

	<br><br>
	<a href="./">Clique para refazer</a>

</body>
</html>