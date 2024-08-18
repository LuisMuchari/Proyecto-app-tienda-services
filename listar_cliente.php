<?php
require_once("modelo_tienda.php");
$rpta = ListarCliente();
echo json_encode($rpta);
?>