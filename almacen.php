<?php

include("Conexion.php");
if(isset($_POST['comprar'])){
	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1) {
		$nombre= trim($_POST['nombre']);
		$producto = trim($_POST['producto']);
		$direccion = trim($_POST['direccion']);
		$correo= trim($_POST['correo']);
		$telefono= trim($_POST['telefonofjo']);
		$movil= trim($_POST['movil']);		
		$observaciones= trim($_POST['descripcion']);
		$cantidad= trim($_POST['cantidad']);
		$fecha= date("d/m/yy");
		$foto= trim($_POST['files']);
		
		$consulta= "INSERT INTO pedidosproductos(nombrecliente, pedidoproduc, direccionproduc, correoproduc, telefonofijoproduc, movilproduc, observacionesproduc, cantidad, fechaingresoproduc, fotoproduc, ) VALUES ('$nombre','$producto','$direccion','$correo','$telefono','$movil','$observaciones','$cantidad','$fecha','$foto')";
		
		$resultado= mysql_query($conn, $consulta);
		
		if ($resultado){
		?>
        <h3 class= "ok">! Te has inscrito correctamente....</h3> 
        <?php
	} else {
		?>
        <h3 class= "malo">! Ha ocurrido un error....</h3>
        <?php
	}
	} else {
		?>
        <h3 class= "malo">! Por favor, complete los campos....</h3>
       <?php
	}
}


?>