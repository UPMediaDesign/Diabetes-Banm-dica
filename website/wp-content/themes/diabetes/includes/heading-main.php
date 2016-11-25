
				<section class="row  row-wide  text-center  main-heading">
					<div class="row  row-custom  main-heading__content">
						<?php if(is_page('alimentacion')){?>
						<div class="small-12  medium-8  medium-push-2  columns  main-heading__wrapper">
							<h1 class="main-heading__title"><?php the_title();?></h1>
						</div>
						<?php }elseif(is_page('beneficios-del-programa')){?>
						<div class="small-12  medium-8  medium-push-2  columns  main-heading__wrapper">
							<h1 class="main-heading__title">Beneficios <span style="display: inline-block">del programa</span></h1>
						</div>
						<?php }else{?>
						<div class="small-12  medium-8  medium-push-2  large-6  large-push-3  columns  main-heading__wrapper">
							<h1 class="main-heading__title"><?php the_title();?></h1>
						</div>
						<?php }?>
						<!-- end .main-heading__wrapper -->
					</div>
					<!-- end .main-heading__content -->
                <?php
$thumb = get_the_post_thumbnail();

      if ( $thumb != '' ) {
         the_post_thumbnail('full', array('class'=>'main-heading__image'));          
      } 
    ?>
				</section>
				