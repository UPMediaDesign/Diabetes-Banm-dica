<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>


<?php
$id = 8; // id de la categoría padre<br />
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
	'child_of' => $id
) );

foreach ($categories as $category)
{
	
	$cat_id= $category->term_id;
    query_posts("cat=$cat_id&posts_per_page=1");
	if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
    
    <!-- Article 1 -->
<article class="small-12  medium-6  large-6  columns  diabetes-article">
	<div class="small-12 columns  diabetes-article__wrapper">
		<div class="row">
			<div class="small-12  medium-5  large-5  columns">
				<div class="row">
				
                    
                      <?php if ( has_post_thumbnail(get_the_ID()) ) {
							
							 echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array('class' => 'img-full') );
							
						};?>
                    
                    
				</div>
			</div>
			<div class="small-12  medium-7  large-7  columns  diabetes-article__info">
				<span class="diabetes-article__category"><?php echo $category->cat_name;?></span>
				<h1 class="diabetes-article__title"><?php the_title();?></h1>
				<p class="diabetes-article__excerpt"><?php the_excerpt();?></p>
				<a href="#" class="button  tiny  radius  red" title="Leer más">Leer más</a>
			</div>
			<!-- end .diabetes-article__info -->
		</div>
		<!-- end .row -->
	</div>
	<!-- end .diabetes-article__wrapper -->
</article>
<!-- end .diabetes-article -->

    
	
	

<?php endwhile; endif; 
}
?>


        

				


<div class="small-12  columns  text-center article-gallery__actions">
	<a href="#" class="button  large  soft-red  bordered" title="Cargar más">Cargar más <i class="fa fa-plus fa-fw"></i></a>
</div>
<!-- end .article-gallery__actions -->