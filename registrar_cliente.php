<?php
require_once("modelo_tienda.php");

$nomU = $_REQUEST['nomU'];
$codU = $_REQUEST['codU'];

$nom = $_REQUEST['nom'];
$ape = $_REQUEST['ape'];
$cel = $_REQUEST['cel'];
$email = $_REQUEST['email'];
$dist = $_REQUEST['dist'];
$dir = $_REQUEST['dir'];

$idUser = RegistrarUsuario($nomU,$codU);

$rpta = RegistrarCliente($idUser,$nom,$ape,$cel,$email,$dist,$dir);

echo $rpta;
?>