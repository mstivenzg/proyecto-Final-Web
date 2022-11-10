<?php
	session_start(); 
?>
<!doctype html>
<html lang="en">
<link rel="icon" href="mario bros.jpg">
	<head>
		<meta charset="UTF-8">
		<title>Zona Multimedia</title>
		<link rel="stylesheet" href="css/css/estilosImagenes.css"> 
		<link rel="shortcut icon" type="image/x" href="imagenes/bocina.png"><!--para el icono de la pagina-->
		<!--<h2>Bienvenido <?php echo $_SESSION['usuario']?></h2>	-->
		<h2><a id="salir" href="index.php?vista=logout" class="button is-link is rounded">Salir</a></h2>
	<head>
	<body>
		<div class="contenedor">
				<div id="logo">
					<img id="perfil" src="imagenes/bocina.png" alt="Imagen perfil">			
					<h1>Imagenes</h1>		
				</div>	
			<header>

				<ul class="nav"> 
					<li><a href="videos.php">Videos</a>
						<!--<ul>
							<li><a href="#">Saint Seiya</a></li>
							<li><a href="#">Ranma 1/2</a></li>
							<li><a href="#">Pókemon</a></li>
							<li><a href="#">Sailor Moon</a></li>
						</ul>-->
					</li>
					<li><a href="musica.php">Musica</a>
						<!--<ul>
							<li><a href="#">Aguja y Vinilo</a></li>
							<li><a href="#">Baladas en Ingles</a></li>
							<li><a href="#">Clasicos en español</a></li>
							<li><a href="#">Vallenatos</a></li>
						</ul>	-->			
					</li>
					<li><a href="index.php">Inicio</a>
						<!--<ul>
							<li><a href="./imagenes/pikachu.png">Anime</a></li>
							<li><a href="./imagenes/selina.jpg">Cantantes</a></li>
							<li><a href="./imagenes/piercing1.jpg">Piercings</a></li>
							<li><a href="./imagenes/sailor moon.png">Sailor Moon</a></li>
						</ul>-->			
					</li>			
				</ul>
			</header>
			<div class="center">
				<h2>Anime</h2>
					<img src="./imagenes/pikachu.png" width="80px">
					<img src="./imagenes/sailor moon.png" width="80px">
					<img src="./imagenes/caballeros-del-zodiaco-wallpaper.jpg" width="80px">	
					<img src="./imagenes/saori.jpg" width="80px">	
				<h2>Piercings</h2>		
					<img src="./imagenes/piercing1.jpg" width="80px">
					<img src="./imagenes/notas.jpg" width="80px">	
					<img src="./imagenes/peson.jpg" width="80px">	
					<img src="./imagenes/industrial.jpg" width="80px">	
				<h2>Cantantes<h2>
					<img src="./imagenes/selina.jpg" width="80px">
					<img src="./imagenes/Jlo.jpg" width="80px">	
					<img src="./imagenes/michelle.jpg" width="80px">	
					<img src="./imagenes/aguilera.jpg" width="80px">
			</div>	
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<footer>			
					<a href="./autor.php">Sobre el autor Michael Stiven Zapata Giraldo</a><br/>
					mstivenzg@gmail.com</br>
					<a href="https://www.youtube.com/channel/UCh6qUNn2GQSiDuulMbfYxBw">Canal de YouTube</a></br>
					San Javier - Medellín</br>
					Contacto Cel. 301 350 4085</br>
					Cll 39 DA 119 C 57 </br>		
			</footer>
		</div>		
	</body>	

</html>