<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'accesorios');

 	$metas = array(
		'titulo' 	  => 'Accesorios',
		'descripcion' => 'Accesorios para Minipalas',
		'img' 		  => '',
		'slider'=> '<h1 class="h1 color-1 text-center"><br><span>ACCESORIOS</span><small>PARA MINIPALAS</small></h1>',
	);

	include('header.php');

?>
	<article>
		<section id="accesorios" class="banda bg-1">	
			<div class="container">	 
				<div class="row text-center">
					<div class="box-2 col-md-3 col-sm-4 anim-suave">
						<a href="javascript:;">
							<div class="box-2__foto">
								<img src="images/novedades/novedad.jpg" alt="" class="img-responsive">
							</div>
							<div class="box-2__detalle">
								<div class="box-2__detalle__titulo"><p class="color-3 paragraph-3">Producto Usado</p></div>
								<div class="box-2__detalle__descrip"><p class="color-3">Descripción Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum, libero sit amet semper.</p></div>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="box-2 col-md-3 col-sm-4 anim-suave">
						<a href="javascript:;">
							<div class="box-2__foto">
								<img src="images/novedades/novedad.jpg" alt="" class="img-responsive">
							</div>
							<div class="box-2__detalle">
								<div class="box-2__detalle__titulo"><p class="color-3 paragraph-3">Producto Usado</p></div>
								<div class="box-2__detalle__descrip"><p class="color-3">Descripción Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum, libero sit amet semper.</p></div>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="box-2 col-md-3 col-sm-4 anim-suave">
						<a href="javascript:;">
							<div class="box-2__foto">
								<img src="images/novedades/novedad.jpg" alt="" class="img-responsive">
							</div>
							<div class="box-2__detalle">
								<div class="box-2__detalle__titulo"><p class="color-3 paragraph-3">Producto Usado</p></div>
								<div class="box-2__detalle__descrip"><p class="color-3">Descripción Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum, libero sit amet semper.</p></div>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="box-2 col-md-3 col-sm-4 anim-suave">
						<a href="javascript:;">
							<div class="box-2__foto">
								<img src="images/novedades/novedad.jpg" alt="" class="img-responsive">
							</div>
							<div class="box-2__detalle">
								<div class="box-2__detalle__titulo"><p class="color-3 paragraph-3">Producto Usado</p></div>
								<div class="box-2__detalle__descrip"><p class="color-3">Descripción Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum, libero sit amet semper.</p></div>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="box-2 col-md-3 col-sm-4 anim-suave">
						<a href="javascript:;">
							<div class="box-2__foto">
								<img src="images/novedades/novedad.jpg" alt="" class="img-responsive">
							</div>
							<div class="box-2__detalle">
								<div class="box-2__detalle__titulo"><p class="color-3 paragraph-3">Producto Usado</p></div>
								<div class="box-2__detalle__descrip"><p class="color-3">Descripción Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum, libero sit amet semper.</p></div>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="box-2 col-md-3 col-sm-4 anim-suave">
						<a href="javascript:;">
							<div class="box-2__foto">
								<img src="images/novedades/novedad.jpg" alt="" class="img-responsive">
							</div>
							<div class="box-2__detalle">
								<div class="box-2__detalle__titulo"><p class="color-3 paragraph-3">Producto Usado</p></div>
								<div class="box-2__detalle__descrip"><p class="color-3">Descripción Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum, libero sit amet semper.</p></div>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>

				</div>
			</div>
		</section>
	</article>
	<?php include('templates/marcas-slider.php'); ?>

<?php include('footer.php'); ?>