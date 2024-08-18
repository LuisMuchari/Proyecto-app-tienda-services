<?php 
require_once("modelo_tienda.php");

$id_pedido = $_REQUEST['id_pedido'];
$id_cliente = $_REQUEST['id_cliente'];
$id_mdp = $_REQUEST['id_mdp'];
$id_comp = $_REQUEST['id_comp'];

$rpta = FinalizarCarritoPedido($id_pedido,$id_cliente,$id_mdp,$id_comp);

echo $rpta;
?>