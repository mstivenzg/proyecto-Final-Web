<?php
	session_start(); 
?>
<!doctype html>
<html lang="en">
<link rel="icon" href="mario bros.jpg">
	<head>
		<meta charset="UTF-8">
		<title>Zona Multimedia</title>
		<link rel="stylesheet" href="css/css/estilosMusica.css"> 
		<link rel="shortcut icon" type="image/x" href="imagenes/bocina.png"><!--para el icono de la pagina-->
		<!--<h2>Bienvenido <?php echo $_SESSION['usuario']?></h2>	-->
		<h2><a id="salir" href="index.php?vista=logout" class="button is-link is rounded">Salir</a></h2>
	<head>
	<body>
		<div class="contenedor">
				<div id="logo">
					<img id="perfil" src="imagenes/bocina.png" alt="Imagen perfil">			
					<h1>Musica</h1>		
				</div>					
				<header>
					<ul class="nav"> 
						<li><a href="./index.php">Inicio</a>				
						</li>
						<li><a href="./videos.php">Videos</a>
							<!--<ul>
								<li><a href="#">Aguja y Vinilo</a></li>
								<li><a href="#">Baladas en Ingles</a></li>
								<li><a href="#">Clasicos en español</a></li>
								<li><a href="#">Vallenatos</a></li>
							</ul>			-->	
						</li>
						<li><a href="./imagenes.php">Imagenes</a>
							<!--<ul>
								<li><a href="#">Anime</a></li>
								<li><a href="#">Cantantes</a></li>
								<li><a href="#">Piercings</a></li>
								<li><a href="#">Sailor Moon</a></li>
							</ul>-->		
						</li>			
					</ul>
				</header>
						
				<section>
					<h2>Opening</h2>
					<div class="center">
						<h3>Intro padrinos Magicos</h3>
						<audio controls="controls">					
							<source src="musica/cartoons/los padrinos mágicos intro.mp3" type="audio/mp3">				
						</audio>				
						<h3>Intro Pokemon - Viajes Johto</h3>
						<audio controls="controls">				
							<source src="musica/cartoons/Pokemon - Los Viajes A Johto (Opening 3 Full Latino).mp3" type="audio/mp3">
						</audio>
						<h3>Intro Digimon</h3>
						<audio controls="controls">					
							<source src="musica/cartoons/digimon-adventure-01-opening-latino.mp3" type="audio/mp3">				
						</audio>
						<h3>Intro Dragon Ball</h3>
						<audio controls="controls">					
							<source src="musica/cartoons/dragon-ball-opening-latino.mp3" type="audio/mp3">				
						</audio>				
					</div>
					<div class="center">
						<h2>Baladas</h2>
						<h3>California dreamin - Samatha</h3>
						<audio controls="controls">					
							<source src="musica/baladas/California dreamin.mp3" type="audio/mp3">				
						</audio>				
						<h3>Another day in the paradisea - Pill Collins</h3>
						<audio controls="controls">				
							<source src="musica/baladas/Another day in the paradisea - Pill Collins.mp3" type="audio/mp3">
						</audio>
						<h3>Total Eclipse of the Heart - Bonnie Tyler</h3>
						<audio controls="controls">					
							<source src="musica/baladas/Total Eclipse of the Heart - Bonnie Tyler.mp3" type="audio/mp3">				
						</audio>
						<h3>Wish You Were Here - Pink Floy</h3>
						<audio controls="controls">					
							<source src="musica/baladas/Wish You Were Here -Pink Floyd (Live (Pulse)).mp3" type="audio/mp3">
						</audio>
					</div>
					
					<!--<h4>Clasicos en español</h4>
					<h5>Melodias</h5>-->
					
				</section>
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