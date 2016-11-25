<?php
/*
Template Name: Blog
*/
get_header();?>
    
                
<form id="blog-search" class="row  row-wide" role="search" method="get" action="<?php echo home_url( '/' ); ?>"> 
	<div class="row row-custom">
							
		<div class="small-12  medium-5  large-5  columns  blog-search__block">
			<h1 class="blog-search__title">Blog</h1>
		</div>
		<!-- end .blog-search__block-->

		<div class="small-12  medium-7  large-7  columns  blog-search__block">
		 
			<input id="blog-search__input" class="text" type="search" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Buscar:', 'label' ) ?>" />
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
					<div class="small-12  columns  blog-heading">
						<h1 class="blog-heading__title">Destacado</h1>
					</div>
					<!-- end .blog-heading -->

					<!-- Featured Article -->
					
                    
             <?php       $posts = get_posts(array(
	'meta_query' => array(
		array(
			'key' => 'destacar',
			'value' => '1',
			'compare' => '=='
		)
	)
));

if( $posts )
{
	foreach( $posts as $post )
	{
		//setup_postdata( $post );
	?>


         <article class="small-12  medium-6  large-6  columns  featured-article">
         
         
         
           <?php echo get_the_post_thumbnail( $post->ID, 'destacado', array('class'=>'featured-article__image" alt="article image') );?>
						<h1 class="featured-article__title"><?php echo $post->post_title;?></h1>
						<p class="featured-article__excerpt"><?php echo $post->post_excerpt;?></p>
						<a href="<?php the_permalink($post->ID);?>" class="button  radius  red  bordered" title="Leer más">Leer más</a>
					</article>

<?php	}

	wp_reset_postdata();
}

?>
                    
                    
                 
					
					<!-- Blog Categories -->
					<div class="small-12  medium-6  large-6  columns  blog-cats">
						<!-- Blog Heading -->
						<div class="small-12  columns  blog-heading">
							<h1 class="blog-heading__title">Categorías</h1>
						</div>
						<!-- end .blog-heading -->
                        
                        
                        
                        <?php
$term_id = 22;
$taxonomy_name = 'category';
$termchildren = get_term_children( $term_id, $taxonomy_name );

foreach ( $termchildren as $child ) {
	$term = get_term_by( 'id', $child, $taxonomy_name );
	
	//var_dump($term);
	?>
    
     <a style="padding:0;margin:0;" href="<?php echo get_term_link( $child, $taxonomy_name );?>">
     
    <div class="small-4  columns  text-center  blog-cats__block">
   
							<div class="small-12  columns  block-cats__block-box  block-cats__block-box--<?php $color = get_field('color', $taxonomy_name . '_' . $term->term_id);echo $color;?>">
                            
								<div class="block-cats__block-wrapper">
       <?php
	   
                             $image = get_field('icono', $taxonomy_name . '_' . $term->term_id);?>
                                
									<img src="<?php echo $image;?>" class="inject-me  blog-cats__block-icon" alt="<?php echo $term->name;?>">
									<span class="blog-cats__block-title"><?php echo $term->name;?></span>
								</div>
							</div>
                            
                          
							<!-- end .block-cats__block-box -->
						</div>
       </a> 
  
   <?php }?> 

				
					</div>
					<!-- end .blog-cats -->
					
					<!-- Blog Intro Character -->
					<div class="small-12  medium-6  large-6  columns  text-right  blog-intro__character">
						<img src="<?php bloginfo('template_directory');?>/images/objects/sitting-character.png" alt="sitting character">
					</div>
					<!-- end .blog-intro__character -->
				</section>
				<!-- end .blog-intro -->
				
				<!-- Blog Articles -->
				<section id="blog-articles" class="row  row-wide">
					<div class="row  row-custom  article-gallery" data-interchange="[<?php echo get_stylesheet_directory_uri();?>/partials/_blog-gallery.php, small]"></div>
				</section>
				<!-- end #blog-articles -->
				
				
	









<?php get_footer();?>