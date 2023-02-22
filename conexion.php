<?php

$conexion = new mysqli("localhost", "root", "","uacj");
	if($conexion){
	    echo "la gestion fue exitosa !!"; 
	   
	}else{
		echo "Fallo la gestion";		
	}	
?>