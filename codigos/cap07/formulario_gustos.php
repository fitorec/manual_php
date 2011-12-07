<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>
<body>
	<?php
	if( isset( $_GET['gustos']) && isset( $_GET['nombre']) )
	{
		echo "<h2>Tu nombre {$_GET['nombre']}</h2>\n";
		echo "<h3>tus gustos</h3>\n";
		echo '<ol>';
		foreach ($_GET['gustos'] as $gusto) 
			echo "<li>{$gusto}</li>";
		echo '</ol>';
	}else{
		$gustos=array('futball','programación','novelas','comer');
		sort( $gustos );
	?>
	<form action="formulario_gustos.php" method="get">
		Nombre <input type="text" name="nombre" value="Escribe tu nombre"/><br>
		<h2>gustos</h2>
		<?php
		foreach ($gustos as $gusto) 
			echo "<input type='checkbox' name='gustos[]' value='{$gusto}' /> {$gusto}<br>\n";
		?>
		<input type="submit" value="Enviar gustos" />
	</form>
	<?}
	?>
</body>

</html>

