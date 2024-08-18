<?php
require_once("modelo_tienda.php");
$rpta = ListarProducto();
echo json_encode($rpta);
?>