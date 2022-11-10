<?php
	session_start(); 
?>
<!doctype html>
<html lang="en">
<link  rel="icon" href="img/icono_bus.png">
<head>
	<meta charset="UFT-8">
	<title>Zona Multimedia - Home </title>	
	<!-- Referencias de paquetes con etiquetas de diseño-->
	<link rel="stylesheet" href="css/autor.css">
    <link rel="shortcut icon" type="image/x" href="imagenes/autor.png"><!--para el icono de la pagina-->
   	<h2>Bienvenido <?php echo $_SESSION['usuario']?></h2>	
	 <!--<h2><a id="salir" href="index.php?vista=logout" class="button is-link is rounded">Salir</a></h2>-->
</head>
	<body>
		<div class="contenedor">
			<h1>Autor</h1>	
			<header>
			<div class="logotipo">
				<img src="imagenes/autor.png" width="100">
			</div>
				<ul class="nav"> 
					<li><a href="./videos.php">Videos</a>		
					</li>
					<li><a href="./musica.php">Musica</a>	
					</li>
					<li><a href="./imagenes.php">Imagenes</a>
					</li>	
					<li><a href="./index.php">Inicio</a>
					</li>			
				</ul>
			<br/><br/><br/><br/><br/>
			<div id="presentacion"><p >Mi nombre es Michael Stiven Zapata Giraldo y cree esta pagina para compartir algunos gustos <br/>
			como videos musicales, peliculas, gits, imagnes y archivos de este tipo. Me gusta la programacion <br/>
			aunque realmente no soy un experto en cuestion, por lo que tengo algunos videos tutoriales de otros canales en YouTube.<br/>
			Ademas, en este canal tengo una buena cantidad de videos tanto de entretenimiento como de enseñanza, aqui comparto un ejemplo:<br/>
			</p>
			</div>
			<iframe width="1000" height="560" src="https://www.youtube.com/embed/i7OM8n9Puuk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
			</iframe><!--ifream del canal de YouTube-->		
			<footer>				
				mstivenzg@gmail.com<br/>
				<a href="https://www.youtube.com/channel/UCh6qUNn2GQSiDuulMbfYxBw">Canal de YouTube</a></br>
				San Javier - Medellín<br/>
				Contacto Cel. 301 350 4085<br/>
				Cll 39 DA 119 C 57 <br/>		
			</footer>
		</div>	
	</body>	
</html>