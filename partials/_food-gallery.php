
<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>


<?php
$articulos_alimentacion = get_posts(array(
    'showposts' => 6,
    'post_type' => 'post',
    'tax_query' => array(
        array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => 'alimentacion')
    ))
);
 
foreach ($articulos_alimentacion as $articulo_alimentacion) {?>


<article class="small-12  medium-4  large-4  columns  text-center  article-block">
	<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="article-block__anchor" title="Ir al Artículo">
		<span class="article-block__category  article-block__category--alimentacion">
			<img src="images/articles/article-icon_alimentacion.png" alt="icono alimentación" class="article-block__category-icon">
			<!--Alimentación-->
		</span>
        
        
         <?php echo get_the_post_thumbnail( $articulo_alimentacion->ID, 'thumbnail', array( 'class' => 'article-block__image' ));?>
        
		
	</a>
	<div class="article-block__heading">
		<h1 class="article-block__title"><?php echo $articulo_alimentacion->post_title;?></h1>
	</div>
	<hr class="article-block__divider">
	<p class="article-block__excerpt"><?php echo $articulo_alimentacion->post_excerpt;?></p>
	<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="button  radius  grey  bordered" title="Leer más">Leer más</a>
</article>
<!-- end .article-block -->

<?php }?>







<!-- Actions -->
<div class="small-12  columns  text-center  article-gallery__actions">
	<a href="#" class="button  large  soft-red  bordered" title="Cargar más">Cargar más <i class="fa fa-plus fa-fw"></i></a>
</div>
<!-- end .article-gallery__actions -->