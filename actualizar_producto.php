<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$nom = $_REQUEST['nom'];
$tip = $_REQUEST['tip'];
$prec = $_REQUEST['prec'];
$desc = $_REQUEST['desc'];

$rpta = ActualizarProducto($id,$nom,$tip,$prec,$desc);
echo $rpta;
?>