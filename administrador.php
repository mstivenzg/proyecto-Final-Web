<!doctype html>
<html lang="en">
<link rel="icon" href="mario bros.jpg">
	<head>
		<meta charset="UTF-8">
		<title>Zona Multimedia</title>
		<link rel="stylesheet" href="css/estilosIndex.css"> 
		<link rel="shortcut icon" type="image/x" href="imagenes/bocina.png"><!--para el icono de la pagina-->
		<!--<script type="text/javascript" src="codigo.js"></script>-->
	<head>
	<body>
		<h1>Zona Multimedia ♫♫♪</h1>
		<div class="fondo">
		<form  action ="validarAdministrador.php"  method="post"><!--a registro.php es donde van a ir los datos que se ingresan al formulario-->
			<div class="login">
				<h2>Login Administrador</h2>
				<label>Nombre: </label>
				<input type="text" placeholder="Escriba aqui su nombre.." name="usuario">
				<br/>
				<label for ="contraseña">Contraseña: </label>
				<input type="password" placeholder="Ingrese la contraseña.." password="contraseña" name="contraseña">
				<br/>
				<input id="ingresar" type="submit" name="enviar" value="enviar">
				<br/>
			</div>
		</form>	
		</div>
	</body>	
</html>