<?php
require_once("modelo_tienda.php");
$rpta = ListarComprobante();
echo json_encode($rpta);
?>