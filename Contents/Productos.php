<!DOCTYPE HTML>
<html lang="es";

<head>
<script src="../Backend/CSS/header.js"></script>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
    <meta http-equiv="Content-Type" content="text/html", charset="utf-8"/>
    <title> Productos </title>
    <link href="../Backend/CSS/productos2.css" rel="stylesheet" type="text/css">
</head>
    
    <body class="wrapper2">
		
    <header class="header2">
		<div class="wrapper">
	      <div class="logo">E-SHOP</div>
		<nav>
			<a href="inicio.html">Inicio</a>
			<a href="inicio.html">Sobre Nosotros</a>
			<a href="Productos.html">Productos</a>
			<a href="servicios.html">Servicios</a>
			<a href="inicio.html">Contactanos</a>
		</nav>
			</div>
	</header>
   <br>
	<br>
	<br>
    <br>
		<br>
		<br>
    <H1 style="text-align:center">Productos|E-SHOP</h1>
    
    <form action="ProcesamientoProductos.php" method="post" enctype="multipart/form-data"
    class="contact_form" accept-charset="UTF-8">
    
     
     <label for="nombre"> Nombre del Cliente: </label><br>
     <input name="nombre" type="text" required id="nomcliente"/>
     <br>
															  <br>
			 <label for="producto"> Producto Requerido: </label><br>
     <input name="producto" type="text" required id="nomcliente"/>
     <br>
															  
											    <br>
		<label for="direccion"> Dirección: </label>
     <input name="direccion" type="text" id="unidades"/>
     <br>
		<br>
		<label for="correo"> Correo Electronico: </label>
     <input name="correo" type="text" id="unidades"/>
     <br>
		<br>
		<label for="telefonofijo"> Teléfono Fijo: </label>
     <input name="telefonofijo" type="text" id="unidades"/>
     <br>
		<br>
		<label for="movil"> Teléfono Movil: </label>
     <input name="movil" type="text" id="unidades"/>
     <br>
		<br>
     <label for="descripcion"> Descripción: </label>
     <input name="descripcion" type="text" id="unidades"/>
     <br>
     <br>
		<label for="cantidad"> Cantidad: </label>
     <input name="cantidad" type="number" id="unidades"/>
     <br>
     
     <br>
     <label for="fecha"> Fecha del pedido: </label>
     <input name="fecha" type="date" required id="precio" step="any"/>
     <br>
     <br>
		
      <?php include("CalculoProductos.php");	?>
     
     <br>
     <input type="file" id="files" name="files[]" />
     <center><output id="list"></output></center>
    
     <br>
     <br>
							  	<input type="submit" name="Guardar" >
																  
     
     
     <script>
           function archivo(evt) {
                  var files = evt.target.files; // Objeto de lista de archivo
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    
                    //Validación solo para permitir imagenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
             
           
                    var reader = new FileReader();
             
       
                    reader.onload = (function(theFile) {
                        return function(e) {
                          
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
     

     </script>
     </form>
     
     </body>
     </html>