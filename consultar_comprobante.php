<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$rpta = ConsultarComprobante($id);

echo json_encode($rpta);
?>