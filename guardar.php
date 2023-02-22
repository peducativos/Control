<?php
	
    include("abre.php");
  
    $Nombre     = $_POST['Nombre'];
    $Apellidos  = $_POST['Apellidos'];
    $Calle      = $_POST['Calle'];
    $bebida     = $_POST['bebida'];


  
  $consulta = "INSERT INTO clientes(Nombre, Apellidos,Calle, bebida)  VALUES
  ('$Nombre','$Apellidos', '$Calle', '$bebida')";
	
    if ($conexion->query($consulta) === TRUE){
		header("Location: index.php");/* regresa al formulario*/
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }

    $conexion->close();

?>