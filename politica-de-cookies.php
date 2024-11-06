<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gesruta</title>
	<meta name="description" content="Descripción de tu sitio web">
	<meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3">
	<meta name="author" content="Tu Nombre">
	<meta http-equiv="content-language" content="es">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="https://www.gesruta.com/">
	<meta property="og:title" content="Título de tu página">
	<meta property="og:description" content="Descripción de tu sitio web">
	<meta property="og:url" content="https://www.gesruta.com/">
	<meta property="og:image" content="https://www.gesruta.com/imagen.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Título de tu página">
	<meta name="twitter:description" content="Descripción de tu sitio web">
	<meta name="twitter:image" content="https://www.gesruta.com/imagen.jpg">
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" href="static/css/base.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="shortcut icon" href="http://www.gesruta.com/wp-content/uploads/2018/03/favicon.ico">
	<link rel="apple-touch-icon" href="http://www.gesruta.com/wp-content/uploads/2018/03/apple-touch-icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Zekton+Extended+Heavy&display=swap"> </head>
<body>
	<?php
    include_once("templates/header.php");
    ?>
		<main>
			<section id="gesruta">
				<div class="container-fluid p-0" style="position: relative;"> <img src="static/img/gesruta.png" class="responsive-img" alt="Imagen de Ancho Completo">
					<div class="text-container">
						<h4 class="animate__animated animate__backInLeft">
                        Soluciones de Futuro en el Presente...
                    </h4> </div>
				</div>
			</section>
			<section class="cookies">
				<div class="container mt-3">
					<h2>Política de Cookies</h2>
					<p>Utilizamos cookies en nuestro sitio web para mejorar la experiencia del usuario. Al utilizar nuestro sitio web, usted acepta todas las cookies de acuerdo con nuestra Política de Cookies.</p>
					<h2>¿Qué son las cookies?</h2>
					<p>Las cookies son pequeños archivos de texto que se almacenan en su dispositivo cuando visita un sitio web. Estas cookies se utilizan para diversas finalidades, incluyendo el seguimiento de la actividad del usuario, la personalización de la experiencia del usuario y la recopilación de información estadística.</p>
					<h2>¿Cómo utilizamos las cookies?</h2>
					<p>Utilizamos cookies para los siguientes fines:</p>
					<ul>
						<li>Mejorar la funcionalidad y rendimiento de nuestro sitio web.</li>
						<li>Personalizar su experiencia de usuario.</li>
						<li>Analizar el tráfico y la navegación en nuestro sitio web.</li>
					</ul>
					<h2>¿Qué tipos de cookies utilizamos?</h2>
					<p>Utilizamos tanto cookies propias como cookies de terceros en nuestro sitio web. Los tipos de cookies que utilizamos pueden incluir:</p>
					<ul>
						<li>Cookies esenciales: Estas cookies son necesarias para el funcionamiento básico de nuestro sitio web.</li>
						<li>Cookies de rendimiento: Estas cookies recopilan información sobre cómo los usuarios interactúan con nuestro sitio web, lo que nos permite mejorar su funcionamiento.</li>
						<li>Cookies de funcionalidad: Estas cookies se utilizan para recordar las preferencias de los usuarios y proporcionar funcionalidades personalizadas.</li>
						<li>Cookies de publicidad: Estas cookies se utilizan para mostrar anuncios relevantes a los usuarios en función de su comportamiento de navegación.</li>
					</ul>
					<h2>¿Cómo puedo gestionar las cookies?</h2>
					<p>Puede gestionar las cookies a través de la configuración de su navegador. Puede optar por bloquear o eliminar las cookies en cualquier momento. Sin embargo, tenga en cuenta que la desactivación de cookies puede afectar la funcionalidad de nuestro sitio web.</p>
					<p>Para obtener más información sobre cómo gestionar las cookies, consulte la configuración de su navegador.</p>
				</div>
			</section>
			<hr> </main>
		<hr>
		<?php
    include_once("templates/footer.php");
    ?>
			<div class="cookie-container" id="cookie-container"> En esta web utilizamos cookies propias y de terceros para mejorar tu experiencia de navegación y uso de la web. <button class="btn cookie-btn" onclick="aceptarCookies()">Aceptar</button> <a class="btn cookie-link" href="politica-de-cookies.php" target="_blank"> Más Información</a> </div>
			<script src="static/js/code.jquery.com_jquery-3.6.0.min.js"></script>
			<script src="static/js/bootstrap.min.js"></script>
			<script src="static/js/base.js"></script>
</body>
</html>