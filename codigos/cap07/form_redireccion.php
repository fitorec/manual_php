<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Redirecion</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php

	if( isset($_GET['URL']) && preg_match('%^https?://[a-z0-9]*%',$_GET['URL']) )
		header("location: {$_GET['URL']}");
?>
<form action="form_redireccion.php" method="GET">
	<input type="text" name="URL" value="http://localhost" />
	<input type="submit" value="Enviar" />
</form>
</body>
</html>

