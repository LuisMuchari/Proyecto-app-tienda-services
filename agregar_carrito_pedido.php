<?php
require_once("modelo_tienda.php");

$id_producto = $_REQUEST['id'];
$id_pedido = $_REQUEST['id_pedido'];
$id_cliente= $_REQUEST['id_cliente'];

if($id_pedido == 0){//Nuevo pedido
	$id_pedido = RegistrarPedido($id_cliente);
}

RegistrarPedidoDetalle($id_pedido,$id_producto);
echo $id_pedido;
?>