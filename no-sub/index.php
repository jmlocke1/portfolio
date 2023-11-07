<?php 
require_once "../config/Config.php";
$background = imageOfTheDay();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio de José Miguel</title>
	<style>
		.header {
			background-image: url(<?= $background; ?>);
		}
	</style>
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
		<div class="proyectos">
			<h2 class="proyectos__heading">Proyectos de diseño en CSS.</h2>

			<div class="proyectos__grid">
				<div class="proyecto">
					<a href="/tienda-muebles/" title="Plantilla de una tienda de comercio electrónico de una tienda de muebles">
						<picture>
							<source srcset="build/img/portfolio/tienda-muebles.avif" type="image/avif">
							<source srcset="build/img/portfolio/tienda-muebles.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/tienda-muebles.jpg" width="500" heigth="300" alt="Plantilla de una tienda de comercio electrónico de una tienda de muebles">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">E-Commerce Tienda de Muebles</h3>
							<p class="proyecto__descripcion">Plantilla de una tienda de comercio electrónico de una tienda de muebles</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="/blogdecafe/" title="Blog sobre el café">
						<picture>
							<source srcset="build/img/portfolio/blogdecafe.avif" type="image/avif">
							<source srcset="build/img/portfolio/blogdecafe.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/blogdecafe.jpg" width="500" heigth="300" alt="Blog sobre el café">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">Blog de café</h3>
							<p class="proyecto__descripcion">Blog sobre el café y cursos relacionados</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="/frontendstore" title="Tienda de venta de camisetas">
						<picture>
							<source srcset="build/img/portfolio/frontendstore.avif" type="image/avif">
							<source srcset="build/img/portfolio/frontendstore.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/frontendstore.jpg" width="500" heigth="300" alt="Tienda de venta de camisetas">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">Frontend Store</h3>
							<p class="proyecto__descripcion">Tienda de venta de camisetas</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="/rock-edm-festival" title="Festival de Rock">
						<picture>
							<source srcset="build/img/portfolio/rock-edm-festival.avif" type="image/avif">
							<source srcset="build/img/portfolio/rock-edm-festival.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/rock-edm-festival.jpg" width="500" heigth="300" alt="Festival de Rock">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">Rock EDM Festival</h3>
							<p class="proyecto__descripcion">Festival de Rock. Plantilla CSS y JavaScript con desplazamiento automático y pase de diapositivas</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="/tech-pro" title="Landing Page de venta de una marca de auriculares.">
						<picture>
							<source srcset="build/img/portfolio/tech-pro.avif" type="image/avif">
							<source srcset="build/img/portfolio/tech-pro.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/tech-pro.jpg" width="500" heigth="300" alt="Landing Page de venta de una marca de auriculares.">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">TechPRO</h3>
							<p class="proyecto__descripcion">Ejemplo de Landing Page de venta de una marca de auriculares.</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="/arquitectura-bosque" title="Plantilla de un diseño de casas en el bosque.">
						<picture>
							<source srcset="build/img/portfolio/arquitectura-bosque.avif" type="image/avif">
							<source srcset="build/img/portfolio/arquitectura-bosque.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/arquitectura-bosque.jpg" width="500" heigth="300" alt="Plantilla de un diseño de casas en el bosque.">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">Arquitectura Bosque</h3>
							<p class="proyecto__descripcion">Plantilla de un diseño de casas en el bosque.</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="/nucleus" title="Plantilla de un diseño de aplicación móvil de pagos y cobros en línea.">
						<picture>
							<source srcset="build/img/portfolio/nucleus.avif" type="image/avif">
							<source srcset="build/img/portfolio/nucleus.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/nucleus.jpg" width="500" heigth="300" alt="Plantilla de un diseño de aplicación móvil de pagos y cobros en línea.">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">Nucleus</h3>
							<p class="proyecto__descripcion">Plantilla de un diseño de aplicación móvil de pagos y cobros en línea.</p>
						</div>
					</a>
				</div> <!-- proyecto -->
			</div> <!-- .proyectos__grid -->
		</div> <!-- .proyectos -->
		
		<div class="proyectos">
			<h2 class="proyectos__heading">Aplicaciones completas con CSS, PHP, Bases de datos y JavaScript.</h2>

			<div class="proyectos__grid">
				<div class="proyecto">
					<a href="<?= "https://". Config::DEVWEBCAMP; ?>" title="Proyecto de un Webcamp de conferencias.">
						<picture>
							<source srcset="build/img/portfolio/devwebcamp.avif" type="image/avif">
							<source srcset="build/img/portfolio/devwebcamp.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/devwebcamp.jpg" width="500" heigth="300" alt="Proyecto de un Webcamp de conferencias.">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">DevWebCamp</h3>
							<p class="proyecto__descripcion">Proyecto de un Webcamp de conferencias. Incluye panel de administración para editar las conferencias y los ponentes</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="<?= "https://". Config::BIENES_RAICES; ?>" title="Aplicación de una inmobiliaria.">
						<picture>
							<source srcset="build/img/portfolio/bienes-raices.avif" type="image/avif">
							<source srcset="build/img/portfolio/bienes-raices.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/bienes-raices.jpg" width="500" heigth="300" alt="Aplicación de una inmobiliaria.">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">Bienes Raíces</h3>
							<p class="proyecto__descripcion">Aplicación de una inmobiliaria, con gestión de propiedades y vendedores.</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="<?= "https://". Config::APPSALON; ?>" title="Gestión de reservas en una peluquería.">
						<picture>
							<source srcset="build/img/portfolio/appsalon.avif" type="image/avif">
							<source srcset="build/img/portfolio/appsalon.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/appsalon.jpg" width="500" heigth="300" alt="Gestión de reservas en una peluquería.">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">APPSALON</h3>
							<p class="proyecto__descripcion">Gestión de reservas en una peluquería. Se pueden reservar servicios.</p>
						</div>
					</a>
				</div> <!-- proyecto -->

				<div class="proyecto">
					<a href="<?= "https://". Config::UPTASK; ?>" title="Crea y administra tus proyectos.">
						<picture>
							<source srcset="build/img/portfolio/uptask.avif" type="image/avif">
							<source srcset="build/img/portfolio/uptask.webp" type="image/webp">
							<img loading="lazy" src="build/img/portfolio/uptask.jpg" width="500" heigth="300" alt="Crea y administra tus proyectos.">
						</picture>
						<div class="proyecto__contenido">
							<h3 class="proyecto__nombre">UpTask</h3>
							<p class="proyecto__descripcion">Crea y administra tus proyectos. Crea proyectos y tareas para los proyectos. Puedes cambiar las tareas a pendientes o completas.</p>
						</div>
					</a>
				</div> <!-- proyecto -->
			</div> <!-- .proyectos__grid -->
		</div> <!-- .proyectos -->
	</div>
</body>
</html>