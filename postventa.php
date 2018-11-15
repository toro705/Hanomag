<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'postventa');

 	$metas = array(
		'titulo' 	  => 'Postventa',
		'descripcion' => 'La atención al cliente no termina con la venta del equipo. Acompañamos a nuestros clientes con asistencia y asesoramiento necesario para prolongar la vida útil de sus equipos.',
		'img' 		  => '',
		'slider'=> '<h1 class="h1 color-1 text-center"><span>SERVICIO<BR>POSTVENTA</span></h1>',
	);

	include('header.php');

?>
	<article>
		<section id="postventa" class="banda bg-1">	
			<div class="container">	 
				<div class="row">
					<div class="col-sm-12 col-md-8 col-md-offset-2">
						<h2 class="text-center">Para nosotros, la asistencia post venta <br class="visible-lg"> es tan importante como la calidad del producto original...</h2>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-12 col-md-8 col-md-offset-2">
						<p class="paragraph-1">La atención al cliente no termina con la venta del equipo. Acompañamos a nuestros clientes, 
	siendo nuestro objetivo brindar la asistencia y asesoramiento necesario para prolongar al máximo
	 la vida útil de sus equipos.</p>
						<p class="paragraph-1">Hanomag Patagonia le ofrece una atención personalizada, repuestos originales y trabajo con garantía.
	</p>
						<p class="paragraph-1">unto con el equipo, el cliente recibe un Manual de Mantenimiento preventivo donde puede encontrar detallado el plan recomendado para los servicios y el cumplimiento de la garantía.
	</p>
						<p class="paragraph-1">No lo olvide…La prevención y la detección temprana de fallas potenciales minimiza gastos de reparación y evita excesivos tiempos de detención del equipo. 
	</p>
						<p class="paragraph-1"><b>Solicite turno y cotización.</b></p>
						
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include('templates/marcas-slider.php'); ?>

<?php include('footer.php'); ?>