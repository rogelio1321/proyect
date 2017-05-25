
<h1>Cargo Persona</h1>
<form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
	<table>
		<tr>
		   <td><label>DNI</label></td>
		   <td><input type="text" name="txtDNI" maxlength="8"></td>	
		</tr>
		<tr>
		   <td><label>Nombre</label></td>
		   <td><input type="text" name="txtNombre"></td>	
		</tr>
		<tr>
		   <td><label>Apellido Paterno</label></td>
		   <td><input type="text" name="txtApPaterno"></td>	
		</tr>
		<tr>
		   <td><label>Apellido Materno</label></td>
		   <td><input type="text" name="txtApMaterno"></td>	
		</tr>
		<tr>
		   <td><label>Email</label></td>
		   <td><input type="text" name="txtEmail"></td>	
		</tr>
		<tr>
		   <td><label>Fec. Nac.</label></td>
		   <td><input type="date" name="datFecNac"></td>	
		</tr>
		<tr>
		   <td colspan="2"><label>Usuario</label></td>
		<tr>
		   <td><label>Usuario</label></td>
		   <td><input type="text" name="txtUsuario"></td>	
		</tr>
		<tr>
		   <td><label>Clave</label></td>
		   <td><input type="password" name="txtClave"></td>	
		</tr>
		<tr>
		   <td colspan="2"><input type="submit" value="Guardar"></td>
		   	
		</tr>
	</table>
	</form>
	<a href="<?php echo base_url();?>clogin">Login</a>		
