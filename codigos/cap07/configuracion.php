<?php
	//die( '<pre>'.print_r($_GET,true).'</pre>' );
	if( isset($_GET['lengua']) && isset($_GET['nickname']) ){
		setcookie('lengua',$_GET['lengua']);
		setcookie('nickname',$_GET['nickname']);
		header('location: ver_configuracion.php');
	}
	/*elseif( isset($_COOKIE['lengua']) && isset($_COOKIE['nickname']) )
		header('location: ver_configuracion.php');*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Configurar</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<form action="configuracion.php" method="GET">
		<b>Nick</b>
		<input type="text" name="nickname" /><br />
		<strong>Lengua</strong>
		<select name="lengua">
			<option value="español">español</option>
			<option value="ingles">ingles</option>
			<option value="frances">Frances</option>
		</select>
		<input type="submit" value="Enviar" />
	</form>
</head>
<body>
	
</body>

</html>
