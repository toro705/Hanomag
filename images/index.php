<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'home');

 	$metas = array(
		'titulo' 		=> 'Home',
		'descripcion' 	=> '',
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
	      		<div>
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-principal/1-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1">Provisión integral de insumos de higiene, <br> seguridad e iluminación profesional</h1>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
			</div >
		</div>
		<section id="soluciones-integrales" class="bg-3 banda relative">
			<div class="container">
				<div class="row">
					<div class="shops-icons relative col-xs-12 text-center">
						<div class="shortcut-container">
							<a href="<?=url('industria')?>" class="shortcut bg-1 hvr-wobble-horizontal text-center">
								<i class="icn icn-industria"></i>
								<p class="industria">Industria</p>
							</a>
						</div>	
						<div class="shortcut-container">
							<a href="<?=url('salud')?>" class="shortcut bg-1 hvr-wobble-horizontal text-center">
								<i class="icn icn-salud"></i>
								<p class="salud">Salud</p>
							</a>
						</div>	
						<div class="shortcut-container">
							<a href="<?=url('educacion-recreacion')?>" class="shortcut bg-1 hvr-wobble-horizontal text-center">
								<i class="icn icn-educacion-recreacion"></i>
								<p class="edicacion-recreacion">Educación/ <br>Recreación</p>
							</a>
						</div>	
						<div class="shortcut-container">
							<a href="<?=url('consorcios')?>" class="shortcut bg-1 hvr-wobble-horizontal text-center">
								<i class="icn icn-consorcios"></i>
								<p class="consorcios">Consorcios</p>
							</a>
						</div>	
						<div class="shortcut-container">
							<a href="<?=url('hoteleria-gastronomia')?>" class="shortcut bg-1 hvr-wobble-horizontal text-center">
								<i class="icn icn-hoteleria-gastronomia"></i>
								<p class="hoteleria-gastronomia">Hotelería/ <br>Gastronomía</p>
							</a>
						</div>	
					</div>
				</div>
			</div>
			<div class="container">
				<h2 class="h2 text-center relative">Soluciones integrales <br> a la medida de sus necesidades</h2>
			</div>
		</section>

		<section id="home-products" class="bg-1 relative banda">
			<?php
			$productos_destacados = Producto::obtener('destacados');
			if($productos_destacados){ ?>
			<div class="shops-prodcts-container relative col-xs-12">
				<div class="container text-center">
					<?php foreach ($productos_destacados as $p) { ?>
						<a href="<?= $p->url ?>" class="relative shops-products-1 text-center animate">
							<div class="product-status absolute">
								<i class="icn <?= $p->estado ? 'icn-prod-'.$p->estado : '' ?>"></i>	
							</div>
							<div class="product-image">
								<img class="img-responsive" src="<?= $p->foto->src('233x190') ?>">
							</div>
							<div class="product-title text-left">
								<div class="title">
									<p class="h4 color-2"><b><?= $p->nombre ?></b></p>
								</div>
								<div class="descrip">
									<p class="h5 color-2"><?= $p->descripcion ?></p>
								</div>
							</div>
							<hr>

							<?php if($p->aplicaciones){ ?>
							<div class="product-icons text-left">
								<?php foreach($p->aplicaciones as $a){ ?>
								<i class="icn icn-<?=$a->clave?>-xs"></i>
								<?php } ?>
							</div>
							<?php } ?>

							<div class="clearfix"></div>
						</a>
					<?php } ?>
				</div>
			</div>
			<?php } ?>

			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="row">
							<div class="col-xs-12 bg-2 banner-envio-1 text-center relative">
								<i class="icn icn-lineas-horizontales hidden-xs"></i>
								<p><b class="color-3">Envíos</b><br class="visible-xs"> <b class="color-1">a CABA<br class="visible-xs inline-block"> y GBA</b></p>
								<br class="visible-xs inline-block">
								<i class="icn icn-camion"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="nuestros-servicios" class="bg-3 color-2 banda">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h3 class="h3 text-center">Contamos con distribución a nivel nacional y personal especializado para brindar asesoramiento específico de acuerdo a las necesidades de nuestros clientes</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="conozcanos-container">
						<div class="table-cell v-middle icn-conozcanos"><i class="icn icn-orientacion"></i></div>
						<div class="table-cell v-middle">
							<div class="servicios-texto">
								<b class="paragraph-1 inline-block">Orientación al cliente</b>
								<p class="paragraph-2">Propuestas a medida de las necesidades del cliente	</p>
							</div>
						</div>
					</div>
					<div class="conozcanos-container">
						<div class="table-cell v-middle icn-conozcanos"><i class="icn icn-tilde"></i></div>
						<div class="table-cell v-middle">
							<div class="servicios-texto">
								<b class="paragraph-1 inline-block">Calidad de productos</b>
								<p class="paragraph-2">Productos de primera línea con garantía del fabricante</p>
							</div>
						</div>
					</div>
					<div class="conozcanos-container">
						<div class="table-cell v-middle icn-conozcanos"><i class="icn icn-flecha-circle"></i></div>
						<div class="table-cell v-middle">
							<div class="servicios-texto">
								<b class="paragraph-1 inline-block">Soluciones integrales</b>
								<p class="paragraph-2">Amplio portfolio <br>de productos</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<a href="<?=url('quienes-somos')?>" class="btn btn-md btn-blanco">Conózcanos</a>
					</div>
				</div>
			</div>
		</section>
		<?php include('templates/marcas-slider.php'); ?>

	</article>

<?php include('footer.php'); ?>