<!-- Page Banners -->
				<section class="row  row-wide  page-banners">
               
					<div class="row row-custom">
		                <?php 
							wp_reset_query();
						    $count=0;
							query_posts(array( 
						        'post_type' => 'banners',
						        'showposts' => -1 
						    ) );  
							
							
						    while (have_posts()) : the_post(); 
							
							if( has_term( 'home', 'posiciones' ) ) {	
								?>
						                
						                
											<!-- Banner 1 -->
											<div class="small-12  medium-6  large-6  columns  banner-block">
						                    <?php if ($count==0){$clase = "banner-block__content--left";}else{$clase = "banner-block__content--right";}?>
												<div class="small-12  medium-6  large-6  columns  banner-block__content  <?php echo $clase;?>">
													<h1 class="banner-block__title banner-block__title--grey"><?php the_title();?></h1>
													<hr class="banner-block__divider  banner-block__divider--grey">
													<p class="banner-block__text  banner-block__text--grey"><?php the_field('bajada');?></p>
													<a href="<?php the_field('url_boton');?>" class="button  radius  white  bordered" title="<?php the_field('texto_boton');?>"><?php the_field('texto_boton');?></a>
												</div>
												<!-- end .banner-block__content -->

												<img src="<?php the_field('imagen');?>" class="banner-block__image" alt="<?php the_field('texto_boton');?>">
											</div>
											<!-- end .banner-block -->



						<?php $count++;};endwhile;wp_reset_query();?>
					</div>
					<!--.banner-block -->
				</section>
				<!-- end .page-banners -->
                
                
                