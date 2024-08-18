<?php
require_once("modelo_tienda.php");

$id_pedido = $_REQUEST['id_pedido'];
$id_cliente = $_REQUEST['id_cliente'];
$rpta = ConsultarPedidoDetalle($id_pedido,$id_cliente);

echo json_encode($rpta);
?>