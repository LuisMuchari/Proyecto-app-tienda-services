<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$nom = $_REQUEST['nom'];
$desc = $_REQUEST['desc'];

$rpta = ActualizarComprobante($id,$nom,$desc);
echo $rpta;
?>