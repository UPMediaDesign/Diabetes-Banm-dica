<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" > <![endif]-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
	<title><?php wp_title('|', true, 'right'); ?></title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Replace meta description here -->
	<meta name="description" content="Here goes the meta description for the website" />
	<meta name="robots" content="follow, all" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- Facebook Meta tags -->
	<!--<meta property="og:title" content="UCINF" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="/here/goes/the/main/image.jpg" />
	<meta property="og:image:width" content="630" />
	<meta property="og:image:height" content="315" />
	<meta property="og:url" content="here goes the url" />
	<meta property="og:description" content="Here goes the website description" />-->

	<!-- Font Awesome Icon Library | v.4.6.1 -->
	<script src="https://use.fontawesome.com/dc6310ad48.js"></script>

	<!-- Google Fonts Libraries -->
	<!-- Catamaran -->
	<link href="https://fonts.googleapis.com/css?family=Catamaran:300,400,500,600,700" rel="stylesheet">
	<!-- Montserrat -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!-- Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Store Files -->
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/plugins/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/plugins/slick/slick-theme.css">
	<!--<link rel="stylesheet" type="text/css" href="css/styles.css" />-->

	<?php wp_head();?>
	

	
</head>

<body <?php body_class();?>>


<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			
            <!-- Header -->
			<header data-interchange="[<?php echo get_stylesheet_directory_uri();?>/partials/mobile-nav.php, small], [<?php echo get_stylesheet_directory_uri();?>/partials/mobile-nav.php, medium], [<?php echo get_stylesheet_directory_uri();?>/partials/main-nav.php, large]"></header>
            
            
            <!-- Sidebar -->
			<div class="off-canvas position-left" id="sidebar" data-off-canvas>
				
				<ul id="sidebar-menu" class="vertical menu" data-drilldown data-back-button='<li class="js-drilldown-back"><a>Volver</a></li>'>
					<li class="sidebar-menu__item">
						<a href="<?php bloginfo('url');?>" class="sidebar-menu__anchor" title="Ir al Inicio">
							<img src="<?php bloginfo('template_directory');?>/images/logos/contigo-siempre-logo.png" class="sidebar-menu__logo" alt="Logo Programa Contigo Siempre">
						</a>
					</li>
					<li class="sidebar-menu__item">
						<a href="<?php bloginfo('url');?>/beneficios-del-programa/" class="sidebar-menu__anchor" title="Beneficios Programa">Beneficios Programa</a>
					</li>
					<li class="sidebar-menu__item">
						<a href="<?php bloginfo('url');?>/diabetes" class="sidebar-menu__anchor" title="Diabetes">Diabetes</a>
					</li>
					<li class="sidebar-menu__item">
						<a href="<?php bloginfo('url');?>/alimentacion" class="sidebar-menu__anchor" title="Alimentación">Alimentación</a>
					</li>
					<?php /* <li class="sidebar-menu__item">
						<a href="<?php bloginfo('url');?>/comunidad" class="sidebar-menu__anchor" title="Comunidad">Comunidad</a>
					</li> */?>
					<li class="sidebar-menu__item">
						<a href="<?php bloginfo('url');?>/blog" class="sidebar-menu__anchor" title="Blog">Blog</a>
					</li>
					<li class="sidebar-menu__item">
						<a href="<?php bloginfo('url');?>/programa" class="button  radius  red  sidebar-menu__button" title="Inscribirme">Inscribirme</a>
					</li>
				</ul>
			</div>
			<!-- end #sidebar -->

			
            
            
            
            
            
    
   <div class="off-canvas-content  main-container" data-off-canvas-content>         

