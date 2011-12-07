
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<style type="text/css" media="all">
		#content{
			width: 500px;
			margin: auto;
		}
		h3{
			color: #D32B06;
		}
	</style>
</head>

<body>
	<div id='content'>
<?php

function iniciar_pagina(){
	echo '<h3>Iniciando pagina<h3>';
}
function cerrar_sesion(){
	echo '<h3>Cerrando session<h3>';
}
function msg_error(){
	echo '<h3>Accion no definida<h3>';
}
$mapeo = array(
	'inicio' => 'iniciar_pagina',
	'fin' => 'cerrar_sesion',
);
	if(isset($_POST['accion'])){
		$accion = $_POST['accion'];
		if( isset($mapeo[$accion]))
			$mapeo[$accion]();
		else
			msg_error();
	}else{
?>
<form action='index.php' method='POST'>
	<select name="accion">
		<option value="inicio">inicio</option>
		<option value="fin">fin</option>
	</select>
	<input type='submit' value='Realizar'>
</form>
<?php 
}
?>
</div>
</body>
</html>
