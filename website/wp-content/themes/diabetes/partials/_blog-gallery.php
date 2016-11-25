<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>




<?php
wp_reset_query();
$articulos_alimentacion = get_posts(array(
    'showposts' => 6,
    'post_type' => 'post',
    'tax_query' => array(
        array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => 'blog')
    ))
);
 
foreach ($articulos_alimentacion as $articulo_alimentacion) {;



                 
?>


<?php //display the current and parent category (2 total)
$category = get_the_category($articulo_alimentacion->ID);
$current_category = $category[1];
$parent_category = $current_category->category_parent;
if ( $parent_category != 0 ) {
//echo '<a href="' . get_category_link($parent_category) . '">' . get_cat_name($parent_category) . '</a>';
}
$nombre_categoria = $current_category->cat_name;
$slug = $current_category->cat_slug;

$taxonomy_name = 'category';

$icono = get_field('icono', $taxonomy_name . '_' . $current_category->cat_ID);
$color = get_field('color', $taxonomy_name . '_' . $current_category->cat_ID);
?>

<!-- Article 1 (Alimentación) -->
<article class="small-12  medium-4  large-4  columns  text-center  article-block">
	<div class="small-12  columns  article-block__wrapper">
		<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="article-block__anchor" title="Ir al Artículo">
			<span class="article-block__category  article-block__category--<?php echo $current_category->slug;?>">
				<img src="<?php echo $icono;?>" alt="icono alimentación" class="article-block__category-icon">
				<?php echo $nombre_categoria;?>
			</span>
            
             <?php echo get_the_post_thumbnail( $articulo_alimentacion->ID, 'thumbnail', array( 'class' => 'article-block__image' ));?>
            
		
		</a>
		<div class="article-block__heading">
			<h1 class="article-block__title"><?php echo $articulo_alimentacion->post_title;?></h1>
		</div>
		<hr class="article-block__divider">
		<ul class="no-bullet  article-block__tags">
        <?php

$tags = wp_get_object_terms($articulo_alimentacion->ID , 'post_tag' , array('fields' => 'all'));
			
echo '<li class="article-block__tags-icon"><i class="fa fa-tag fa-fw"></i></li>';

foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );?>
			<li class="article-block__tags-item"><a href="<?php echo $tag_link;?>" class="article-block__tags-anchor" title="Lorem"><?php echo $tag->name;?>, </a></li>
<?php }?>
        

		</ul>
		<p class="article-block__excerpt"><?php echo $articulo_alimentacion->post_excerpt;?></p>
		<a href="<?php echo get_permalink($articulo_alimentacion->ID)?>" class="button  radius  grey  bordered" title="Leer más">Leer más</a>
	</div>
	<!-- end .article-block__wrapper -->
</article>
<!-- end .article-block -->


				<?php }  ?>


<!-- Actions -->
<div class="small-12  columns  text-center  article-gallery__actions">
	<a href="#" class="button  large  grey  bordered" title="Cargar más">Cargar más <i class="fa fa-plus fa-fw"></i></a>
</div>
<!-- end .article-gallery__actions -->






					
