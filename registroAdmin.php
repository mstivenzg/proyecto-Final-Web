<?php
	include("connection.php");
	if (isset($_POST['enviar'])) {
		if (strlen($_POST['usuario'])>=1 			
			&& strlen($_POST['contraseña']) >=1
			&& strlen($_POST['correo'])>=1			
		) {
			$usuario=trim($_POST['usuario']);
			$contraseña=trim($_POST['contraseña']);
			$correo=trim($_POST['correo']);			
			$consulta="INSERT INTO administrador(usuario, contraseña, correo) VALUES ('$usuario','$contraseña','$correo')";
			$resultado= mysqli_query($conex,$consulta);
			if ($resultado) {
					?>
					<h3 class="ok">¡Te has inscrito correctamente!</h3>					
					
					<?php
					header("location:home.php");				
				} else {
					?>
					<h3 class="bad">¡Ups...ha ocurrido un error!</h3>
					<?php
				} 						
		}
	} 
	else {
		?>
		<h3 class="bad">¡Por favor completo los campos!</h3>
		<a href="index.php">¡Click aqui para volver al registro!</a><br/>
		<!--header("location:index.html");-->
		<?php
	}
	
?>
