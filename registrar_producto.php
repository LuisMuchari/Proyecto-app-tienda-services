<?php
require_once("modelo_tienda.php");

$nom = $_REQUEST['nom'];
$tip = $_REQUEST['tip'];
$prec = $_REQUEST['prec'];
$desc = $_REQUEST['desc'];

$rpta = RegistrarProducto($nom,$tip,$prec,$desc);
echo $rpta;
?>