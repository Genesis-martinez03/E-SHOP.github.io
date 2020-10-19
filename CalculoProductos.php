<?php
if(isset($_POST["submit"])){
	
$checkbox = $_POST["producto2"];
	
$suma = 0;
	
	
if(count($checkbox) > 0){
	
foreach($checkbox as $valor){
		
$suma += $valor;
$impuesto = $suma*0.15;
$total= $suma+$impuesto;			
		
}
	
}		
echo "El Subtotal es: $suma Lps. <br>";
echo "El Impuesto es: $impuesto Lps. <br> ";
echo ":::::::::::::::::::::::::::::::::::::::::::<br>";
echo "El total a pagar es: $total Lps.";
}
?>