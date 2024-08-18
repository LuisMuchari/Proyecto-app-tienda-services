<?php
require_once("modelo_tienda.php");

$nom = $_REQUEST['nom'];
$desc = $_REQUEST['desc'];

$rpta = RegistrarMdpago($nom,$desc);
echo $rpta;
?>