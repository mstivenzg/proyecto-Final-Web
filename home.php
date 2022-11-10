<?php
	session_start(); 
?>
<!doctype html>

<html lang="en">
<!--<link id="icon" rel="icon" href="imagenes/sol.jpg">-->
	<head>		
		<meta charset="UTF-8">
		<title>Zona Multimedia</title>
		<link rel="stylesheet" href="css/estilos.css"> 
		<link rel="shortcut icon" type="image/x" href="imagenes/bocina.png"><!--para el icono de la pagina-->	
		<meta name="view" content="width=device-width, user-scalable=no,inicial-scale=1.0,minimum-scale=1.0"><!--para escalar en dispositivos moviles y desplazar hacia rriba o hacia abajo-->		
		<!--<h2>Bienvenido <?php echo $_SESSION['usuario']?></h2>	-->
		<h2><a id="salir" href="index.php?vista=logout" class="button is-link is rounded">Salir</a></h2>
		<div id="logo">
			<img id="perfil" src="imagenes/botonplay.png" alt="Imagen perfil">		
			<h1>Zona Multimedia</h1>			
		</div>		
	</head>
	<body>		
		<div class="contenedor">
			<div class="lbl-menu">
				<label for="radio1">Inicio</label>
				<label for="radio2">Imagenes</label>
				<label for="radio3">Musica</label>
				<label for="radio4">Videos</label>
				<label for="radio5">Acerca de</label>
			</div>			
			<div class="content">	
				<input type="radio" name="radio" id="radio1" checked>
				<div class="tab1">		
					<section class="lateral">
						<aside class="Titulo 1">							
							<a href="videos.php"><input id="enviar" type="button" value="videos"></a>
							<p>Aqui podrás encontrar escenas de peliculas y series, que realmente atraparan tu atencion, des de escenas comicas hasta las escenas mas tristes que pensaran que es mejor sólo verlas una sola vez en la vida. </p>
							<p>En este espacio encontras entre varios videos escenas comicas sobre dibujos animados y también escenas de peliculas chistosas como la de las Familia Adams</p>					
						</aside>
						<aside class="Titulo 2">
							<a href="musica.php">Música<input id="enviar" type="button" value="Música"></a>
							<p>En este espacio podras encontar imagenes en formate png e img en alta calidad, con tematica de piercing, animes y demás.</p>										
						</aside>
						<aside class="Titulo 3">
							<a href="imagenes.php">Imagenes<input id="enviar" type="button" value="Imagenes"></a>
							<p>American Horror Story es una serie televisiva de drama y horror creada y producida por Ryan Murphy (Glee) y Brad Falchuk (Nip/Tuck).
								Se ha descrito como una serie antológica, ya que cada temporada se hace como una miniserie independiente, con un grupo de personajes diferentes, 
								escenarios distintos y una trama que tiene su propio comienzo, desarrollo y final.</p>	
						</aside>
					</section>
					<article class="principal">		
						<!--<div class="articulo">-->
							<h2>¿Qué es Zona Multimedia?</h2>
							<p>Hola!...Zona multimedia es un sitio que web donde se pueden disfrutar de contenido multimedia como audios, videos musicales, peliculas, imagenes de animes,imagenes de cantantes y demas</p>
							<p>El género de la semana es la música disco
							les comparto un <a href="https://www.youtube.com/playlist?list=PLt_yn7bTlBuBTwwjvAD5bgzmtMlNkX4B6">link</a> con la mejor música Disco
							entre los que se encuentran los mas grandes, entre ellos 
							Lipps Inc, Gloria Gaynor, Donna Summer, Irene Cara,
							Anita Ward, Shocking Blue, The Pointer Sisters, Kool and the Gang, Derbage,Boney M, 
							Kc And The Sunshine Band, Selena Quintanilla ♥, Bee Gees, ABBA, Village people, 
							VAN McCOY, Dirty Dancing, Electric Light Orchestra, 
							Michael Jackson, Imagination, Michael Sembello, Blondie, Laura Branigan, Sandra, Dead or alive,
							Eddie Murphie, Pet Shop Boys, Eruption, Dschinghis Khan, entre otros</p>
							<p>Ésta es una página donde quiero almacenar <br/>
							todos mis archivos de imagenes, audios y videos, <br/>
							y mostrarla al público y por otro lado ir aprendiendo <br/>
							y practicando programacion web. <br/>
							</p>
							<img src="./imagenes/bocina1.png" >							
							<audio controls  autoplay>					
								<source src="musica/Christina Aguilera - Cant Hold Us Down ft. Lil Kim.mp3" type="audio/mp3" >				
							</audio>
						<!--</div>	-->
					</article>
					<article class="noticias">	
						<h2>Noticias Insólitas</h2>
						<h3>Bisabuela ucraniana se alista para «defender» su hogar y su familia si Rusia los invade</h3>
						<img src="./imagenes/bisabuela.png" ></br>
						<a href="https://www.periodismo.com/2022/02/14/bisabuela-ucraniana-se-alista-para-defender-su-hogar-y-su-familia-si-rusia-los-invade/">Seguir leyendo...</a>
						<h3>Logra récord Guinness apilando 4 huevos uno encima de otro</h3>
						<img src="./imagenes/huevos.png" ></br>
						<a href="https://www.periodismo.com/2022/02/18/logra-record-guinness-apilando-4-huevos-uno-encima-de-otro/">Seguir leyendo...</a>
						<h3>Convierte cucarachas en obras de arte</h3>
						<img src="./imagenes/cucaracha.png"></br>
						<a href="https://www.periodismo.com/2022/01/26/convierte-cucarachas-en-obras-de-arte/">Seguir leyendo...</a>
						<h3>El padre del atacante de Highland Park hace una petición singular contra su hijo</h3>
						<img src="./imagenes/robert-crimo.jpg" width="80px"></br>
						<a href="https://cnnespanol.cnn.com/video/masacre-highland-park-illinois-robert-crimo-peticion-requena-panorama-cnne/?dicbo=v2-928abee4f1a3591fb924d2414bc9a772">Seguir leyendo...</a>
						<h3>Emotiva reacción de esta niña cuando su padre le regala una nueva mascota</h3>
						<img src="./imagenes/mascota.png" width="80px"></br>
						<a href="https://www.lavoz.com.ar/viral/video-la-emotiva-reaccion-de-esta-nina-cuando-su-padre-le-regala-una-nueva-mascota/">Seguir leyendo...</a>
					</article>
				</div>	
				<input type="radio" name="radio" id="radio2">			
				<div class="tab2">
					<h2>Imagenes</h2>
					<p>Te comparto una pequeña parte de mi galeria de imagenes que poco a poco ire montado 
					con tematica de anime, musica, cantantes, piercings, imagenes neon, y muchos mas</p> 					
						<h2>Anime</h2>
							<img src="./imagenes/pikachu.png" width="70px">
							<img src="./imagenes/sailor moon.png" width="70px">
							<img src="./imagenes/caballeros-del-zodiaco-wallpaper.jpg" width="70px">	
							<img src="./imagenes/saori.jpg" width="70px">	
						<h2>Piercings</h2>		
							<img src="./imagenes/piercing1.jpg" width="70px">
							<img src="./imagenes/notas.jpg" width="70px">	
							<img src="./imagenes/peson.jpg" width="70">	
							<img src="./imagenes/industrial.jpg" width="70px">	
						<h2>Cantantes</h2>
							<img src="./imagenes/selina.jpg" width="70px">
							<img src="./imagenes/Jlo.jpg" width="70px">	
							<img src="./imagenes/michelle.jpg" width="70px">	
							<img src="./imagenes/aguilera.jpg" width="70px">								
				</div>				
				<input type="radio" name="radio" id="radio3">			
				<div class="tab3">
					<h2>Musica</h2>
					<p>La musica de esta le toca al genero de las baladas,
					Las mejores baladas de todos los tiempos interpretadas por los mas grandes entre ellos 
					Bonnie Tyler, Air Supply, Whitney Hosuton, Jennifer Rush, Righteous Broters, Roxette, Berlin,
					Foreigner, Elton John, Scorpions, Celine Dion, George Michael, Toni Braxton, Ben E. King, Cindy Lauper,
					Mariah Carey, The Bangles, Lionel Ritchie, Diana Roos, Elvis Presley, Damien Rice, Carrie Underwood, 
					Martina McBride, Sia, Kansas, Pink Floyd, Luther Vandross, Journey, Charice, Bryan Adams, Billy Ocean,
					Whistesnake, chicago, iris, linda Ronstandt, Roberta Flack, Barry Manillow, Foreigner, Grover  Washington Jr,
					Ten Sharp, y muchas mas de los mejores... </p>
					<p>Mas en mi canal de <a href="https://www.youtube.com/playlist?list=PLt_yn7bTlBuCZ1GRB9xbnCR94hynjmJyD">YouTube</a></p>					
				<h2>California dreamin - Samatha</h2>
				<audio controls="controls">					
					<source src="musica/California dreamin.mp3" type="audio/mp3">				
				</audio>				
				<h2>Another day in the paradisea - Pill Collins</h2>
				<audio controls="controls">				
					<source src="musica/Another day in the paradisea - Pill Collins.mp3" type="audio/mp3">
				</audio>
				<h2>Total Eclipse of the Heart - Bonnie Tyler</h2>
				<audio controls="controls">					
					<source src="musica/Total Eclipse of the Heart - Bonnie Tyler.mp3" type="audio/mp3">				
				</audio>
				<h2>Wish You Were Here - Pink Floy</h2>
				<audio controls="controls">					
					<source src="musica/Wish You Were Here -Pink Floyd (Live (Pulse)).mp3" type="audio/mp3">				
				</audio>
				<h2>Killing Me Softly - The Fugees</h2>
				<audio controls="controls">					
					<source src="musica/Killing Me Softly - The Fugees.mp3" type="audio/mp3">				
				</audio>
				<h2>Making Love Out Of Nothing At All - Air Supply </h2>
				<audio controls="controls">					
					<source src="musica/Making Love Out Of Nothing At All - Air Supply .mp3" type="audio/mp3">				
				</audio>
				<h2>Unchained Melody - The Righteous Brothers</h2>
				<audio controls="controls">					
					<source src="musica/Unchained Melody - The Righteous Brothers.mp3" type="audio/mp3">				
				</audio>
				<h2>We are the World - USA for Africa </h2>
				<audio controls="controls">					
					<source src="musica/We are the World - USA for Africa .mp3" type="audio/mp3">				
				</audio>				
				</div>
				
				<input type="radio" name="radio" id="radio4">			
				<div class="tab4">
					<h2>Videos</h2>
					<p>El género de la semana en los videos musicales es la música disco...
					les comparto un <a href="https://www.youtube.com/playlist?list=PLt_yn7bTlBuBTwwjvAD5bgzmtMlNkX4B6">link</a> con la mejor música Disco
					entre los que se encuentran los mas grandes, entre ellos 
					Lipps Inc, Gloria Gaynor, Donna Summer, Irene Cara,
					Anita Ward, Shocking Blue, The Pointer Sisters, Kool and the Gang, Derbage,Boney M, 
					Kc And The Sunshine Band, Selena Quintanilla ♥, Bee Gees, ABBA, Village people, 
					VAN McCOY, Dirty Dancing, Electric Light Orchestra, 
					Michael Jackson, Imagination, Michael Sembello, Blondie, Laura Branigan, Sandra, Dead or alive,
					Eddie Murphie, Pet Shop Boys, Eruption, Dschinghis Khan, entre otros</p>
					<br/>
					<p>Aqui un gran exito:</p>
					<video controls="controls"  width="400">
						<source src="videos/Gloria By Laura Bragnigan.mp4"  type="video/mp4">
					</video>	
					<h2>Laura Bragnigan - Gloria</h2>
					<p>Existe anime con grandes bandas sonoras, y que te mostramos un mix con algunos de los
					mejores opening y ending del anime japonés</p>
					<video controls="controls"  width="400">
						<source src="videos/Los mejores openings y endings del anime latino parte 1.mp4"  type="video/mp4">
					</video>
					<h2>Los mejores openings y endings del anime latino </h2>
					<p>Y como no podia faltar en la eleccion de videos musicales, el grande entre los grandes...</p>
					<video controls="controls"  width="400">
						<source src="videos/Los mejores videos  y canciones de Michael Jackson Parte 1.mp4"  type="video/mp4">
					</video>
					<h2>Michael Jackson ♫♪♫♪ </h2>
				</div>
				
				<input type="radio" name="radio" id="radio5">			
				<div class="tab5">
					<h2>Acerca de</h2>
					<h2 id="titulo">Diseñado por Michael Stiven Zapata Giraldo</h2>
					<img id="imagen" src="imagenes/autor.png" >
					<p>c.c 1.017.172.358</p>
					<p>Contacto Cel. 301 350 4085</p>
					<p>Universidad de Antioquia</p>
					<p>Desarrollo de aplicaciones web</p>
					</p>Laboratorio 2</p>
					<p>mstivenzg@gmail.com</p>					
				</div>	
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				<footer>			
						<a href="./autor.php">Sobre el autor Michael Stiven Zapata Giraldo</a><br/>
						mstivenzg@gmail.com</br>
						<a href="https://www.youtube.com/channel/UCh6qUNn2GQSiDuulMbfYxBw">Canal de YouTube</a><br/>
						San Javier - Medellín<br/>
						Contacto Cel. 301 350 4085<br/>
						Cll 39 DA 119 C 57 <br/>		
				</footer>			
			</div><!--cierre de ls clase content-->
		</div >	<!--cierre de la clase contenedor-->
	
	</body>

</html>
