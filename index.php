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
		<div>
			<a href="index2.php">¡Ya tengo una cuenta!</a><br/>
		</div>
		<h1>Zona Multimedia ♫♫♪</h1>
		<div class="fondo">
		<form action ="resgistro.php" action="home.php" method="post"><!--a registro.php es donde van a ir los datos que se ingresan al formulario-->
			<h2>Registro</h2>
			<label>Nickname: </label>
			<input type="text" placeholder="Escribe tu nickname aqui.." name="user">
			<br/>
			<label for ="contraseña">Contraseña: </label>
			<input type="password" placeholder="Ingrese la contraseña.." password="contraseña" name="password">
			<br/>
			<label for="nombre">Nombre completo:</label>
			<input type="text" placeholder="Escribe tu nombre.." name="nombre">
			<br/>
			<label for="email">Correo electrónico:</label>
			<input type="email" placeholder="em@il.." name="email" id="">
			<br/>
			<label for = "telefono: ">Telefono o número celular: </label>
			<input type="number" placeholder="Numero telefonico.." name="telefono">
			<br/>
			<label for="direccion" >Dirección:</label>
			<input type="text" placeholder="Dirección.." name="direccion">
			<br/>
			<label for="nacimiento" >Fecha de nacimiento:</label>
			<input type="text" placeholder="Fecha de nacimiento.." name="nacimiento">
			<br/>			
			<input id="enviar" type="submit" name="enviar">
			<br/>
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