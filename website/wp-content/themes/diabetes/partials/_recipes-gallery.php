

<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>


	 <?php 
				query_posts(array( 
					'post_type' => 'recetas',
					'showposts' => 6 
					) );  
				 while (have_posts()) : the_post();
						
				 $imagen = get_field("imagen_principal");
				 $size = 'recetas';
   				 $porciones = get_field("porciones", $post_id);
                 $tiempo = get_field("tiempo_de_preparacion");
				 $porcion_hc = get_field("porcion_hc");
                 $hc = get_field("hidratos_de_carbono");
                 $ingredientes = get_field("ingredientes");
                 $preparacion = get_field("preparacion");
				 $extracto = get_field("extracto");
						
						?> 
				 
				 

<!-- Article 1 -->
<article class="small-12  medium-4  large-4  columns  text-center  recipe-article">
	<div class="recipe-article__image">
		
		<?php 
			if( $imagen ) {
				echo wp_get_attachment_image( $imagen, $size, false, array('class'=>'img-full') );
			}
		?>
		<a href="<?php the_permalink(get_the_ID());?>" class="button  small  radius  white  bordered" title="Ver Receta">Ver Receta</a>
		
		<!-- end .recipe-article__image -->
	</div>

	<div class="small-12  columns  recipe-article__info">
		<h1 class="recipe-article__title"><?php the_title();?></h1>
		<p class="recipe-article__excerpt"><?php echo $extracto ?></p>
		<!--<ul class="no-bullet  recipe-article__data">
			<li class="recipe-article__data-item">100g.</li>
			<li class="recipe-article__data-item">81 hidratos de carbono</li>
		</ul>
        -->

	</div>
	<!-- end .recipe-article__info -->
</article>
<!-- end .recipe-article -->
					
<?php  endwhile;?>

<!-- Actions -->
<div class="small-12  columns  text-center  article-gallery__actions">
	<a href="#" class="button  large  grey  bordered" title="Cargar más">Cargar más <i class="fa fa-plus fa-fw"></i></a>
</div>
<!-- end .article-gallery__actions -->