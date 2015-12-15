<?php
$opcion = $_POST["ID"];
#$opcion = "latex";
if(isset($opcion)){
	$archivo = "Content/".$opcion.".html";
	$homepage = file_get_contents($archivo);	
}
echo $homepage;
?>