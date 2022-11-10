<?php
	session_start(); 
?>
<!doctype html>
<html lang="en">
<link rel="icon" href="imagenes/botonplay.png">
	<head>
		<meta charset="UTF-8">
		<title>Zona de Videos</title>
		<link rel="stylesheet" href="css/css/estilosVideos.css"> 
		<link rel="shortcut icon" type="image/x" href="imagenes/botonplay.png"><!--para el icono de la pagina-->
		<!--<h2>Bienvenido <?php echo $_SESSION['usuario']?></h2>-->	
		<h2><a id="salir" href="index.php?vista=logout" class="button is-link is rounded">Salir</a></h2>
	</head>
	<body>
	
		<div class="contenedor">
			<div id="logo">
				<img id="perfil" src="imagenes/botonplay.png" alt="Imagen perfil">			
				<h1>Videos Musicales</h1>		
			</div>							
				<ul class="nav"> 
					<li><a href="index.php">Inicio</a><!--
						<ul>
							<li><a href="#">Saint Seiya</a></li>
							<li><a href="#">Ranma 1/2</a></li>
							<li><a href="#">Pókemon</a></li>
							<li><a href="#">Sailor Moon</a></li>
						</ul>-->
					</li>
					<li><a href="musica.php">Musica</a><!--
						<ul>
							<li><a href="#">Aguja y Vinilo</a></li>
							<li><a href="#">Baladas en Ingles</a></li>
							<li><a href="#">Clasicos en español</a></li>
							<li><a href="#">Vallenatos</a></li>
						</ul>	-->			
					</li>
					<li><a href="imagenes.php">Imagenes</a><!--
						<ul>
							<li><a href="#">Anime</a></li>
							<li><a href="#">Cantantes</a></li>
							<li><a href="#">Piercings</a></li>
							<li><a href="#">Sailor Moon</a></li>
						</ul>	-->		
					</li>			
				</ul>
				
			<h3>ZAYN - Dusk Till Dawn (Audio) ft. Sia</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/eNd4tt9raeg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>Rosa Linn - Snap</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/Lo4_K4relMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>Dr. Alban - Sing Hallelujah</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/CWCycC0P5AM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>The Black Eyed Peas - Let's Get It Started (Official Music Video)</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/Q3AWa9s7cic" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>Maneater ~ nelly furtado ( tiktok versión )</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/8RquE9JwjTg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>Level 42 - Lessons In Love (Official Music Video)</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/9x1RcVrGjGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>Indila - Dernière Danse (Clip Officiel)</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/K5KAc5CoCuk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>Hellbender - Tráiler 2022</h3>
			<iframe width="560" height="560" src="https://www.youtube.com/embed/hFksbT25YGQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<footer>			
				<a href="./autor.php">Sobre el autor Michael Stiven Zapata Giraldo</a><br/>
				mstivenzg@gmail.com<br/>
				<a href="https://www.youtube.com/channel/UCh6qUNn2GQSiDuulMbfYxBw">Canal de YouTube</a><br/>
				San Javier - Medellín</br>
				Contacto Cel. 301 350 4085<br/>
				Cll 39 DA 119 C 57 <br/>	
			</footer>
		</div>
	</body>	
</html>