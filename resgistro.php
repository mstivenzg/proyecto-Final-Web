<?php
	include("connection.php");
	if (isset($_POST['enviar'])) {
		if (strlen($_POST['user'])>=1 			
			&& strlen($_POST['password']) >=1
			&& strlen($_POST['nombre'])>=1
			&& strlen($_POST['email'])>=1
			&& strlen($_POST['telefono']) >=1
			&& strlen($_POST['direccion'])>=1
			&& strlen($_POST['nacimiento'])>=1
		) {
			$user=trim($_POST['user']);
			$password=trim($_POST['password']);
			$nombre=trim($_POST['nombre']);
			$email=trim($_POST['email']);
			$telefono=trim($_POST['telefono']);
			$direccion=trim($_POST['direccion']);
			$nacimiento=trim($_POST['nacimiento']);
			$consulta="INSERT INTO datos(usuario, contraseña, nombre, email, telefono, direccion, nacimiento) VALUES ('$user','$password','$nombre','$email','$telefono','$direccion','$nacimiento')";
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
