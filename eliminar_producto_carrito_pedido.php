<?php 
require_once("modelo_tienda.php");

$id_pedido = $_REQUEST['id_pedido'];
$id_producto = $_REQUEST['id_producto'];

$rpta = EliminarProductoPedidoDetalle($id_pedido,$id_producto);

echo $rpta;
?>