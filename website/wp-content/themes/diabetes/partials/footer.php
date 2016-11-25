<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>

<!-- Footer Slideshow -->
<section class="row  row-wide  footer-slideshow">
	<img src="<?php bloginfo('template_directory');?>/images/objects/red-arrow.png" class="footer-slideshow__arrow" alt="red arrow">
	
	<!-- Footer Slider -->
	<div id="footer-slider" class="page-slider">
	
	
	
	<?php 
	wp_reset_query();
    query_posts(array( 
        'post_type' => 'banners',
        'showposts' => -1 
    ) );  
    while (have_posts()) : the_post(); 
	if( has_term( 'footer', 'posiciones' ) ) {	
		?>
       
        				
	   <div id="footer-slide-<?php the_ID();?>" class="footer-slider__block" style="background: url(<?php echo the_field('imagen')?>);" >
			<div class="row  row-custom  footer-slider__block-wrapper">
				<div class="small-12  medium-6  medium-push-3  large-6  large-push-3  columns  text-center  medium-text-right  footer-slider__block-wrapper-cell">
					<h1 class="footer-slider__block-title"><?php the_title();?></h1>
					<p class="footer-slider__block-text"><?php the_field('bajada');?></p>
					<a href="<?php the_field('url_boton');?>" class="button  radius  white  transparent" title="Conoce nuestro Blog"><?php the_field('texto_boton');?></a>
				</div>
			</div>
		</div>



<?php };endwhile;?>
	
	
	
	
	

   
    	
    
  		
				

   
  
   
   
    </div>
		
	<!-- end #footer-slider -->

	<!-- Slider Script -->
	<script type="application/javascript">
		jQuery(document).ready(function(){
			jQuery('#footer-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: '<button type="button" class="slick-prev slick-arrow trsn"></button>',
				nextArrow: '<button type="button" class="slick-next slick-arrow trsn"></button>',
				dots: false,
				fade: true,
				centerMode: true,
				cssEase: 'ease-in-out',
				speed: 750,
				autoplay: false,
				autoplaySpeed: 5000,
				pauseOnHover: false,
				pauseOnDotsHover: false,
				responsive: [
					{
						breakpoint: 640,
						settings: {
							dots: true,
							arrows: false,
						}
					}
				]
			});
		});
	</script>
	<!-- end Slider Script -->
</section>
<!-- end .footer-slideshow -->

<!-- Footer Support -->
<section class="row  row-custom  footer-support">
	<div class="small-12  medium-7  large-5  columns">
		<p class="footer-support__text" style="text-align:right;">Este programa cuenta con el apoyo de:</p>
	</div>

	<div class="small-12  medium-5  large-5 large-pull-2  columns">
		<img src="<?php bloginfo('template_url');?>/images/logos/footer-logos.jpg" class="footer-support__logos" alt="Quienes nos apoyan">
	</div>
</section>
<!-- end .footer-support -->

<!-- Footer Content -->
<section class="row  row-wide  footer-content">
	<div class="row  row-custom  footer-content__wrapper">
		<img src="<?php bloginfo('template_url');?>/images/objects/footer-character.png" class="footer-content__character" alt="footer character">

		<div class="small-12  medium-6  large-6  columns  footer-content__left">
			<div class="small-12  medium-12  large-12  columns  footer-content__block">
				<div class="footer-content__block-cell">
					<img src="<?php bloginfo('template_url');?>/images/logos/contigo-siempre-logo-footer.png" class="footer-content__logo" alt="Programa Contigo Siempre">
				</div>
			</div>
			<!-- end .footer-content__block -->

			<?php /* <div class="small-12  medium-6  large-6  columns  footer-content__block">
				<!--<ul class="no-bullet  footer-content__menu">
					<li class="footer-content__menu-item">
						<a href="#" class="footer-content__menu-anchor" title="¿Qué es el Programa Contigo Siempre?">¿Qué es el Programa Contigo Siempre?</a>
					</li>
					
					<li class="footer-content__menu-item">
						<a href="#" class="footer-content__menu-anchor" title="¿Cómo me inscribo?">¿Cómo me inscribo?</a>
				
					<li class="footer-content__menu-item">
						<a href="#" class="footer-content__menu-anchor" title="Preguntas Frecuentes">Preguntas Frecuentes</a>
					</li>
					
				</ul>
                -->
				<!-- end .footer-content__menu -->
			</div> */?>
			<!-- end .footer-content__block -->
		</div>
		<!-- end .footer-content__left -->
		
		<div class="small-12  medium-6  large-6  columns  footer-newsletter">
			<div class="small-12  columns  footer-newsletter__wrapper">
				<h1 class="footer-newsletter__title">Newsletter</h1>
				<p class="footer-newsletter__text">Reciba información de su interés</p>

				<!-- Newsletter Form -->
				<form id="newsletter-form">
					<input type="email" id="newsletter-form__input" class="text" placeholder="Ingresa tu correo">
					<input type="submit" id="newsletter-form__submit" class="button">
				</form>
				<!-- end #newsletter-form -->
			</div>
			<!-- end .footer-newsletter__wrapper -->
		</div>
		<!-- end .footer-newsletter -->
	</div>
	<!-- end .footer-content__wrapper -->
</section>
<!-- end .footer-content -->

<!-- Footer Copyright -->
<section class="row  row-custom  text-center  footer-copyright">

<div class="success callout hidden" data-closable>
  <p>Todo listo, gracias por inscribirte</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
	<span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="alert callout hidden" data-closable>
  <p>No se pudo inscribir tu correo, intenta nuevamente</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
	<span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="warning callout hidden" data-closable>
  <p>Hubo un problema con la inscripción, revisa los datos e intenta nuevamente</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
	<span aria-hidden="true">&times;</span>
  </button>
</div>

	<div class="small-12  columns">
		<img src="<?php bloginfo('template_directory');?>/images/logos/banmedica-logo.png" class="footer-copyright__logo" alt="Logo Banmedica">
		<span class="footer-copyright__divider"></span>
		<p class="footer-copyright__text">Apoquindo 3600, Las Condes.  Todos los derechos reservados</p>
	</div>
</section>
<!-- end .footer-copyright -->

<style>
	.hidden.callout{display:none;}
</style>
<script>
jQuery("#newsletter-form").submit(function(event) {
	event.preventDefault();
	if(jQuery('#newsletter-form__input').val().length > 7){
		inscribeUsuario();
	}else{
		jQuery('.callout.warning').removeClass('hidden')
	}
});
	
function inscribeUsuario() {
	email	= jQuery('#newsletter-form__input').val();
	jQuery.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'inscribeUsuario' , email : email }),
		success: function(data){

			if(data == 4){
				jQuery('form').trigger('reset');
				//console.log('pregunta recibida correctamente')	;
				jQuery('.callout.success').removeClass('hidden')

			}else if(data == 3){
				//console.log('snap! no se pudo enviar tu pregunta')	;
				jQuery('.callout.warning').removeClass('hidden')
			}else if(data == 5){
				jQuery('.callout.alert').removeClass('hidden')
			}else{
				console.log(data)
			}
		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}	
	});
}
</script>










