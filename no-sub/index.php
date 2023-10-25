<?php 
require_once "../config/Config.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio de José Miguel</title>
</head>
<body>
	<h1>Portfolio personal de José Miguel</h1>

	<h2>Proyectos de diseño en CSS.</h2>
	<p>E-Commerce <a href="/tienda-muebles/">Tienda de Muebles</a> </p>	
	<p><a href="/blogdecafe/">Blog de café</a>. Blog sobre el café, y cursos</p>
	<p><a href="/frontendstore">Frontend Store</a>. Tienda de venta de camisetas</p>
	<p><a href="/rock-edm-festival">Rock EDM Festival</a>. Festival de Rock</p>
	<p><a href="/tech-pro">TechPro</a>. Ejemplo de Landing Page de venta de una marca de auriculares.</p>

	<h2>Aplicaciones completas con CSS, PHP, Bases de datos y JavaScript.</h2>

	<p><a href="<?= "https://". Config::DEVWEBCAMP; ?>">DevWebCamp</a>. Proyecto de un Webcamp de conferencias</p>
	<p><a href="<?= "https://". Config::BIENES_RAICES; ?>">Bienes Raíces</a>. Aplicación de una inmobiliaria, con gestión de propiedades y vendedores</p>
	<p><a href="<?= "https://". Config::APPSALON; ?>">APPSALON</a>. Gestión de reservas en una peluquería. Se pueden reservar servicios.</p>
	<p><a href="<?= "https://". Config::UPTASK; ?>">UpTask</a>. Crea y administra tus proyectos. Crea proyectos y tareas para los proyectos. Puedes cambiar las tareas a pendientes o completas.</p>

</body>
</html>