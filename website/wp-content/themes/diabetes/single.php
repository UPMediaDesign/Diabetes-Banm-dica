<?php get_header();?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	
   <?php
$categories = get_the_category();
foreach( $categories as $category ) {
    if( 0 != $category->parent ) {
        //array_push( $cat_ID, $category->cat_ID );
		$cat_name =  $category->name;
		$taxonomy_name = 'category';
        $icono = get_field('icono', $taxonomy_name . '_' . $category->cat_ID);
	    $color = get_field('color', $taxonomy_name . '_' . $category->cat_ID);
		$imagen_principal = get_field('imagen_principal', $taxonomy_name . '_' . $category->cat_ID);
	
		
    }else{
		$cat_name =  $category->name;
		$taxonomy_name = 'category';
        $icono = get_field('icono', $taxonomy_name . '_' . $category->cat_ID);
	    $color = get_field('color', $taxonomy_name . '_' . $category->cat_ID);
		$imagen_principal = get_field('imagen_principal', $taxonomy_name . '_' . $category->cat_ID);
	
	}}?>
			<!-- Main Container -->
			
				<!-- Main Heading -->
				<section class="row  row-wide  text-center  main-heading">
					<div class="main-heading__category  <?php echo $color;?>">
						<div class="main-heading__category-icon">
                        
                        
                        
					   <img src="<?php echo $icono;?>" width="90px" style="width:90px !important" <?php /* class="inject-me" alt="icon bicycle" */?>>
						</div>
						<span class="main-heading__category-title">
                        
                        
                        <?php echo $cat_name;?>

                        </span>
					</div>






					<img src="<?php echo $imagen_principal;?>" class="main-heading__image" alt="single articulo">
				</section>
				<!-- end .main-heading -->
				
				<!-- Article Intro -->
				<section id="article-intro" class="row  row-wide">
					<div class="row  row-custom">
						<!-- Article Intro Content -->
						<div class="small-12  medium-8  large-8  columns  article-intro__content">
							<div class="small-12  columns  article-intro__content-wrapper">
								<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'article-intro__content-image' ) );?>
                           
								<h1 class="article-intro__content-title"><?php the_title();?></h1>

								<?php the_content();?>
								
								<!-- Tags -->
								<ul class="no-bullet  article-intro__content-tags">
					    
									<?php
									$tags = get_the_tags();
									if ($tags) {
									  foreach($tags as $tag) {
									echo '<li class="article-block__tags-icon"><i class="fa fa-tag fa-fw"></i></li>';
									?>
										
												<li class="article-block__tags-item"><a href="<?php echo $tag_link;?>" class="article-block__tags-anchor" title="Lorem"><?php echo $tag->name;?>, </a></li>
									<?php } }?>
								</ul>
								
								<a class="return-news" href="<?php echo home_url();?>/blog/" title="Volver a Noticias" rel="nofollow"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver a Noticias</a>
								<!-- end .article-intro__content-tags -->
							</div>
							<!-- end .article-intro__content-wrapper -->
						</div>
						<!-- end .article-intro__content -->
						
						<!-- Article Sidebar -->
						<div class="small-12  medium-4  large-4  columns  article-sidebar">
							<div class="row">
								<!-- Sidebar Block -->
								<div class="small-12  columns  article-sidebar__block">
									<img src="<?php bloginfo('template_directory');?>/images/articles/article-sidebar-image.jpg" class="article-sidebar__block-image" alt="article sidebar image">
									<h2 class="article-sidebar__block-subtitle">Diabetes</h2>
									<h1 class="article-sidebar__block-title">Sabías que...</h1>
									<p class="article-sidebar__block-text">Durante el ejercicio, las células también extraen glucosa de la sangre mediante un mecanismo totalmente independiente de la insulina. Además te ayuda a mejorar el ánimo y tu calidad de vida, ¡motívate!</p>
									<a href="<?php echo get_permalink(692)?>" class="button  radius  red  bordered" title="Conoce más">Conoce más</a>
								</div>
								<!-- end .article-sidebar__block -->
								
								<!-- Sidebar Banner -->
								<div class="small-12  columns  text-center  article-sidebar__banner">
									<div class="article-sidebar__banner-content">
										<h1 class="article-sidebar__banner-title"><small class="montse">¿Qué sabes sobre la</small>Diabetes?</h1>
										<a href="<?php echo get_page_link(5)?>" class="button  radius  white  transparent  article-sidebar__banner-button" title="Conoce el programa">
											<img src="<?php bloginfo('template_directory');?>/images/icons/icon-programa-banmedica.svg" class="inject-me" alt="icono programa"> Conoce el programa
										</a>
									</div>
									<!-- end .article-sidebar__banner-content -->

									<img src="<?php bloginfo('template_directory');?>/images/articles/article-sidebar-banner.jpg" class="article-sidebar__banner-image" alt="article sidebar banner">
								</div>
								<!-- end .article-sidebar__banner -->
							</div>
							<!-- end .row -->
						</div>
						<!-- end .article-sidebar -->
					</div>
					<!-- end .row-custom -->
				</section>
				<!-- end #article-intro -->
				
			

		
		
    
    
    
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer();?>