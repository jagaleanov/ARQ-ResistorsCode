<?php

//Valor inicial
$resistance = 0;

if(isset($_POST['submit']) && ($_POST['band1'] != "") && ($_POST['band2'] != "") && ($_POST['band3'] != "") && ($_POST['band4'] != ""))
{
	//tabla de colores banda 1 y 2
	$lisColors = array(
		"Black" => "0",
		"Brown" => "1",
		"Red" => "2",
		"Orange" => "3",
		"Yellow" => "4",
		"Green" => "5",
		"Blue" => "6",
		"Violet" => "7",
		"Grey" => "8",
		"White" => "9",
	);
	
	//tabla de colores banda 3
	$lisMultiply = array(
		"Black" => "",
		"Brown" => "0",
		"Red" => "00",
		"Orange" => "000",
		"Yellow" => "0000",
		"Green" => "00000",
		"Blue" => "000000",
		"Violet" => "0000000",
		"Grey" => "00000000",
		"White" => "000000000",
	);
	
	//tabla de colores banda 4
	$lisTolerance = array(
		"Gold" => 5,
		"Silver" => 10,
		"None" => 0
	);
	
	//calculo de la resistencia en ohmios
	$resistance = $lisColors[$_POST['band1']].$lisColors[$_POST['band2']].$lisMultiply[$_POST['band3']];
	
	//compresion del dato en gigas, kilos y megas
	if($resistance > 1000000000)
	{
		$resistance = $resistance / 1000000000 ;
		$unit = "Giga Ohms";
	}
	else if($resistance > 1000000)
	{
		$resistance = $resistance / 1000000 ;
		$unit = "Mega Ohms";
	}
	else if($resistance > 1000)
	{
		$resistance = $resistance / 1000 ;
		$unit = "Kilo Ohms";
	}
	else 
	{
		$unit = "Ohms";
	}
	
	
	//Cáclculo de la tolerancia
	$tolerance = $lisTolerance[$_POST['band4']];
	$toleranceTotal = ($tolerance/100) * $resistance;
	
	
	
	
	
}
?>

<!--Formulario HTML-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla de resistencias</title>
</head>

<body>
	<form action="" method="post">
		<p>Ingrese el color de la primera banda</p>
		<!--Banda 1-->
		<select name="band1">
			<option value="" ></option>
			<option value="Black" <?=isset($_POST['band1']) && $_POST['band1'] == "Black" ? "selected" : null ?>>Negro</option>
			<option value="Brown" <?=isset($_POST['band1']) && $_POST['band1'] == "Brown" ? "selected" : null ?>>Café</option>
			<option value="Red" <?=isset($_POST['band1']) && $_POST['band1'] == "Red" ? "selected" : null ?>>Rojo</option>
			<option value="Orange" <?=isset($_POST['band1']) && $_POST['band1'] == "Orange" ? "selected" : null ?>>Naranja</option>
			<option value="Yellow" <?=isset($_POST['band1']) && $_POST['band1'] == "Yellow" ? "selected" : null ?>>Amarillo</option>
			<option value="Green" <?=isset($_POST['band1']) && $_POST['band1'] == "Green" ? "selected" : null ?>>Verde</option>
			<option value="Blue" <?=isset($_POST['band1']) && $_POST['band1'] == "Blue" ? "selected" : null ?>>Azul</option>
			<option value="Violet" <?=isset($_POST['band1']) && $_POST['band1'] == "Violet" ? "selected" : null ?>>Violeta</option>
			<option value="Grey" <?=isset($_POST['band1']) && $_POST['band1'] == "Grey" ? "selected" : null ?>>Grís</option>
			<option value="White" <?=isset($_POST['band1']) && $_POST['band1'] == "White" ? "selected" : null ?>>Blanco</option>
		</select>
		
		<p>Ingrese el color de la segunda banda</p>
		<!--Banda 2-->
		<select name="band2">
			<option value="" ></option>
			<option value="Black" <?=isset($_POST['band2']) && $_POST['band2'] == "Black" ? "selected" : null ?>>Negro</option>
			<option value="Brown" <?=isset($_POST['band2']) && $_POST['band2'] == "Brown" ? "selected" : null ?>>Café</option>
			<option value="Red" <?=isset($_POST['band2']) && $_POST['band2'] == "Red" ? "selected" : null ?>>Rojo</option>
			<option value="Orange" <?=isset($_POST['band2']) && $_POST['band2'] == "Orange" ? "selected" : null ?>>Naranja</option>
			<option value="Yellow" <?=isset($_POST['band2']) && $_POST['band2'] == "Yellow" ? "selected" : null ?>>Amarillo</option>
			<option value="Green" <?=isset($_POST['band2']) && $_POST['band2'] == "Green" ? "selected" : null ?>>Verde</option>
			<option value="Blue" <?=isset($_POST['band2']) && $_POST['band2'] == "Blue" ? "selected" : null ?>>Azul</option>
			<option value="Violet" <?=isset($_POST['band2']) && $_POST['band2'] == "Violet" ? "selected" : null ?>>Violeta</option>
			<option value="Grey" <?=isset($_POST['band2']) && $_POST['band2'] == "Grey" ? "selected" : null ?>>Grís</option>
			<option value="White" <?=isset($_POST['band2']) && $_POST['band2'] == "White" ? "selected" : null ?>>Blanco</option>
		</select>
		
		
		<p>Ingrese el color de la tercera banda</p>
		<!--Banda 3-->
		<select name="band3">
			<option value="" ></option>
			<option value="Black" <?=isset($_POST['band3']) && $_POST['band3'] == "Black" ? "selected" : null ?>>Negro</option>
			<option value="Brown" <?=isset($_POST['band3']) && $_POST['band3'] == "Brown" ? "selected" : null ?>>Café</option>
			<option value="Red" <?=isset($_POST['band3']) && $_POST['band3'] == "Red" ? "selected" : null ?>>Rojo</option>
			<option value="Orange" <?=isset($_POST['band3']) && $_POST['band3'] == "Orange" ? "selected" : null ?>>Naranja</option>
			<option value="Yellow" <?=isset($_POST['band3']) && $_POST['band3'] == "Yellow" ? "selected" : null ?>>Amarillo</option>
			<option value="Green" <?=isset($_POST['band3']) && $_POST['band3'] == "Green" ? "selected" : null ?>>Verde</option>
			<option value="Blue" <?=isset($_POST['band3']) && $_POST['band3'] == "Blue" ? "selected" : null ?>>Azul</option>
			<option value="Violet" <?=isset($_POST['band3']) && $_POST['band3'] == "Violet" ? "selected" : null ?>>Violeta</option>
			<option value="Grey" <?=isset($_POST['band3']) && $_POST['band3'] == "Grey" ? "selected" : null ?>>Grís</option>
			<option value="White" <?=isset($_POST['band3']) && $_POST['band3'] == "White" ? "selected" : null ?>>Blanco</option>
		</select>
		
		<p>Ingrese el color de la banda de tolerancia</p>
		<!--Banda 4-->
		<select name="band4">
			<option value="" ></option>
			<option value="Gold" <?=isset($_POST['band4']) && $_POST['band4'] == "Gold" ? "selected" : null ?>>Dorado</option>
			<option value="Silver" <?=isset($_POST['band4']) && $_POST['band4'] == "Silver" ? "selected" : null ?>>Plateado</option>
			<option value="None" <?=isset($_POST['band4']) && $_POST['band4'] == "None" ? "selected" : null ?>>Sin color</option>
		</select>
		
		<input type="submit" name="submit" value="Calcular">
		<!-- impresión de resultados -->
		<?php
		if($resistance > 0)
		{
			?>
				<p>
					La resistencia es de <?=$resistance?> <?=$unit?> y su tolerancia es de <?=$tolerance?>%, es decir varia entre <?=$resistance?> <?=$unit?> y <?=$resistance + $toleranceTotal?> <?=$unit?>
				</p>
			<?php
		}
		?>
		
	</form>
</body>
</html>