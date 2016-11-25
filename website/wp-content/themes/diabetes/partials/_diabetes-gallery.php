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

/* foreach ($categories as $category)
{
	
	$cat_id= $category->term_id;
    query_posts("cat=$cat_id&posts_per_page=1");
	if (have_posts()) : while (have_posts()) : the_post(); */ ?>
<div class="articulocontainer">
<?php $articles = get_posts(array('post_type' => 'post' , 'cat' => 8, 'numberposts' => 6))?>
<?php foreach($articles as $article):?>
    
    <!-- Article 1 -->
<article class="small-12  medium-6  large-6  columns  diabetes-article">
	<div class="small-12 columns  diabetes-article__wrapper">
		<div class="row">
			<div class="small-12  medium-5  large-5  columns">
				<div class="row">
				
                    
                      <?php if ( has_post_thumbnail($article->ID) ) {
							
							 echo get_the_post_thumbnail( $article->ID, 'thumbnail', array('class' => 'img-full') );
							
						};?>
                    
                    	<a href="<?php echo get_permalink($article->ID);?>" class="button  tiny  radius  red" title="Leer más">Leer más</a>
				</div>
			</div>
			<div class="small-12  medium-7  large-7  columns  diabetes-article__info">
			
				<?php $cats = wp_get_object_terms($article->ID , 'category' , array('fields' => 'all'))?>
				<span class="diabetes-article__category"><?php echo $cats[0]->name;?></span>
				<h1 class="diabetes-article__title"><?php echo $article->post_title;?></h1>
				<p class="diabetes-article__excerpt"><?php echo $article->post_excerpt;?></p>

			</div>
			<!-- end .diabetes-article__info -->
		</div>
		<!-- end .row -->
	</div>
	<!-- end .diabetes-article__wrapper -->
</article>
<!-- end .diabetes-article -->

    
<?php endforeach;?>
</div>	

<script>
function loadmoreArticulos(){
	event.preventDefault();
	d_offset = jQuery('#moreButton').attr('data-offset');
	jQuery('#moreButton').css('opacity', .5)

	offset = 6*d_offset;

	//console.log(offset);

	jQuery.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'loadmoreArticulos' , offset : offset  }),
		success: function(data){
			jQuery('#moreButton').css('opacity', 1)
			if(data == 'nomore'){
				jQuery('#moreButton').addClass('hidden');
				jQuery('.articulocontainer').append('<div class="clear"></div><div class="columns large-12"><div class="callout">No hay más artículos</div></div>')
				jQuery('#moreButton').css('display', 'none')
			}
			else {
				jQuery('.articulocontainer').append(data);
				jQuery('#moreButton').attr('data-offset' , parseInt(d_offset)+1);
			}


		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}	
	});

}
</script>
 
<div class="small-12  columns  text-center article-gallery__actions">
	<a href="#" onClick="loadmoreArticulos()" class="button  large  soft-red  bordered" id="moreButton" title="Cargar más" data-offset="1">Cargar más <i class="fa fa-plus fa-fw"></i></a>
</div>
<!-- end .article-gallery__actions -->