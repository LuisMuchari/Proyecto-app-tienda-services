<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$rpta = EliminarProducto($id);

echo $rpta;
?>