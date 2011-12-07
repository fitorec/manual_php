<?php
if(!isset($_GET["errno"])){
	header("Location: http://localhost");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>..:: ERROR! ::..</title>
</head>
<body>
<?php
function accionError($type){
	switch($type){
		case "400":
			//acción error
		break;
		case "401":
			//acción error
		break;
		case "402":
			//acción error
		break;
		case "403":
			//acción error
		break;
		case "404":
			//acción error
		break;
		case "407":
			//acción error
		break;
		case "415":
			//acción error
		break;
		case "500":
			//acción error
		break;
		case "501":
			//acción error
		break;
		case "502":
			//acción error
		break;
		case "503":
			//acción error
	}
	echo "Error:".$type;
}
$datos = array(	"400"=>"Solicitud mala.",
				"401"=>"Sin autorizaci&oacute;n. ",
				"402"=>"Sin autorizaci&oacute;n Requiere de pago. ",
				"403"=>"Zona prohibida.",
				"404"=>"P&aacute;gina no encontrada.",
				"407"=>"Se requiere autenticaci&oacute;n del proxy.",
				"415"=>"Tipo de medio no soportado.",
				"500"=>"Error Interno del Servidor.",
				"501"=>"Servicio no implementado",
				"502"=>"Gateway incorrecto",
				"503"=>"Servicio no disponible"
			);
echo "<h3>".accionError($_GET['errno'])."</h3>".$datos[$_GET['errno']];
echo "http://localhost/".
	$_SERVER['REQUEST_URI'];

?>
</body>
</html>
