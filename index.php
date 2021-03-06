<?php
	require_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>AyuDAR</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
	<nav class="light-blue lighten-1" role="navigation">
	<div class="nav-wrapper container">
		<ul class="right hide-on-med-and-down">
			<li><a href="registrarse.php" >Registrarse<i class="material-icons right">create</i></a></li>
			<li><a href="login.php" >Ingresar<i class="material-icons right">lock_outline</i></a></li>
		</ul>
		<ul id="nav-mobile" class="side-nav">
			<li><a href="login.php">Ingresar</a></li>
			<li><a href="registrarse.php">Registrarse</a></li>
		</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
	</nav>
	
	<div class="section no-pad-bot" id="index-banner">
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col s6 offset-s4"><img id="logohome" src="images/logo1.png" width="350px"/></div>
		</div>
	</div>

	<div class="container">
	<div class="section">

		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center homeicons"><i class="material-icons">pan_tool</i></h2>
					<h5 class="center homeh5">Necesito</h5>
					<br>
					<p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
				</div>
			</div>

		    <div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center homeicons"><i class="material-icons">group</i></h2>
					<h5 class="center homeh5">Ofrezco</h5>
					<br>
					<p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
				</div>
		    </div>

		    <div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center homeicons"><i class="material-icons">create</i></h2>
					<h5 class="center homeh5">Registrate</h5>
					<br>
					<p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
				</div>
		    </div>
		</div>
	</div>
	<br><br>
	</div>

	<footer class="page-footer orange">
	<div class="container">
		<div class="row">
			<div class="col l9 s12">
				<h5 class="white-text">Nosotros</h5>
				<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
			</div>
		    <div class="col l3 s12">
				<h5 class="white-text">Redes sociales</h5>
				<img src="images/fblogo.png" width="35px"/>
				<img src="images/twlogo.png" width="35px"/>
		    </div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Made in <a class="orange-text text-lighten-3" href="http://www.unlam.edu.ar/">UNLAM</a>
		</div>
	</div>
	</footer>


  <!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

	</body>
</html>
