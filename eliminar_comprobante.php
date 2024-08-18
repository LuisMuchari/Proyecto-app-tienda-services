<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$rpta = EliminarComprobante($id);

echo $rpta;
?>
