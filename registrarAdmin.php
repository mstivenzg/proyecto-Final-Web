<!doctype html>
<html lang="en">
<link rel="icon" href="mario bros.jpg">
	<head>
		<meta charset="UTF-8">
		<title>Zona Multimedia</title>
		<link rel="stylesheet" href="css/estilosIndex.css"> 
		<link rel="shortcut icon" type="image/x" href="imagenes/bocina.png"><!--para el icono de la pagina-->	
	<head>
	<body>
		<h1>Zona Multimedia ♫♫♪</h1>
		<div class="fondo">
		<form action ="registroAdmin.php"  method="post"><!--a registro.php es donde van a ir los datos que se ingresan al formulario-->
			<h2>Registrar un Admin.</h2>
			<label>Nombre usuario: </label>
			<input type="text" placeholder="Escriba su nombre aqui.." name="usuario">
			<br/>
			<label for ="contraseña">Contraseña: </label>
			<input type="password" placeholder="Ingrese la contraseña.." password="contraseña" name="contraseña">
			<br/>
			<label for="email">Correo electrónico:</label>
			<input type="email" placeholder="em@il.." name="correo" >
			<br/>	
			<input id="ingresar" type="submit" name="enviar" value="enviar">		
		</form>
		</div>		
		<footer>
			mstivenzg@gmail.com</br>
			<a href="https://www.youtube.com/channel/UCh6qUNn2GQSiDuulMbfYxBw">Canal de YouTube</a><br/>
			San Javier - Medellín<br/>
			Contacto Cel. 301 350 4085<br/>
			Cll 39 DA 119 C 57 <br/>		
		</footer>
	</body>	
</html>