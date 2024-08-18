<?php
require_once("modelo_tienda.php");

$id_cliente = $_REQUEST['id_cliente'];
$rpta = ConsultarPedidoPendiente($id_cliente);

echo json_encode($rpta);
?>