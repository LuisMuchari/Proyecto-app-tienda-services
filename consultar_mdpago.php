<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$rpta = ConsultarMdPago($id);

echo json_encode($rpta);
?>