<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'ficha');

 	$metas = array(
		'titulo' 	  => 'Máquinas Viales',
		'descripcion' => 'Máquinas Viales',
		'img' 		  => '',
		'slider'=> '<h1 class="h1 color-1 text-center"><small><b>MÁQUINAS</b></small><span>VIALES</span></h1>',
	);

	include('header.php');

?>
	<article>
		<section id="ficha" class="bg-1">
			<div class="container relative bg-1">
				<div class="button-kit-top pull-right relative">	
						<a class="paragraph-4" href="javascript:;"><i class="fa fa-arrow-left"></i>Volver</a>
						<a class="paragraph-4" href="javascript:;"><i class="fa fa-print"></i>Imprimir</a>
				</div>
				<div class="clearfix"></div>

				<div class="row">	
					<div class="col-xs-12 col-sm-7 slider">
						<div class="row visible-xs">
							<div class="col-xs-12">
								<h2 class="text-center">Cargadora CDM860 LONKING</h2>
							</div>
						</div>
						<div class="slider-ficha relative">
							<div class="slider-ficha__carousel">
					      		<div class="item">
						       		 <img class="img-responsive slider-ficha__imagen" src="images/slider-ficha/ficha1.jpg" alt="">
							    </div>
							</div>
 						 </div>						
					</div>				
					<div class="col-xs-12 col-sm-5 detalle-producto">
						<div class="row hidden-xs">
							<div class="col-xs-12">
								<h2>Cargadora CDM860 LONKING</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<hr>
								<p class="paragraph-4">Para operaciones de gran porte este modelo de 3,5 m3 de capacidad, un peso operativo de 21.500 Kg y una potencia de 235HP, es el equipo ideal por sus múltiples usos.</p>
							</div>
						</div>
						<div class="row detalle-producto__equipo">
							<div class="col-xs-12">
								<p class="paragraph-4"><b>EQUIPO</b></p>
								<ul class="unstyled-list datos">
									<li><p class="paragraph-4"><i class="fa fa-check" aria-hidden="true"></i>Motor Original WeiChai WD10G240E11</p></li>
									<li><p class="paragraph-4"><i class="fa fa-check" aria-hidden="true"></i>Motor Original WeiChai WD10G240E11</p></li>
									<li><p class="paragraph-4"><i class="fa fa-check" aria-hidden="true"></i>Motor Original WeiChai WD10G240E11</p></li>
									<li><p class="paragraph-4"><i class="fa fa-check" aria-hidden="true"></i>Motor Original WeiChai WD10G240E11</p></li>
									<li><p class="paragraph-4"><i class="fa fa-check" aria-hidden="true"></i>Motor Original WeiChai WD10G240E11</p></li>
									<li><p class="paragraph-4"><i class="fa fa-check" aria-hidden="true"></i>Motor Original WeiChai WD10G240E11</p></li>
									
								</ul>
							</div>
						</div>
						<div class="row botonera">
							<div class="col-xs-12  paragraph-4">
							<hr>	
								<a href="javascript:;" class="pull-left botonera__pdf">
									<span>Descargar PDF</span> <i class="fa fa-file-pdf-o"></i>
								</a>
								<div class="clearfix visible-xs"></div>
								<div class="botonera__social pull-right">	
									<p class="inline-block">Compartilo</p>
									<a href="javascript:;" class="inline-block"><i class="fa fa-facebook anim-suave" aria-hidden="true"></i></a>
									<a href="javascript:;" class="inline-block"><i class="fa fa-google-plus anim-suave" aria-hidden="true"></i></a>
									<a href="javascript:;" class="inline-block"><i class="fa fa-twitter anim-suave" aria-hidden="true"></i></a>
								</div>
								<div class="clearfix visible-xs"></div>
							</div>
						</div>
					</div>					
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
		<section id="mas-informacion" class="banda bg-2">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="text-center">Reciba más información de este producto</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						<?php include('forms/ficha.php'); ?>
						<?= $form_ficha->mensaje_estado ?>
						<?php if ($form_ficha->estado != 'ok') { ?>

						<form id="ficha-form" role="form" method="post">
						  <div class="form-group text-left">
							      <input type="nombre" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?= (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>" placeholder="">
						  </div>
						  <div class="form-group text-left">
							      <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" <?= (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; ?>" placeholder="">
						  </div>
						  <div class="form-group text-left">
							      <input type="email" class="form-control" id="email" name="email"  placeholder="Correo electrónico" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" placeholder="">
						  </div>
						  <div class="form-group text-left">
									<textarea name="comentarios" id="comentarios" cols="30" rows="5" placeholder="Consulta" class="form-control"><?= (isset($_POST['comentarios'])) ? $_POST['comentarios'] : ''; ?></textarea>
						  </div>
						  <div class="form-group text-left">
					            <div class="col-xs-12">
									<?php foreach($form_ficha->campos AS $c){
										if($c->name == 'captcha'){
										?>
										<div class="form-group">
											<div class="col-xs-12 text-center">
							                    <div class="grecaptcha" data-sitekey="<?=$c->site_key; ?>" data-theme="light" data-size="normal" style="overflow: hidden; border-radius: 5px; margin: 0 auto; display: inline-block">
													<noscript>
													  	<div style="width: 100%; height: 500px; margin: 0 auto;">
															<iframe src="https://www.google.com/recaptcha/api/fallback?k=<?=$c->site_key; ?>"
															        frameborder="0" scrolling="no"
															        style="width: 100%; height:422px; border-style: none;">
															</iframe>
															<textarea style="width:285px; height:60px;" id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"></textarea>
													  </div>
													</noscript> 
							                    </div>
							                </div>
						                </div>
						                <?php }
					                } ?>
					            </div>
				            </div>
						  <div class="form-group">
						    <div class="col-xs-12 text-center">
						      <button type="submit" class="btn btn-rojo" name="enviar_ficha">ENVIAR</button>
						    </div>
						  </div>
						</form>	
						<?php  } ?>					
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include('templates/marcas-slider.php'); ?>

<?php include('footer.php'); ?>