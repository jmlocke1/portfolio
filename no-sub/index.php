<?php 
require_once "../config/Config.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio de José Miguel</title>
	<link rel="stylesheet" href="build/css/normalize.css">
	<link rel="stylesheet" href="build/css/styles.css">
</head>
<body>
	<header class="header">
		<div class="contenedor contenido-header">
			<div class="barra">
				<div class="logo">
					<div class="h1 nombre-sitio">Portfolio de <span>José Miguel</span></div>
				</div>
				<nav class="navegacion">
					<a class="link" href="#">Inicio</a>
					<a class="link" href="#">Nosotros</a>
					<a class="link" href="#">Modelos</a>
					<a class="link" href="#">Galería</a>
					<a class="link" href="#">Contacto</a>
				</nav>
			</div>
			<div class="slogan">
				<div class="h1">Trabajos que he realizado</div>
				<p>Proyectos personales que he desarrollado</p>
			</div>
		</div>
	</header>

	<div class="contenedor">
		<h1>Portfolio personal de José Miguel</h1>

		<p>En este portfolio muestro mis proyectos personales y prácticas realizadas.</p>
	</div>
	
	<div class="contenedor">
		<h2>Proyectos de diseño en CSS.</h2>
		<p>E-Commerce <a href="/tienda-muebles/">Tienda de Muebles</a> </p>	
		<p><a href="/blogdecafe/">Blog de café</a>. Blog sobre el café, y cursos</p>
		<p><a href="/frontendstore">Frontend Store</a>. Tienda de venta de camisetas</p>
		<p><a href="/rock-edm-festival">Rock EDM Festival</a>. Festival de Rock</p>
		<p><a href="/tech-pro">TechPro</a>. Ejemplo de Landing Page de venta de una marca de auriculares.</p>
		<p><a href="/arquitectura-bosque">Arquitectura Bosque</a>. Plantilla de un diseño de casas en el bosque</p>


		<h2>Aplicaciones completas con CSS, PHP, Bases de datos y JavaScript.</h2>

		<p><a href="<?= "https://". Config::DEVWEBCAMP; ?>">DevWebCamp</a>. Proyecto de un Webcamp de conferencias</p>
		<p><a href="<?= "https://". Config::BIENES_RAICES; ?>">Bienes Raíces</a>. Aplicación de una inmobiliaria, con gestión de propiedades y vendedores</p>
		<p><a href="<?= "https://". Config::APPSALON; ?>">APPSALON</a>. Gestión de reservas en una peluquería. Se pueden reservar servicios.</p>
		<p><a href="<?= "https://". Config::UPTASK; ?>">UpTask</a>. Crea y administra tus proyectos. Crea proyectos y tareas para los proyectos. Puedes cambiar las tareas a pendientes o completas.</p>

	</div>

	

	

</body>
</html>