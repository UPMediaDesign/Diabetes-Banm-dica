<section id="food-calc" class="row  row-wide  page-calc">
<img src="<?php bloginfo('template_directory');?>/images/objects/page-calc-arrow.png" class="page-calc__arrow" alt="arrow">

<div class="row  row-custom">
	<div class="small-12  medium-5  medium-push-1  large-5  large-push-1  columns  page-calc__block">
		<div class="row">
			<div class="small-12  columns">
				<h1 class="page-calc__block-title  page-calc__block-title--grey">Calcula los Hidratos de Carbono de tus platos</h1>
			</div>

			<form id="calc-form" class="small-12  columns  white">
				<label for="calc_form_category" class="calc-form__label  calc-form__label--grey">Categoría</label>
				<select id="calc_form_category" class="calc-form__select  calc-form__select--grey  select" name="calc_form[category]">
					<?php $cat_alimentos = get_terms(array('taxonomy' => 'categoria_de_alimentos'))?>
					<option value="--">Seleccione categoría</option>
					<?php foreach($cat_alimentos as $categoria):?>
						<option value="<?php echo $categoria->slug?>"><?php echo $categoria->name?></option>
					<?php endforeach?>
				</select>

				<label for="calc_form_plate" class="calc-form__label  calc-form__label--grey">Plato</label>
				<select id="calc_form_plate" class="calc-form__select  calc-form__select--grey  select" name="calc_form[plate]" disabled>
					<option value="Plato 1">Seleccione cateogría</option>
				</select>

				<input type="submit" class="button  radius  yellow" value="Calcular">
			</form>
		</div>
		<!-- end .row -->
	</div>
	<!-- end .page-calc__block -->

	<div class="small-12  medium-5  medium-pull-1  large-5  large-pull-1  columns  page-calc__block">
		<div class="small-12  columns  text-center  page-calc__box">
			<div class="row" id="platoBox">
				<!-- Heading -->
				<div class="small-12  columns  page-calc__box-heading cal-noimg">
					<div class="row" style=" padding: 60px 0; border: 1px solid #E8BA15; background-color: #f2f2f2; border-bottom: 0;">
						<img src="<?php bloginfo('template_directory');?>/images/icons/icon-cooking-pot.svg" class="inject-me  page-icons__block-box-icon" alt="icon cooking pot">
						<?php /* <img src="http://placehold.it/300x200/E8BA15/f2f2f2/?text=Seleccione+Alimento" class="page-calc__box-image  img-full" alt="calc image"> */?>
						<span>Selecciona el tipo de alimento luego el alimento y calcula sus HC.</span>
					</div>
					<!-- end .row -->
				</div>
				<!-- end .page-calc__box-heading -->

				<div class="small-12  columns  page-calc__box-info  page-calc__box-info--yellow">
					<span class="page-calc__box-arrow"><i class="fa fa-caret-left"></i></span>
					<h1 class="page-calc__box-title">&nbsp;</h1>
					<ul class="no-bullet  page-calc__box-data">
						<li class="page-calc__box-data-item" style="border:none !important">
							
						</li>
						<li class="page-calc__box-data-item" style="border:none !important">
							
						</li>
						<li class="page-calc__box-data-item" style="border:none !important">
							
						</li>
						<li class="page-calc__box-data-item" style="border:none !important">
							
						</li>
					</ul>
					<!-- end .page-calc__box-data -->
				</div>
				<!-- end .page-calc__box-info -->
			</div>
			<!-- end .row -->
		</div>
		<!-- end .page-calc__box -->
	</div>
	<!-- end .page-calc__block -->
</div>
<!-- end .row-custom -->
</section>
			

			
			
			<?php /* <!-- Page Calculator -->
				<section class="row  row-wide  page-calc  page-calc--red">
					<div class="row  row-custom">
						<div class="small-12  medium-12  large-2  columns  page-calc__block">
							<img src="<?php echo get_bloginfo('template_directory')?>/images/objects/calculator-character.png" class="page-calc__block-character" alt="personaje">
						</div>
						<!-- end .page-calc__block -->

						<div class="small-12  medium-5  large-4  large-push-1  columns  page-calc__block">
							<div class="row">
								<div class="small-12  columns">
									<h1 class="page-calc__block-title">Calcula los Hidratos de Carbono de tus platos</h1>
								</div>

								<form id="calc-form" class="small-12  columns">
					<label for="calc_form_category" class="calc-form__label">Categoría</label>
					<select id="calc_form_category" class="calc-form__select  select" name="calc_form[category]">
						<?php $cat_alimentos = get_terms(array('taxonomy' => 'categoria_de_alimentos'))?>
						<option value="--">Seleccione categoría</option>
						<?php foreach($cat_alimentos as $categoria):?>
							<option value="<?php echo $categoria->slug?>"><?php echo $categoria->name?></option>
						<?php endforeach?>
					</select>

					<label for="calc_form_plate" class="calc-form__label">Plato</label>
					<select id="calc_form_plate" class="calc-form__select  select" name="calc_form[plate]" disabled >
						<option value="---">Seleccionar categoría antes</option>
					</select>

					<input type="submit" class="button  radius  white  transparent" value="Calcular">
				</form>
			</div>
			<!-- end .row -->
		</div>
		<!-- end .home-calc__block -->
		

		<div class="small-12  medium-5  large-4  columns  home-calc__block">
			<div class="small-12  columns  text-center  home-calc__box">
				<div class="row" id="platoBox">
					<!-- Heading -->
					<div class="small-12  columns  home-calc__box-heading cal-noimg">
						<div class="row">
						<img src="http://placehold.it/300x200/A41F1F/f2f2f2/?text=Seleccione+Alimento" class="home-calc__box-image  img-full" alt="calc image">
						</div>
						<!-- end .row -->
					</div>
					<!-- end .home-calc__box-heading -->

					<div class="small-12  columns  home-calc__box-info cal-nodata">
						<span class="home-calc__box-arrow"><i class="fa fa-caret-left"></i></span>
						<h1 class="home-calc__box-title">&nbsp;</h1>
						<ul class="no-bullet  home-calc__box-data">
							<li class="home-calc__box-data-item">
								<!--&nbsp;<small>Medida casera</small>-->
							</li>
							<li class="home-calc__box-data-item">
								<!--&nbsp;<small>Hidratos de carbono</small>-->
							</li>
							<li class="home-calc__box-data-item">
								<!--&nbsp;<small>Calorías</small>-->
							</li>
							<li class="home-calc__box-data-item">
							<!--	&nbsp;<small>Índice graso</small>-->
							</li>
						</ul>
						<!-- end .home-calc__box-data -->
					</div>
					<!-- end .home-calc__box-info -->
				</div>
				<!-- end .row -->
			</div>
			<!-- end .home-calc__box -->
		</div>
		<!-- end .home-calc__block -->
	</div>
	<!-- end .row-custom -->
</section>
<!-- end #home-calc --> */?>










				


<style>
	.cal-noimg img{
    border: 1px solid #fff;
    border-bottom: 0;
}
	.cal-nodata{background: transparent;
    border: 1px solid #fff;}
	.cal-nodata .home-calc__box-data-item{
		color:#f2f2f2;
	}
	.home-calc__box-arrow {
    left: -17px;
}
	


</style>

<script>
	
jQuery("#calc-form").submit(function(event) {
	event.preventDefault();
	plato = jQuery( "#calc_form_plate option:selected" ).attr('data-plate');
	
	jQuery.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'infoPlato' , plato : plato }),
		success: function(data){
			
			console.log(data)
			jQuery('#platoBox').html(data)
			jQuery('.page-calc__box-info').addClass('page-calc__box-info--yellow')
			
		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}	
	});
	
});
	
jQuery('#calc_form_category').on('change', function() {
	cat = this.value;
	//alert( cat ); // or $(this).val()
	
	//llenaplatos
	jQuery.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'llenaPlatos' , cat : cat }),
		success: function(data){
			
			jQuery('#calc_form_plate').html(data);
			jQuery('#calc_form_plate').prop('disabled' , false);
			
		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}	
	});
	
});
	



</script>