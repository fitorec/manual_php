<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Envio de datos</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script language="Javascript"  type="text/javascript">
		function validar(){
			alert('empezando la validación');
			alert( document.getElementById('email').value );
		}
	</script>
</head>
<body>
<?
	if( isset($_GET['email']) ){
		if( preg_match('%^[_a-z0-9.]*@[a-z0-9.]*%', $_GET['email']) )
			echo 'correo valido: '.$_GET['email'];
	}else{?>
<form action="validacion_js_php.php" method="get">
	Email:
	<input type="text" name="email" id='email' value="escribe_tu_email" />
	<input type="submit" value="Enviar" onclick='validar()' />
</form>
<? } ?>
</body>
</html>
