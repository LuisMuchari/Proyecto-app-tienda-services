<?php

function ListarProducto()
{
	//conectar con BD
	require("conexion.php");

	//consultar a BD
	$sql="SELECT * FROM producto";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//declaracion de variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}
	//retornas array de datos
	return $datos;

	mysqli_close($con);
}

function ConsultarProducto($id)
{
	//conectar con BD
	require("conexion.php");

	//consultar BD
	$sql="SELECT * FROM producto where id_producto='$id'";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}

	//retornas array de dato
	return $datos;

	mysqli_close($con);	//Cerrar conexion
}

function RegistrarUsuario($nomU,$codU)
{
	//conectar con BD
	require("conexion.php");

	//consultas a BD
	$sql="INSERT INTO usuario() VALUES(NULL,'$nomU','$codU')";

	//Ejecutar la consulta
	mysqli_query($con, $sql);

	//consulta para obtener el ultimo ID del usuario registrado
	$sqlc="SELECT * FROM usuario ORDER BY id_usuario DESC LIMIT 1";

	//ejecutar consulta
	$resc = mysqli_query($con,$sqlc);
	$rowc = mysqli_fetch_array($resc);
	$id_usuario = $rowc['id_usuario'];

	return $id_usuario;

	mysqli_close($con);	//Cerrar conexion
}

function RegistrarCliente($idUser,$nom,$ape,$cel,$email,$dist,$dir)
{
	//conectar con BD
	require("conexion.php");

	$sql="INSERT INTO cliente() VALUES(NULL,'$idUser','$nom','$ape','$cel','$email','$dist','$dir')";

	//Ejecutar la consulta
	mysqli_query($con,$sql);

	return "SI";

	mysqli_close($con);	//Cerrar conexion
}

function ListarCliente()
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="SELECT * FROM cliente";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//declaracion de variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}
	//retornas array de datos
	return $datos;

	mysqli_close($con);
}

function ConsultarCliente($id)
{
	//conectar con BD
	require("conexion.php");

	//consultar BD
	$sql="SELECT * FROM cliente where id_usuario='$id'";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}

	//retornas array de dato
	return $datos;

	mysqli_close($con);	//Cerrar conexion
}

function RegistrarMdpago($nom,$desc)
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="INSERT INTO mdpago() VALUES(NULL,'$nom','$desc')";

	//Ejecutar la consulta
	mysqli_query($con,$sql);

	return "SI";

	mysqli_close($con);	//Cerrar conexion
}

function ListarMdpago()
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="SELECT * FROM mdpago";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//declaracion de variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}
	//retornas array de datos
	return $datos;

	mysqli_close($con);
}

function ConsultarMdpago($id)
{
	//conectar con BD
	require("conexion.php");

	//consultar BD
	$sql="SELECT * FROM mdpago where id_mdpago='$id'";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}

	//retornas array de dato
	return $datos;

	mysqli_close($con);	//Cerrar conexion
}

function RegistrarComprobante($nom,$desc)
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="INSERT INTO comprobante() VALUES(NULL,'$nom','$desc')";

	//Ejecutar la consulta
	mysqli_query($con,$sql);

	return "SI";

	mysqli_close($con);	//Cerrar conexion
}

function ListarComprobante()
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="SELECT * FROM comprobante";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//declaracion de variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}
	//retornas array de datos
	return $datos;

	mysqli_close($con);
}

function ListarUsuario()
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="SELECT * FROM usuario";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//declaracion de variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}
	//retornas array de datos
	return $datos;

	mysqli_close($con);
}

function ConsultarComprobante($id)
{
	//conectar con BD
	require("conexion.php");

	//consultar BD
	$sql="SELECT * FROM comprobante where id_comprobante='$id'";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}

	//retornas array de dato
	return $datos;

	mysqli_close($con);	//Cerrar conexion
}

function RegistrarPedido($id_cliente)
{
	//conectar con BD
	require_once("conexion.php");

	//Estado 1:registrando
	//Estado 2:registrada
	//Estado 0:anulada
	$estado = 1;

	//consulta para crear un ID de pedido
	$sql="INSERT INTO pedido() VALUES(NULL,'$id_cliente',0,0,NOW(),'$estado')";

	//Ejecutar la consulta
	mysqli_query($con,$sql);

	//consulta para obtener el ultimo ID del pedido registrado
	$sqlc="SELECT * FROM pedido ORDER BY id_pedido DESC LIMIT 1";

	//ejecutar consulta
	$resc = mysqli_query($con,$sqlc);
	$rowc = mysqli_fetch_array($resc);
	$id_pedido = $rowc['id_pedido'];

	return $id_pedido;

	mysqli_close($con);	//Cerrar conexion
}

function RegistrarPedidoDetalle($id_pedido, $id_producto)
{
	//Conectar con BD
	require("conexion.php");

	//Para extraer el precio del producto
	$producto = ConsultarProducto($id_producto);
	foreach ($producto as $value) {
		$prec = $value['prec_producto'];
	}

	$cant = 1;

	//Consulta 1
	$sql1="INSERT INTO pedido_detalle() 
	VALUES(NULL,'$id_pedido','$id_producto','$prec','$cant',1)";

	//Ejecutar la consulta
	mysqli_query($con,$sql1);

	//Consulta 2
	$sql2="UPDATE producto SET
	stock_producto = stock_producto - 1
	WHERE id_producto = '$id_producto'";

	//Ejecutar la consulta
	mysqli_query($con,$sql2);

	return "SI";

	mysqli_close($con);	//Cerrar conexion
}


function ConsultarPedidoDetalle($id_pedido,$id_cliente)
{
	//conectar con BD
	require("conexion.php");

	//consultar BD
	$sql="SELECT *, 
	SUM(cant_pedido_detalle) as cantidad, 
	(SUM(cant_pedido_detalle) * prec_pedido_detalle) as total 
	FROM pedido_detalle 
	INNER JOIN producto ON pedido_detalle.id_producto = producto.id_producto
	INNER JOIN pedido ON pedido_detalle.id_pedido = pedido.id_pedido
		LEFT JOIN cliente ON pedido.id_cliente = cliente.id_cliente
		LEFT JOIN comprobante ON pedido.id_comprobante = comprobante.id_comprobante
		LEFT JOIN mdpago ON pedido.id_mdpago = mdpago.id_mdpago
	WHERE pedido_detalle.id_pedido='$id_pedido' AND pedido.id_cliente='$id_cliente'
	GROUP BY pedido_detalle.id_producto";
	
	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}

	//retornas array de dato
	return $datos;

	mysqli_close($con);	//Cerrar conexion
}


function EliminarProductoPedidoDetalle($id_pedido,$id_producto)
{
	//Conectar con BD
	require("conexion.php");

	$cant = RegresarStock($id_pedido, $id_producto);

	//Consulta 1
	$sql1="DELETE FROM pedido_detalle 
	WHERE id_pedido='$id_pedido' 
	AND id_producto='$id_producto'";
	mysqli_query($con,$sql1);

	//Consulta 2
	$sql2="UPDATE producto SET
	stock_producto = stock_producto + '$cant'
	WHERE id_producto = '$id_producto'";

	//Ejecutar la consulta
	mysqli_query($con,$sql2);

	$rpta="SI";

	return $rpta;

	//cerrar conexion BD
	mysqli_close($con);
}

function RegresarStock($id_pedido, $id_producto)
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="SELECT IFNULL(SUM(cant_pedido_detalle),0) as cantidad 
	FROM pedido_detalle
	WHERE id_pedido = '$id_pedido' AND id_producto = '$id_producto'";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);
	$fila = mysqli_fetch_array($res,MYSQLI_ASSOC);
	$cantidad = $fila['cantidad'];

	//retornas array de datos
	return $cantidad;
	
	//cerrar conexion BD
	mysqli_close($con);
}

function FinalizarCarritoPedido($id_pedido,$id_cliente,$id_mdp,$id_comp)
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="UPDATE pedido SET
	id_mdpago = '$id_mdp',
	id_comprobante = '$id_comp',
	fec_pedido = NOW(),
	estado_pedido = 2
	WHERE id_pedido = '$id_pedido' AND id_cliente = '$id_cliente'";
	mysqli_query($con,$sql);

	return "SI";

	//cerrar conexion BD
	mysqli_close($con);
}

function ConsultarPedido($id_cliente)
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="SELECT pedido.id_pedido, cliente.nom_cliente AS nombre_cliente, mdpago.nom_mdpago AS nombre_mdpago, comprobante.nom_comprobante AS nombre_comprobante, pedido.fec_pedido,pedido.estado_pedido, SUM(pedido_detalle.cant_pedido_detalle * pedido_detalle.prec_pedido_detalle) AS monto_total
		FROM pedido
		INNER JOIN cliente ON pedido.id_cliente = cliente.id_cliente
		INNER JOIN mdpago ON pedido.id_mdpago = mdpago.id_mdpago
		INNER JOIN comprobante ON pedido.id_comprobante = comprobante.id_comprobante
		INNER JOIN pedido_detalle ON pedido.id_pedido = pedido_detalle.id_pedido
		WHERE pedido.id_cliente = '$id_cliente' AND pedido.estado_pedido = 2
		GROUP BY pedido.id_pedido, cliente.nom_cliente, mdpago.nom_mdpago, comprobante.nom_comprobante,
				 pedido.fec_pedido, pedido.estado_pedido;";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	//declaracion de variable tipo array
	$datos = array();

	//recorrido a la respuesta
	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		//agregando registro por registro
		$datos[] = $fila;
	}

	//retornas array de datos
	return $datos;

	mysqli_close($con);	//Cerrar conexion
}

function ConsultarPedidoPendiente($id_cliente)
{
	//conectar con BD
	require("conexion.php");

	//consulta a BD
	$sql="SELECT IFNULL(id_pedido, 0) AS id_pedido
		FROM pedido
		WHERE id_cliente = '$id_cliente'
  		AND estado_pedido = 1;";

	//respuesta de consulta
	$res = mysqli_query($con,$sql);

	$fila = mysqli_fetch_array($res,MYSQLI_ASSOC);
	$id_pedido = $fila['id_pedido'];

	// Retornar el dato
    return $id_pedido;

	mysqli_close($con);	//Cerrar conexion
}
?>
