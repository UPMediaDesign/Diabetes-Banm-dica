<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>


<nav id="mobile-nav" class="title-bar">
	<!-- Left -->
	<div class="mobile-nav__left">
		<button class="mobile-nav__button" type="button" data-open="sidebar">
			<i class="fa fa-bars fa-fw"></i> Menu
		</button>
		
	</div>
	<!-- end .mobile-nav__left -->

	<!-- Center -->
	<div class="mobile-nav__center">
		<span class="mobile-nav__title">Aliméntate Sano</span>
	</div>
	<!-- end .mobile-nav__center -->
</nav>
<!-- end #mobile-nav -->