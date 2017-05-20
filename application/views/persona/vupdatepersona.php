<!DOCTYPE html>
<html>
<head>
	<title>403 Forbidden</title>
</head>
<body>
	<form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST">
	<?php echo "Usuario :".$this->session->userdata('s_usuario');?>
	<h3>Actualiza tus datos</h3>	
	<input type="text" name="txtNombre" placeholder="Nombre"></input><br><br>
	<input type="text" name="txtApPaterno" placeholder="Apellido paterno"></input><br><br>
	<input type="text" name="txtAPMaterno" placeholder="Apellido materno"></input><br><br>
	<input type="text" name="txtEmail" placeholder="Correo"></input><br><br>
	<input type="submit" value="Actualizar"></input>
</form>
<form action="<?php echo base_url();?>cpersona/eliminarPersona" method="POST">
	
	<h3>Eliminar por id</h3>	
	<input type="text" name="txtIdPersona" placeholder="ID"></input><br><br>
	<input type="submit" value="Eliminar"></input>
</form>

</body>
</html>