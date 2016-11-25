<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>




<?php
			// get all the categories from the database
			$cats = get_categories(
			array(
    'orderby' => 'name',
    'order'   => 'ASC',
	'parent' => 0
) 
			); 

			
				foreach ($cats as $cat) {
					
					$cat_id= $cat->term_id;

					
					query_posts("cat=$cat_id&posts_per_page=1");
					
					if (have_posts()) : while (have_posts()) : the_post(); 
					$image = get_field('icono', $cat);
					$icono = get_field('icono', $taxonomy_name . '_' . $category->cat_ID);
					?>

						
                     
                     <!-- Article 3 (Charlas) -->
<article class="small-12  medium-4  large-4  columns  text-center  article-block">
	
	<div class="article-block__image">
		<span class="article-block__category  article-block__category--<?php echo $cat->slug;?>">
			<img src="<?php echo $image;?>" alt="icono charlas" class="article-block__category-icon">
			<?php echo $cat->name;?>
		</span>
	        
	    <?php if ( has_post_thumbnail(get_the_ID()) ) {
			echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array('class' => 'article-block__image') );
		};?>

		<a href="<?php the_permalink();?>" class="button  radius  white  bordered" title="Leer más">Leer más</a>
	</div>

	<div class="article-block__heading" style="margin-top: 1rem;">
		<h1 class="article-block__title"><?php the_title();?></h1>
	</div>
	<hr class="article-block__divider">
	<p class="article-block__excerpt"><?php the_excerpt();?></p>
	
</article>
<!-- end .article-block -->   
                        
	<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
<?php }  ?>

<!-- Actions -->
<div class="small-12  columns  text-center  article-gallery__actions">
	<a href="<?php echo get_page_link(13)?>" class="button  large  red  bordered" title="Cargar más">Ir al Blog <i class="fa fa-angle-right fa-fw"></i></a>
</div>
<!-- end .article-gallery__actions -->