<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'home');

 	$metas = array(
		'titulo' 		=> 'Distrubución de Maquinarias Agricolas',
		'descripcion' 	=> 'Hanomag Patagonia S.A. Venta y distribución de tractores agrícolas en toda la Patagonia Argentina, con puntos de ventas en Villa Regina y General Roca.',
		'img' 			=> '',
		'slider' 		=> '',
	);

	include('header.php');

?>

	<article>
		<?php array_push($js, 'slider-principal');
			$slider_principal = array(
	        array(
	        	'',
	        	''
	        	),
	      );
		?>
		<div class="slider-principal">
			<div class="owl-carousel">
	      		<div class="item-1">
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-principal/1-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-center">Máquinas <br> <big>Viales</big></h1>
				      				<p class="color-1 text-center">Relación Costo/beneficio</p>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
	      		<div class="item-2">
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-principal/2-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-right">Máquinas <br> <big>Agrícolas</big><br></h1>
				      				<p class="color-1 text-center">Amplio Stock de Maquinarias</p>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>

			</div>
		</div>
		<section id="maquinas-viales">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<div class="title-container bg-3 inline-block">
								<h4 class="h4 text-center color-1">Máquinas Viales</h4>
							</div>
						</div>
					</div>
					
				</div>
				<div class="container">
					<div id="maquinas-viales-carousel" class="marcas text-center">
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-2.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-3.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-4.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-5.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-6.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-7.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-8.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
						<div class="maquina-container inline-block text-center">
							<a href="javascript:;">
								<img src="images/slider-maquinas-viales/maquina-9.png" alt="" class="img-responsive">
								<p class="color-1 text-center">Autoelevadores</p>
							</a>
						</div>
				
					</div>
				</div>
		</section>
		<section id="index-2" class="banda bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 maquinas-usadas bg-3">
						<div class="maquinas-usadas__carousel marcas text-center inline-block pull-left">
							<div class="maquinas-usadas__carousel_carousel">
								<div class="maquinas-usadas-carousel__foto inline-block text-center relative">
										<img src="images/slider-maquinas-usadas/maquina-1.jpg" alt="" class="img-responsive">
								</div>
								<div class="maquinas-usadas-carousel__foto inline-block text-center">
										<img src="images/slider-maquinas-usadas/maquina-1.jpg" alt="" class="img-responsive">
								</div>
							</div>
						</div>						
						<div class="maquinas-usadas__content color-1 inline-block pull-left relative">
							<h5 class="paragraph-3"><b>Máquinas Usadas</b></h5>
							<hr>
							<a href="javascript:;" class="maquinas-usadas__content__title color-5"><b>Mack Petrolero</b></a>
							<p class="maquinas-usadas__content__descrip paragraph-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet consectetur orci. Ntt turpis metus, viverra ut risus eu, egestas ullamcorper.</p>
							<a class="color-5 absolute" href="javascript:;"><i class="fa fa-plus-circle"></i></a>
						</div>
						<div class="clearfix">	</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="maquinas-agricolas inline-block relative color-1">
							<p class="h1 text-center"><small>Máquinas</small><br>Agricolas</p>
							<div class="custom-select absolute">
								<select name="tipo-maquina" id="tipo-maquina" class="form-control" value="">
									<option value="1">Tipo de Máquina</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="promo-accesorios" class="bg-4">
			<div class="container">
				<div class="row">
					<a href="<?=url('accesorios')?>" class="promo-accesorios__cont">
						<img src="images/home/minipala-1.png" alt="" class="img-responsive table-cell v-middle">
						<div class="promo-accesirios__cont__title color-1 table-cell v-middle">
							<p class="h1 text-center anim-suave"><big>Accesorios</big> Universales <i class="fa fa-plus-circle absolute color-5"></i> <br>para minipalas</p>
						</div>
						<img src="images/home/minipala-2.png" alt="" class="img-responsive table-cell v-middle hidden-xs">
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
		</section>
		<?php include('templates/marcas-slider.php'); ?>

	</article>

<?php include('footer.php'); ?>