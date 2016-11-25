
<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>
<div class="articulocontainer">

<?php
$articulos_alimentacion = get_posts(array(
    'showposts' => 3,
    'post_type' => 'post',
    'tax_query' => array(
        array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => 'alimentacion')
    ))
);
 
foreach ($articulos_alimentacion as $articulo_alimentacion) {?>

<article class="small-12  medium-4  large-4  columns  text-center  article-block end">
	<div class="article-block__image">
		<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="article-block__anchor" title="Ir al Artículo">
			<span class="article-block__category  article-block__category--alimentacion">
				<img src="/wp-content/uploads/2016/11/icono_articulo_alimentacion-1.png" alt="icono alimentación" class="article-block__category-icon">
				<!--Alimentación-->
			</span>
			<?php echo get_the_post_thumbnail( $articulo_alimentacion->ID, 'thumbnail', array( 'class' => 'article-block__image' ));?>
				<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="button  radius  white  bordered" title="Leer más">Leer más</a>
		</a>
	</div>
	<div class="article-block__heading">
		<h1 class="article-block__title"><?php echo $articulo_alimentacion->post_title;?></h1>
	</div>
	<hr class="article-block__divider">
	<p class="article-block__excerpt"><?php echo $articulo_alimentacion->post_excerpt;?></p>

</article>
<!-- end .article-block -->

<?php }?>
</div>

<!-- Actions -->
<div class="small-12  columns  text-center  article-gallery__actions">
	<a href="#" class="button  large  soft-red  bordered" id="moreButton" onClick="loadmoreArticulosAli()" title="Cargar más" data-offset="1">Cargar más <i class="fa fa-plus fa-fw"></i></a>
</div>
<!-- end .article-gallery__actions -->

<script>
function loadmoreArticulosAli(){
	event.preventDefault();
	d_offset = jQuery('#moreButton').attr('data-offset');
	jQuery('#moreButton').css('opacity', .5)

	offset = 3*d_offset;

	//console.log(offset);

	jQuery.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'loadmoreArticulosAli' , offset : offset  }),
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