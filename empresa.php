<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'empresa');

 	$metas = array(
		'titulo' 	  => 'Empresa',
		'descripcion' => 'Fundado en el año 2008 inició sus actividades comerciales como concesionario Oficial Hanomag para la venta y distribución de tractores agrícolas en toda la Patagonia Argentina',
		'img' 		  => '',
		'slider'=> '<h1 class="h1 color-1 text-center"><br><span>EMPRESA</span></h1>',
	);

	include('header.php');

?>
	<article>
		<section id="empresa-1" class="banda bg-1">	
			<div class="container">	 
				<div class="row">
					<div class="col-xs-12">
						<h3 class="text-center">Hanomag Patagonia</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-5 col-md-offset-1">
						<p class="paragraph-1">Fundamos “Hanomag Patagonia S.A.” en el año 2008 e iniciamos nuestras actividades comerciales como concesionario Oficial Hanomag para la venta y distribución de tractores agrícolas en toda la Patagonia Argentina, con puntos de ventas en Villa Regina y General Roca.<br><br> 

						En el año 2009, inauguramos una sucursal en la ciudad de Neuquén. Inmediatamente incorporamos la comercialización, también como agente oficial, de máquinas viales Michigan. Esta ampliación nos permitió insertarnos en el mercado de la construcción, petróleo y minería.
						</p>
					</div>
					<div class="col-sm-12 col-md-5">
						<p class="paragraph-1">En el año 2011, la empresa Biscayne Servicios S.A. nos designó concesionario Oficial de todas sus líneas de productos Lonking, Tiangong y Liangong, entre otras.<br><br> 
						En el año 2016 anexamos la línea de accesorios para mini-palas de la afamada marca Euro-implementos.<br><br>

						Esta gran variedad de productos nos permite satisfacer ampliamente las necesidades de nuestros clientes.

						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="empresa-2" class="banda bg-2">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-9 col-md-offset-2">
						<div class="table-cell iconos v-middle">
							<i class="icn icn-aprobados"></i>
						</div>
						<div class="table-cell descrip v-middle">
							<p class="paragraph-1 color-6"><b>EQUIPOS APROBADOS</b></p>
							<p class="paragraph-1">Todos nuestros equipos están probados y APROBADOS por muchísimos consumidores argentinos, trabajando en distintas zonas y en muchos casos, en condiciones muy exigentes como las que imperan en nuestra región patagónica.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-9 col-md-offset-2 v-middle">
						<div class="table-cell iconos v-middle">
							<i class="icn icn-entrega"></i>
						</div>
						<div class="table-cell descrip v-middle">
							<p class="paragraph-1 color-6"><b>ASISTENCIA POST-VENTA</b></p>
							<p class="paragraph-1">Para nosotros, la asistencia post-venta es tan importante como la calidad del producto original. El costo de un equipo fuera de servicio es altísimo. De allí nuestra política de substancial y permanente inversión en repuestos y servicios para nuestros clientes. Damos soporte a las marcas que representamos y eso marca la diferencia con la competencia. Tenemos la convicción y nuestra experiencia lo afirma, que es tan importante vender productos de calidad como dar respuesta con personal profesionalizado y repuestos originales.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-9 col-md-offset-2">
						<div class="table-cell iconos v-middle">
							<i class="icn icn-precio"></i>
						</div>
						<div class="table-cell descrip v-middle">
							<p class="paragraph-1 color-6"><b>RELACIÓN PRECIO-CALIDAD</b></p>
							<p class="paragraph-1">Hemos demostrado que se puede satisfacer la demanda en el mercado con equipos cuya relación precio/calidad resulta muy atractiva para los usuarios que obtienen alta eficiencia para realizar sus trabajos en tiempo y forma.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-9 col-md-offset-2">
						<div class="table-cell iconos v-middle">
							<i class="icn icn-asistencia"></i>
						</div>
						<div class="table-cell descrip v-middle">
							<p class="paragraph-1 color-6"><b>ENTREGA INMEDIATA</b></p>
							<p class="paragraph-1">Contamos con unidades en stock para entrega inmediata.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include('templates/marcas-slider.php'); ?>

<?php include('footer.php'); ?>