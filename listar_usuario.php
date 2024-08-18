<?php
require_once("modelo_tienda.php");
$rpta = ListarUsuario();
echo json_encode($rpta);
?>