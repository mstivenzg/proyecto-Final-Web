<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$conex=mysqli_connect("localhost","root","","registro");

$consulta="SELECT * FROM administrador WHERE usuario='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:administradorInicio.php");
}
else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
	<?php
}

mysqli_free_result($resultado);
mysqli_close($conex);