<?php
require_once("modelo_tienda.php");

$id = $_REQUEST['id'];
$nom = $_REQUEST['nom'];
$ape = $_REQUEST['ape'];
$dni = $_REQUEST['dni'];
$cel = $_REQUEST['cel'];
$email = $_REQUEST['email'];

$rpta = ActualizarCliente($id,$nom,$ape,$dni,$cel,$email);
echo $rpta;
?>