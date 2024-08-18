<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$rpta = EliminarCliente($id);

echo $rpta;
?>
