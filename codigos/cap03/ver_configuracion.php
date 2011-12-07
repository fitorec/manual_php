<?php
	if( !isset($_COOKIE['lengua']) || !isset($_COOKIE['nickname']) )
		header('location: configuracion.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Su configuracion <?php echo $_COOKIE['nickname']; ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<h1>Su configuracion <?php echo $_COOKIE['nickname']; ?></h1>
	<strong>Lengua</strong><?php echo $_COOKIE['lengua']; ?><br>
	<pre><?php print_r($_COOKIE); ?></pre>
</body>

</html>
