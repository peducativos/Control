<!DOCTYPE html>
<html>
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<title>Formulario de Contacto</title> 
		<link href="estilo.css" rel="stylesheet" /> 
	</head>     
	<body>

		<h2>Formulario de Contacto</h2>
<form class="clientes" action="guardar.php" method="POST" id="contact_form" runat="server" 
enctype="multipart/form-data">
			
			<label for="Nombre">Nombre:</label><br>
			<input type="text" id="Nombre" name="Nombre" maxlength="30"required ><br>

			<label for="Apellidos">Apellidos:</label><br>
			<input type="text" id="Apellidos" name="Apellidos" maxlength="60"required ><br>	
			
			<label for="Apellidos">Calle:</label><br>
			<input type="text" id="Calle" name="Calle" maxlength="60"required ><br>				

			<h3>Qu&eacute; bebida Acostumbra?</h3>
			<label for="bebida">Elige una</label>
                    <select name="bebida">                    
                        <option value="Agua">Agua</option>
                        <option value="Cafe">Caf&eacute;</option>
                        <option value="Te">Te</option>
                        <option value="Chocolate">Chocolate</option>
                        <option value="Maletada">Malteada</option>
                        <option value="Soda">Soda</option>
                        <option value="Licuado">Licuado</option>
                    </select><br><br>  

		
			<button class="submit" type="submit">Enviar Registro</button> 
</form>

	</body>
</html>














