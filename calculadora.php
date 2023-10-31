<?php
$operando1 = $_POST['operando1'];
	$operando2 = $_POST['operando2'];
	$operador = $_POST['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Calculadora</title>
	</head>
	<body>
		<table border=2 align="center">
			<tr>
				<th>Num 1</th>
				<th>Operador</th>
				<th>Num 2</th>
			</tr>
			<tr>
				<td align="center"><?php echo $_POST['operando1']; ?></td>
				<td align="center"><?php echo $_POST['operador']; ?></td>
				<td align="center"><?php echo $_POST['operando2']; ?></td>
			</tr>
			<tr>
				<th colspan=2><?php echo "La resultado es: "; ?></th>
				<th><?php echo $solucion; ?></th>
			</tr>
		</table>
	</body>
	</html>
	

