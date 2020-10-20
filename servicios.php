<!DOCTYPE HTML>
<html lang="es";

<head>
<script src="../Backend/CSS/header.js"></script>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
    <meta http-equiv="Content-Type" content="text/html", charset="utf-8"/>
    <title> Productos </title>
    <link href="../Backend/CSS/productos2.css" rel="stylesheet" type="text/css">
</head>
    
    <body background="img/fondo.jpeg">
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
    <?php include("");	?>
    
    <H1 style="text-align:center">Servicios|E-SHOP</h1>
    
    <form action="ProcesamientoProductos.php" method="post" enctype="multipart/form-data"
    class="contact_form" accept-charset="UTF-8">
    
    
   
     
     <label for="nompc"> Nombre de computadora: </label>
     <input name="nompc" type="text" required id="nomproducto"/>
     <br>
     
     
    <br>
     <label for="nombre"> Nombre del Cliente: </label><br>
     <input name="nombre" type="text" required id="nomcliente"/>
     <br>
															  
											    <br>
     <label for="observaciones"> Observaciones: </label>
     <input name="observaciones" type="text" id="unidades"/>
     <br>
													 
													 <br>
     <label for="servicio"> Tipo de Servicio: </label>
     <input name="servicio" type="text" id="unidades"/>
     <br>
     
     
     <br>
     <label for="fecha"> Fecha de ingreso: </label>
     <input name="fecha" type="date" required id="precio" step="any"/>
     <br>
     <br>
		
  		<div class="uno">
			<br>
      <?php include("CalculoProductos.php");?></div>

     
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