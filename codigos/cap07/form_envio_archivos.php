<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<?php
	if( isset( $_GET['envio']) ){
		echo '<pre>'.print_r($_GET,true).'</pre>';
		#echo '<pre>'.print_r($_FILES,true).'</pre>';
		#move_uploaded_file($_FILES['documento']['tmp_name'],'documento.md');
	}else{ ?>
<form action="form_envio_archivos.php" method="get">
	<input type='file' name='documento'>
	<input type="submit" name='envio' value="Enviar" />
</form>
<? } ?>
</body>

</html>
