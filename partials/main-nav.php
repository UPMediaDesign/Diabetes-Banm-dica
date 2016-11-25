<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>

<nav id="main-nav" class="top-bar">
	<div class="top-bar-left  main-nav__left">
		<a href="<?php bloginfo('url')?>" class="main-nav__logo" title="Ir al Inicio">
			<img src="<?php bloginfo('template_directory')?>/images/logos/contigo-siempre-logo.png" alt="Contigo Siempre">
		</a>
	</div>
	<!-- end .main-nav__left -->

	<div class="top-bar-right  main-nav__right">
		<!--<ul class="menu  main-nav__menu">-->
			
			

				<?php wp_nav_menu(array(
				'container' => '',
				'menu_class' => 'menu  main-nav__menu',
	            'theme_location' => 'primary',
				'link_before' => '<span>', 
				'link_after' => '</span>'
				)); 
				?>
			
			
			
			
			<!--
			
			<li class="main-nav__menu-item">
				<a href="#" class="main-nav__menu-anchor" title="Beneficios Programa">Beneficios Programa</a>
			</li>
			

			<li class="main-nav__menu-item">
				<a href="#" class="main-nav__menu-anchor" title="Diabetes">Diabetes</a>
			</li>
			

			<li class="main-nav__menu-item">
				<a href="#" class="main-nav__menu-anchor" title="Alimentación">Alimentación</a>
			</li>
			

			<li class="main-nav__menu-item">
				<a href="#" class="main-nav__menu-anchor" title="Comunidad">Comunidad</a>
			</li>
			

			<li class="main-nav__menu-item">
				<a href="#" class="main-nav__menu-anchor  main-nav__menu-anchor--last" title="Blog">Blog</a>
			</li>
		

			<li class="main-nav__menu-item">
				<img src="<?php bloginfo('template_directory')?>/images/logos/banmedica-logo.png" class="main-nav__menu-image" alt="Logo Banmedica">
				<a href="#" class="main-nav__menu-button" title="Inscribirme">Inscribirme</a>
			</li>
			<!-->
		<!--</ul>-->
		<!-- end .main-nav__menu -->
	</div>
	<!-- end .main-nav__right -->
</nav>
<!-- end #main-nav -->