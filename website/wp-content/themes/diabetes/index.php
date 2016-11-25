<?php get_header();?>

			<!-- Main Container -->
			<div id="blog" class="off-canvas-content  main-container" data-off-canvas-content>
				<!-- Blog Search -->
				<form id="blog-search" class="row  row-wide" action="">
					<div class="row  row-custom">
						<div class="small-12  medium-5  large-5  columns  blog-search__block">
							<h1 class="blog-search__title">Blog</h1>
						</div>
						<!-- end .blog-search__block -->

						<div class="small-12  medium-7  large-7  columns  blog-search__block">
							<input type="input" id="blog-search__input" class="text" value="Buscar">
							<button type="submit" id="blog-search__button" class="button"><i class="fa fa-search fa-fw"></i></button>
						</div>
						<!-- end .blog-search__block -->
					</div>
					<!-- end .row-custom -->
				</form>
				<!-- end #blog-search -->
				
				<!-- Blog Intro -->
				<section class="row  row-custom  blog-intro">
					<!-- Blog Heading -->
					<div class="small-12  columns  blog-heading">
						<h1 class="blog-heading__title">Destacado</h1>
					</div>
					<!-- end .blog-heading -->

					<!-- Featured Article -->
					<article class="small-12  medium-6  large-6  columns  featured-article">
						<img src="images/articles/featured-article-image.jpg" class="featured-article__image" alt="article image">
						<h1 class="featured-article__title">Bomba de insulina al AUGE</h1>
						<p class="featured-article__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ipsa dolor distinctio eos unde vel voluptates illo aspernatur ut saepe voluptatum incidunt totam veritatis earum, id hic magnam vitae cum?</p>
						<a href="single-blog.html" class="button  radius  red  bordered" title="Leer más">Leer más</a>
					</article>
					<!-- end .featured-article -->
					
					<!-- Blog Categories -->
					<div class="small-12  medium-6  large-6  columns  blog-cats">
						<!-- Blog Heading -->
						<div class="small-12  columns  blog-heading">
							<h1 class="blog-heading__title">Categorías</h1>
						</div>
						<!-- end .blog-heading -->
						
						<!-- Cat 1 -->
						<div class="small-4  columns  text-center  blog-cats__block">
							<div class="small-12  columns  block-cats__block-box  block-cats__block-box--yellow">
								<div class="block-cats__block-wrapper">
									<img src="images/icons/icon-bicycle.svg" class="inject-me  blog-cats__block-icon" alt="icon bicycle">
									<span class="blog-cats__block-title">Vida Sana</span>
								</div>
							</div>
							<!-- end .block-cats__block-box -->
						</div>
						<!-- end .blog-cats__block -->

						<!-- Cat 2 -->
						<div class="small-4  columns  text-center  blog-cats__block">
							<div class="small-12  columns  block-cats__block-box  block-cats__block-box--blue">
								<div class="block-cats__block-wrapper">
									<img src="images/icons/icon-suitcase.svg" class="inject-me  blog-cats__block-icon" alt="icon suitcase">
									<span class="blog-cats__block-title">Tratamientos</span>
								</div>
							</div>
							<!-- end .block-cats__block-box -->
						</div>
						<!-- end .blog-cats__block -->

						<!-- Cat 3 -->
						<div class="small-4  columns  text-center  blog-cats__block">
							<div class="small-12  columns  block-cats__block-box  block-cats__block-box--orange">
								<div class="block-cats__block-wrapper">
									<img src="images/icons/icon-stethoscope.svg" class="inject-me  blog-cats__block-icon" alt="icon stethoscope">
									<span class="blog-cats__block-title">Complicaciones</span>
								</div>
							</div>
							<!-- end .block-cats__block-box -->
						</div>
						<!-- end .blog-cats__block -->
					</div>
					<!-- end .blog-cats -->
					
					<!-- Blog Intro Character -->
					<div class="small-12  medium-6  large-6  columns  text-right  blog-intro__character">
						<img src="images/objects/sitting-character.png" alt="sitting character">
					</div>
					<!-- end .blog-intro__character -->
				</section>
				<!-- end .blog-intro -->
				
				<!-- Blog Articles -->
				<section id="blog-articles" class="row  row-wide">
					<div class="row  row-custom  article-gallery" data-interchange="[_blog-gallery.html, small]"></div>
				</section>
				<!-- end #blog-articles -->
				
				<!-- Blog Media -->
				<section id="blog-media" class="row  row-custom">
					<div class="small-12  medium-6  large-6  columns  blog-media__block">
						<div class="row">
							<!-- Video Block -->
							<div class="small-12  columns  video-block">
								<div class="row">
									<!-- Heading -->
									<div class="small-12  columns  video-block__heading">
										<a href="#" class="video-block__anchor" title="Ver Video">
											<div class="video-block__anchor-wrapper">
												<div class="video-block__anchor-wrapper-cell">
													<span class="video-block__anchor-icon"><i class="fa fa-play fa-fw"></i></span>
												</div>
											</div>
										</a>
										<img src="images/banners/video-banner-1.jpg" class="img-full" alt="video banner">
									</div>
									<!-- end .video-block__heading -->

									<div class="small-12  columns  video-block__info">
										<h1 class="video-block__title">Lorem ipsum dolor sit amet</h1>
										<p class="video-block__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, nam. Quasi, blanditiis autem unde facilis omnis veritatis vero veniam nulla officiis hic rerum quo reprehenderit modi impedit necessitatibus ducimus voluptas.</p>
									</div>
									<!-- end .video-block__info -->
								</div>
							</div>
							<!-- end .video-block -->
							
							<!-- More Videos -->
							<div class="small-12  columns  text-center  blog-media__actions">
								<a href="#" class="button  grey  bordered" title="Más Videos"><i class="fa fa-plus fa-fw"></i> Videos</a>
							</div>
							<!-- end .blog-media__actions -->

							<!-- Banner Block -->
							<div class="small-12  columns  banner-block">
								<div class="small-12  medium-6  large-6  columns  banner-block__content">
									<h1 class="banner-block__title banner-block__title--grey">Tu salud y opinión nos importa</h1>
									<hr class="banner-block__divider  banner-block__divider--grey">
									<p class="banner-block__text  banner-block__text--grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<a href="#" class="button  radius  white  transparent" title="Ingresa al Foro">Ingresa al Foro</a>
								</div>
								<!-- end .banner-block__content -->

								<img src="images/banners/banner-image-3.jpg" class="banner-block__image" alt="banner 1">
							</div>
							<!-- end .banner-block -->

							<!-- Event Block -->
							<div class="small-12  columns  event-block">
								<div class="event-block__icon">
									<i class="fa fa-calendar fa-fw"></i>
								</div>

								<div class="small-12  medium-8  large-8  columns  event-block__content">
									<h2 class="event-block__subtitle  open">Eventos</h2>
									<h1 class="event-block__title">Tu salud y opinión nos importa</h1>
									<div class="event-block__info">
										<span class="event-block__info-description"><strong>Dra. Andrea Lorca</strong>, especialista en diabetes.</span>
										<span class="event-block__info-date">Lunes 17, Oct<br><strong>2016</strong></span>
									</div>
									<p class="event-block__text">Lorem ipsum dolor sit amet, consectetur elit.</p>
								</div>
								<!-- end .event-block__content -->

								<img src="images/banners/event-banner-image.jpg" class="event-block__image" alt="event banner">
							</div>
							<!-- end .event-block -->

							<!-- Other Events -->
							<div class="small-12  columns  text-center  blog-media__actions">
								<a href="#" class="button  grey  bordered" title="Ver Otros Eventos">Ver Otros Eventos</a>
							</div>
							<!-- end .blog-media__actions -->
						</div>
						<!-- end .row -->
					</div>
					<!-- end .blog-media__block -->

					<div class="small-12  medium-6  large-6  columns  blog-media__block">
						<div class="row">
							<!-- Blog Heading -->
							<div class="small-12  columns  text-right  blog-heading">
								<h1 class="blog-heading__title">Galería</h1>
							</div>
							<!-- end .blog-heading -->

							<!-- Blog Gallery -->
							<div class="small-12  columns  text-center  blog-gallery">
								<div class="row">
									<!-- Block 1 -->
									<div class="small-6  columns  block-gallery__block">
										<a class="blog-gallery__block-anchor" data-open="block-modal-1">
											<div class="blog-gallery__block-anchor-wrapper">
												<div class="blog-gallery__block-anchor-wrapper-cell">
													<span class="blog-gallery__anchor-icon"><i class="fa fa-eye fa-fw"></i></span>
												</div>
											</div>
										</a>
										<img src="images/blog/blog-gallery-image-1.jpg" class="blog-gallery__block-thumb" alt="image 1">
									</div>
									<!-- end .blog-gallery__block -->

									<!-- Reveal Modal for Block 1 -->
									<div class="reveal  blog-gallery__modal" id="block-modal-1" data-reveal>
										<img src="images/blog/blog-gallery-image-1.jpg" class="blog-gallery__block-image" alt="image 1">

										<button class="close-button  blog-gallery__modal-close" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<!-- end .blog-gallery__modal -->

									<!-- Block 2 -->
									<div class="small-6  columns  block-gallery__block">
										<a class="blog-gallery__block-anchor" data-open="block-modal-2">
											<div class="blog-gallery__block-anchor-wrapper">
												<div class="blog-gallery__block-anchor-wrapper-cell">
													<span class="blog-gallery__anchor-icon"><i class="fa fa-eye fa-fw"></i></span>
												</div>
											</div>
										</a>
										<img src="images/blog/blog-gallery-image-2.jpg" class="blog-gallery__block-thumb" alt="image 2">
									</div>
									<!-- end .blog-gallery__block -->

									<!-- Reveal Modal for Block 2 -->
									<div class="reveal  blog-gallery__modal" id="block-modal-2" data-reveal>
										<img src="images/blog/blog-gallery-image-2.jpg" class="blog-gallery__block-image" alt="image 2">

										<button class="close-button  blog-gallery__modal-close" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<!-- end .blog-gallery__modal -->

									<!-- Block 3 -->
									<div class="small-6  columns  block-gallery__block">
										<a class="blog-gallery__block-anchor" data-open="block-modal-3">
											<div class="blog-gallery__block-anchor-wrapper">
												<div class="blog-gallery__block-anchor-wrapper-cell">
													<span class="blog-gallery__anchor-icon"><i class="fa fa-eye fa-fw"></i></span>
												</div>
											</div>
										</a>
										<img src="images/blog/blog-gallery-image-3.jpg" class="blog-gallery__block-thumb" alt="image 3">
									</div>
									<!-- end .blog-gallery__block -->

									<!-- Reveal Modal for Block 3 -->
									<div class="reveal  blog-gallery__modal" id="block-modal-3" data-reveal>
										<img src="images/blog/blog-gallery-image-3.jpg" class="blog-gallery__block-image" alt="image 3">

										<button class="close-button  blog-gallery__modal-close" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<!-- end .blog-gallery__modal -->

									<!-- Block 4 -->
									<div class="small-6  columns  block-gallery__block">
										<a class="blog-gallery__block-anchor" data-open="block-modal-4">
											<div class="blog-gallery__block-anchor-wrapper">
												<div class="blog-gallery__block-anchor-wrapper-cell">
													<span class="blog-gallery__anchor-icon"><i class="fa fa-eye fa-fw"></i></span>
												</div>
											</div>
										</a>
										<img src="images/blog/blog-gallery-image-4.jpg" class="blog-gallery__block-thumb" alt="image 4">
									</div>
									<!-- end .blog-gallery__block -->
									
									<!-- Reveal Modal for Block 4 -->
									<div class="reveal  blog-gallery__modal" id="block-modal-4" data-reveal>
										<img src="images/blog/blog-gallery-image-4.jpg" class="blog-gallery__block-image" alt="image 4">

										<button class="close-button  blog-gallery__modal-close" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<!-- end .blog-gallery__modal -->

									<!-- Block 5 -->
									<div class="small-6  columns  block-gallery__block">
										<a class="blog-gallery__block-anchor" data-open="block-modal-5">
											<div class="blog-gallery__block-anchor-wrapper">
												<div class="blog-gallery__block-anchor-wrapper-cell">
													<span class="blog-gallery__anchor-icon"><i class="fa fa-eye fa-fw"></i></span>
												</div>
											</div>
										</a>
										<img src="images/blog/blog-gallery-image-5.jpg" class="blog-gallery__block-thumb" alt="image 5">
									</div>
									<!-- end .blog-gallery__block -->
									
									<!-- Reveal Modal for Block 5 -->
									<div class="reveal  blog-gallery__modal" id="block-modal-5" data-reveal>
										<img src="images/blog/blog-gallery-image-5.jpg" class="blog-gallery__block-image" alt="image 5">

										<button class="close-button  blog-gallery__modal-close" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<!-- end .blog-gallery__modal -->

									<!-- Block 6 -->
									<div class="small-6  columns  block-gallery__block">
										<a class="blog-gallery__block-anchor" data-open="block-modal-6">
											<div class="blog-gallery__block-anchor-wrapper">
												<div class="blog-gallery__block-anchor-wrapper-cell">
													<span class="blog-gallery__anchor-icon"><i class="fa fa-eye fa-fw"></i></span>
												</div>
											</div>
										</a>
										<img src="images/blog/blog-gallery-image-6.jpg" class="blog-gallery__block-thumb" alt="image 6">
									</div>
									<!-- end .blog-gallery__block -->
									
									<!-- Reveal Modal for Block 6 -->
									<div class="reveal  blog-gallery__modal" id="block-modal-6" data-reveal>
										<img src="images/blog/blog-gallery-image-6.jpg" class="blog-gallery__block-image" alt="image 6">

										<button class="close-button  blog-gallery__modal-close" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<!-- end .blog-gallery__modal -->
								</div>
								<!-- end .row -->
							</div>
							<!-- end .blog-gallery -->

							<!-- View Gallery -->
							<div class="small-12  columns  text-center  blog-media__actions">
								<a href="#" class="button  grey  bordered" title="Ver Galería">Ver Galería</a>
							</div>
							<!-- end .blog-media__actions -->
							
							<!-- Blog Tags -->
							<div class="small-12  columns  text-right  blog-tags">
								<div class="blog-tags__icon"><i class="fa fa-tag fa-fw"></i></div>

								<div class="small-12  columns  blog-tags__container">
									<h1 class="blog-tags__title">Etiquetas</h1>

									<ul class="no-bullet  blog-tags__list">
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="lorem">lorem</a>
										</li>
										<li class="blog-tags__list-item  big">
											<a href="#" class="blog-tags__item-anchor" title="ipsum">ipsum</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="dolor sit">dolor sit</a>
										</li>
										<li class="blog-tags__list-item  medium">
											<a href="#" class="blog-tags__item-anchor" title="amet">amet</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="consectetur">consectetur</a>
										</li>
										<li class="blog-tags__list-item  big">
											<a href="#" class="blog-tags__item-anchor" title="adispiscing">adispiscing</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="elit">elit</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="Suspendisse">Suspendisse</a>
										</li>
										<li class="blog-tags__list-item  big">
											<a href="#" class="blog-tags__item-anchor" title="Sodales">Sodales</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="dolor">dolor</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="id leo pellentesque">id leo pellentesque</a>
										</li>
										<li class="blog-tags__list-item  big">
											<a href="#" class="blog-tags__item-anchor" title="laoreet">laoreet</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="Donec id volutpat urna">Donec id volutpat urna</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="Vivamus auctor mattis sem">Vivamus auctor mattis sem</a>
										</li>
										<li class="blog-tags__list-item  medium">
											<a href="#" class="blog-tags__item-anchor" title="pharetra eros">pharetra eros</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="rutrum  dictum">rutrum  dictum</a>
										</li>
										<li class="blog-tags__list-item  big">
											<a href="#" class="blog-tags__item-anchor" title="arcumi">arcumi</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="pulvinar suscipit">pulvinar suscipit</a>
										</li>
										<li class="blog-tags__list-item">
											<a href="#" class="blog-tags__item-anchor" title="metus sagittis">metus sagittis</a>
										</li>
									</ul>
									<!-- end .blog-tags__list -->
								</div>
								<!-- end .blog-tags__container -->
							</div>
							<!-- end .blog-tags -->
						</div>
						<!-- end .row -->
					</div>
					<!-- end .blog-media__block -->
				</section>
				<!-- end #blog-media -->
		<?php get_footer();?>