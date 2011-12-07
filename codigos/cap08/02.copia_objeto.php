<?php

#include '01.def_de_objeto.php';
#include_once '01.def_de_objeto.php';
#include_once '01.def_de_objeto.php';
#require('xxx.php');
require_once '01.def_de_objeto.php';
require_once '01.def_de_objeto.php';

$mi_objeto = new nombreClase();
$ref_de_objeto = $mi_objeto;
$copia_de_objeto = clone $mi_objeto;

#
$ref_de_objeto->funcion_mensaje();
echo $copia_de_objeto->propiedad;
