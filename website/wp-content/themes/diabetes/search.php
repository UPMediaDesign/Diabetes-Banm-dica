<?php get_header();?>
                
                
                
                
 <form id="blog-search" class="row  row-wide" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
 
 
 <div class="row row-custom">
						
                        <div class="small-12  medium-5  large-5  columns  blog-search__block">
							<h1 class="blog-search__title">Resultados de búsqueda > <?php echo single_cat_title("", false);?></h1>
						</div>
						<!-- end .blog-search__block-->

						<div class="small-12  medium-7  large-7  columns  blog-search__block">
 
 <input id="blog-search__input" class="text" type="search"
 placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>"
 value="<?php echo get_search_query() ?>" name="s"
 title="<?php echo esc_attr_x( 'Buscar:', 'label' ) ?>" />
 </label>
 <button type="submit" id="blog-search__button" class="button"><i class="fa fa-search fa-fw"></i></button>

						</div> 
  </div>
</form>

				
						<!-- end .blog-search__block -->
				
					<!-- end .row-custom -->
		
				<!-- end #blog-search -->

				
				<!-- Blog Intro -->
				<section class="row  row-custom  blog-intro">
					<!-- Blog Heading -->
					
					<!-- end .blog-heading -->

					<!-- Featured Article -->
					
                    
             
					
					<!-- Blog Intro Character -->
					<div class="small-12  medium-6  large-6  columns  text-right  blog-intro__character">
						<img src="<?php bloginfo('template_directory');?>/images/objects/sitting-character.png" alt="sitting character">
					</div>
					<!-- end .blog-intro__character -->
				</section>
				<!-- end .blog-intro -->
				
				<!-- Blog Articles -->
				<section id="blog-articles" class="row  row-wide">
					<div class="row  row-custom  article-gallery">
						
						<?php foreach ($posts as $articulo_alimentacion):;

if($articulo_alimentacion->post_type == 'post'){

                 
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
<article class="small-12  medium-4  large-4  columns  text-center  article-block end">
	<div class="small-12  columns  article-block__wrapper">
		<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="article-block__anchor" title="Ir al Artículo">
			<span class="article-block__category  article-block__category--<?php echo $slug;?>">
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
		<a href="single-blog.html" class="button  radius  grey  bordered" title="Leer más">Leer más</a>
	</div>
	<!-- end .article-block__wrapper -->
</article>
<!-- end .article-block -->
<?php 
	
};
endforeach; ?>
						
					</div>
				</section>
				<!-- end #blog-articles -->
				
				
	






<?php get_footer();?>