<?php
	function mostrarMensaje(
		$msg='Mensaje vacio',
		$tag="<h3>%s</h3>"
	){
		printf($tag,$msg);
	}
	mostrarMensaje('hola');
	mostrarMensaje(null,'<h1>%s</h1>');
?>
