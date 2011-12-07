<?php
	if( ! isset($_GET['URL']) );
	header("location: ${URL}");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Envio de datos</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<form action="form_escape.php" method="get">
	<input type="text" name="URL" value="http://localhost" />
	<input type="submit" value="Enviar" />
</form>
</body>
</html>

