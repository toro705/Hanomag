<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'productos');

 	$metas = array(
		'titulo' 	  => 'Máquinas Agrícolas',
		'descripcion' => 'Máquinas Agrícolas',
		'img' 		  => '',
		'slider'=> '<h1 class="h1 color-1 text-center"><small><b>MÁQUINAS</b></small><br><span>Agrícolas</span></h1>',
	);

	include('header.php');

?>
	<article>
		<section id="productos" class="banda bg-1">	
			<div class="container">	 
					<div class="row cargadoras-title">
						<div class="col-xs-12">	
								<h3 class="text-center"><b>CARGADORAS</b></h3>
						</div>
					</div>
					<div class="row text-center">
						<div class="maquina-productos-container">
							<a href="javascript:;">
								<div class="maquina-container__foto text-center">
									<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								</div>
								<div class="maquina-container__titulo"><p class="color-3">Título de maquinaria</p></div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="maquina-productos-container">
							<a href="javascript:;">
								<div class="maquina-container__foto text-center">
									<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								</div>
								<div class="maquina-container__titulo"><p class="color-3">Título de maquinaria</p></div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="maquina-productos-container">
							<a href="javascript:;">
								<div class="maquina-container__foto text-center">
									<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								</div>
								<div class="maquina-container__titulo"><p class="color-3">Título de maquinaria</p></div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="maquina-productos-container">
							<a href="javascript:;">
								<div class="maquina-container__foto text-center">
									<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								</div>
								<div class="maquina-container__titulo"><p class="color-3">Título de maquinaria</p></div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="maquina-productos-container">
							<a href="javascript:;">
								<div class="maquina-container__foto text-center">
									<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								</div>
								<div class="maquina-container__titulo"><p class="color-3">Título de maquinaria</p></div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="maquina-productos-container">
							<a href="javascript:;">
								<div class="maquina-container__foto text-center">
									<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								</div>
								<div class="maquina-container__titulo"><p class="color-3">Título de maquinaria</p></div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="maquina-productos-container">
							<a href="javascript:;">
								<div class="maquina-container__foto text-center">
									<img src="images/slider-maquinas-viales/maquina-1.png" alt="" class="img-responsive">
								</div>
								<div class="maquina-container__titulo"><p class="color-3">Título de maquinaria</p></div>
								<div class="clearfix"></div>
							</a>
						</div>
					</div>
			</div>
		</section>
	</article>
	<?php include('templates/marcas-slider.php'); ?>

<?php include('footer.php'); ?>