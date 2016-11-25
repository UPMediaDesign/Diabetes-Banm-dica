<?php 

// Limpio wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 


// Quitar barra admin del Front
add_filter( 'show_admin_bar', '__return_false' );


// LLAMO CSS
add_action('wp_print_styles', 'head_css');
function head_css() {
     wp_enqueue_style('style-theme', get_bloginfo('stylesheet_url'), false, false, 'screen');
}


// LLAMO JS
add_action( 'template_redirect', 'head_js' );
function head_js() {
	    wp_enqueue_script("jquery");
	
        wp_enqueue_script( 'SVGeezy', get_stylesheet_directory_uri() . '/js/svgeezy.min.js', false, 0.1 );
	    wp_enqueue_script( 'Main', get_stylesheet_directory_uri() . '/js/main.js', false, 0.1 );
	    
}
//REMOVER PARRAFOS DE LOS EXTRACTOS

remove_filter( 'the_excerpt', 'wpautop' );

//THUMBNAILS

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'hidratosdecarbono' ) );
add_image_size( 'banner_footer', 380, 99999 );
add_image_size( 'slider', 999999, 600  );
add_image_size( 'slidermini', 640, 700, true );
add_image_size( 'calculadora', 300, 215, true );
add_image_size( 'recetas', 262, 238, true );
add_image_size( 'destacado', 600, 300, true );



 
// CREO UN MENU 
add_action( 'after_setup_theme', 'register_menu_principal' );
function register_menu_principal() {
  register_nav_menu( 'primary', __( 'Menú Principal', 'principal') );
}

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary') {
    $classes[] = 'main-nav__menu-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class','atg_menu_classes',1,3);


function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    $classes     = "main-nav__menu-anchor";
    $item_output = preg_replace('/<a /', '<a class="'.$classes.'"', $item_output, 1);
    return $item_output;
 }
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


//agrega las inscripciones al newsletter

add_action('init', 'subscribers_register');
function subscribers_register() {
    $args = array(
        'label' => 'Incripciones en Newsletter',
        'singular_label' => 'Inscrito',
        'public' => true,
		'menu_position' => 20, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'suscriptores'),
        'supports' => array('title', 'custom-fields', 'thumbnail' )
    );
    register_post_type('suscriptores', $args);
    flush_rewrite_rules();
}

add_action('wp_ajax_inscribeUsuario', 'inscribeUsuario');
add_action('wp_ajax_nopriv_inscribeUsuario', 'inscribeUsuario');
function inscribeUsuario(){
	
	$email = $_GET['email'];
	
	
	$error = 0;
	
	if (!preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $email)) {
		$error = 1;
	} 
	
	if($error == 0){
		$nuevaInscripcion = array(
		  'post_title'    => $email,
		  'post_status'   => 'publish',
		  'post_type'	  => 'suscriptores',
		);
		
		$askId = wp_insert_post( $nuevaInscripcion , $cueck );
		
		if($cueck){
			echo '3';
		}else{
			//var_dump($askId);
			echo '4';
			//update_post_meta($askId , 'nombre' , $nombre);
		}
	}else{
		echo '5';
	}
	die;
}
// fin de las inscripciones


add_action('wp_ajax_llenaPlatos', 'llenaPlatos');
add_action('wp_ajax_nopriv_llenaPlatos', 'llenaPlatos');
function llenaPlatos(){
	
	$cat = $_GET['cat'];
	
	$posts = get_posts(array('post_type' => 'hidratosdecarbono' , 'categoria_de_alimentos' => $cat , 'numberposts' => -1));
	
	foreach($posts as $post):?>
		<option value="<?php echo $post->post_name?>" data-plate="<?php echo $post->ID?>"><?php echo $post->post_title?></option>  
	<?php endforeach;
	
	die;
}

add_action('wp_ajax_infoPlato', 'infoPlato');
add_action('wp_ajax_nopriv_infoPlato', 'infoPlato');
function infoPlato(){
	
	$platoID = $_GET['plato'];	
	//$plato = get_post($platoID);?>
	
	<!-- Heading -->
	<div class="small-12  columns  page-calc__box-heading">
		<div class="row">
			<?php echo get_the_post_thumbnail($platoID , 'calculadora' , array('class' => 'home-calc__box-image  img-full'))?>
		</div>
		<!-- end .row -->
	</div>
	<!-- end .page-calc__box-heading -->

	<div class="small-12  columns  page-calc__box-info">
		<span class="page-calc__box-arrow"><i class="fa fa-caret-left"></i></span>
		<h1 class="page-calc__box-title">Tu plato tiene</h1>
		<ul class="no-bullet  page-calc__box-data">
			<li class="home-calc__box-data-item page-calc__box-data-item" style="width:100%">
				<?php echo get_field('medida_casera' , $platoID)?><small>Medida casera</small>
			</li>
			<li class="home-calc__box-data-item page-calc__box-data-item" style="width:33%; border:none !important">
				<?php echo get_field('hidratos_de_carbono' , $platoID)?><small>Hidratos de carbono</small>
			</li>
			<li class="home-calc__box-data-item page-calc__box-data-item" style="width:33%">
				<?php echo get_field('calorias' , $platoID)?><small>Calorías</small>
			</li>
			<li class="home-calc__box-data-item page-calc__box-data-item" style="width:33%">
				<?php echo get_field('indice_graso' , $platoID)?><small>Índice glicémico</small>
			</li>
		</ul>
		<!-- end .page-calc__box-data -->
	</div>
	<!-- end .page-calc__box-info -->
	
	<?php /* <!-- Heading -->
	<div class="small-12  columns  home-calc__box-heading">
		<div class="row">
			<?php echo get_the_post_thumbnail($platoID , 'calculadora' , array('class' => 'home-calc__box-image  img-full'))?>
		</div>
		<!-- end .row -->
	</div>
	<!-- end .home-calc__box-heading -->

	<div class="small-12  columns  home-calc__box-info">
		<span class="home-calc__box-arrow"><i class="fa fa-caret-left"></i></span>
		<h1 class="home-calc__box-title">Tu plato tiene</h1>
		<ul class="no-bullet  home-calc__box-data">
			<li class="home-calc__box-data-item">
				<?php echo get_field('medida_casera' , $platoID)?><small>Medida casera</small>
			</li>
			<li class="home-calc__box-data-item">
				<?php echo get_field('hidratos_de_carbono' , $platoID)?><small>Hidratos de carbono</small>
			</li>
			<li class="home-calc__box-data-item">
				<?php echo get_field('calorias' , $platoID)?><small>Calorías</small>
			</li>
			<li class="home-calc__box-data-item">
				<?php echo get_field('indice_graso' , $platoID)?><small>Índice graso</small>
			</li>
		</ul>
		<!-- end .home-calc__box-data -->
	</div>
	<!-- end .home-calc__box-info --> */?>
	
	
	<?php die;
}



// carga más posts en diabetes
add_action('wp_ajax_loadmoreArticulos', 'loadmoreArticulos');
add_action('wp_ajax_nopriv_loadmoreArticulos', 'loadmoreArticulos');
function loadmoreArticulos(){
	
	$offsetNum = $_GET['offset'];
	
	$articulos = get_posts(array('post_type' => 'post' , 'numberposts' => 2,'cat' => 8 ,'offset' => $offsetNum ));
	if($articulos){?>
		<?php foreach($articulos as $article):?>

		<article class="small-12  medium-6  large-6  columns  diabetes-article end">
			<div class="small-12 columns  diabetes-article__wrapper">
				<div class="row">
					<div class="small-12  medium-5  large-5  columns">
						<div class="row">


							  <?php if ( has_post_thumbnail($article->ID) ) {

									 echo get_the_post_thumbnail( $article->ID, 'thumbnail', array('class' => 'img-full') );

								};?>
						</div>
					</div>
					<div class="small-12  medium-7  large-7  columns  diabetes-article__info">
						<?php $cats = wp_get_object_terms($article->ID , 'category' , array('fields' => 'all'))?>
						<span class="diabetes-article__category"><?php echo $cats[0]->name;?></span>
						<h1 class="diabetes-article__title"><?php echo $article->post_title;?></h1>
						<p class="diabetes-article__excerpt"><?php echo $article->post_excerpt;?></p>
						<a href="<?php echo get_permalink($article->ID);?>" class="button  tiny  radius  red" title="Leer más">Leer más</a>
					</div>
					<!-- end .diabetes-article__info -->
				</div>
				<!-- end .row -->
			</div>
			<!-- end .diabetes-article__wrapper -->
		</article>

		<?php 
		endforeach;
	}else{
		echo 'nomore';
	}
	die;
}

// carga más posts en alimentacion
add_action('wp_ajax_loadmoreArticulosAli', 'loadmoreArticulosAli');
add_action('wp_ajax_nopriv_loadmoreArticulosAli', 'loadmoreArticulosAli');
function loadmoreArticulosAli(){
	
	$offsetNum = $_GET['offset'];
	
	$articulos = get_posts(array('post_type' => 'post' , 'numberposts' => 3,'cat' => 3 ,'offset' => $offsetNum ));
	if($articulos){?>
		<?php foreach($articulos as $articulo_alimentacion):?>

		<article class="small-12  medium-4  large-4  columns  text-center  article-block end">
			<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="article-block__anchor" title="Ir al Artículo">
				<span class="article-block__category  article-block__category--alimentacion">
					<img src="<?php bloginfo('template_directory');?>/images/articles/article-icon_alimentacion.png" alt="icono alimentación" class="article-block__category-icon">
					<!--Alimentación-->
				</span>
				<?php echo get_the_post_thumbnail( $articulo_alimentacion->ID, 'thumbnail', array( 'class' => 'article-block__image' ));?>
			</a>
			<div class="article-block__heading">
				<h1 class="article-block__title"><?php echo $articulo_alimentacion->post_title;?></h1>
			</div>
			<hr class="article-block__divider">
			<p class="article-block__excerpt"><?php echo $articulo_alimentacion->post_excerpt;?></p>
			<a href="<?php echo get_permalink($articulo_alimentacion->ID);?>" class="button  radius  grey  bordered" title="Leer más">Leer más</a>
		</article>

		<?php 
		endforeach;
	}else{
		echo 'nomore';
	}
	die;
}






