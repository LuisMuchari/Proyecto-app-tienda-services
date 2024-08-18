<?php
require_once("modelo_tienda.php");
$rpta = ListarMdpago();
echo json_encode($rpta);
?>