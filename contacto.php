<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'contacto');

 	$metas = array(
		'titulo' 	  => 'Contacto',
		'descripcion' => 'Contactenos Hanomag Patagonia.',
		'img' 		  => '',
		'slider'=> '<h1 class="h1 color-1 text-center"><span>CONTACTO</span></h1>',
	);

	include('header.php');

?>
	<article>
		<section id="contacto" class="banda bg-1">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2>Contáctese con nosotros</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7">
						<?php include('forms/contacto.php'); ?>
						<?= $form_contacto->mensaje_estado ?>
						<?php if ($form_contacto->estado != 'ok') { ?>

						<form id="contacto-form" role="form" method="post">
						 <div class="form-group text-left">
							    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?= (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>">
							</div>
							<div class="form-group text-left">
							    <input type="text" class="form-control" id="empresa" placeholder="Empresa" name="empresa" value="<?= (isset($_POST['empresa'])) ? $_POST['empresa'] : ''; ?>">
							</div>
							<div class="form-group text-left">
							    <input type="text" class="form-control" id="domicilio" placeholder="Domicilio" name="domicilio" value="<?= (isset($_POST['domicilio'])) ? $_POST['domicilio'] : ''; ?>">
							</div>
							<div class="form-group text-left">
							    <input type="text" class="form-control" id="localidad" placeholder="Localidad" name="localidad" value="<?= (isset($_POST['localidad'])) ? $_POST['localidad'] : ''; ?>">
							</div>
							<div class="form-group text-left">
							    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" <?= (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; ?>">
							</div>
							<div class="form-group text-left">
								<input type="email" class="form-control" id="email" name="email"  placeholder="Correo electrónico" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
							</div>
							<div class="form-group text-left">
							    <input type="nombre" class="form-control" id="asunto" placeholder="Asunto" name="asunto" value="<?= (isset($_POST['asunto'])) ? $_POST['asunto'] : ''; ?>">
							</div>
							<div class="form-group text-left">
								<textarea name="comentarios" id="comentarios" cols="30" rows="5" placeholder="Consulta" class="form-control"><?= (isset($_POST['comentarios'])) ? $_POST['comentarios'] : ''; ?></textarea>
							</div>
							<div class="form-group text-left">
							    <div class="col-xs-12">
									<?php foreach($form_contacto->campos AS $c){
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
								  <button type="submit" class="btn btn-rojo" name="enviar_contacto">ENVIAR</button>
								</div>
								<div class="clearfix"></div>
							</div>
						</form>	
						<?php  } ?>					
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<h3>Hanomag Patagonia S.A.</h3>
						<div class="block ubicacion relative">
							<b class="paragraph-2 color-6">Villa Regina</b>
							<p class="paragraph-2"><?= Empresa::$direccion ?><br><?= Empresa::$localidad ?> - <?= Empresa::$provincia ?> <?= Empresa::$CP ?><br>Tel. <?= Empresa::$telefono ?></p>
						</div>
						<div class="block ubicacion relative">
							<b class="paragraph-2 color-6">Neuquén</b>
							<p class="paragraph-2"><?= Empresa::$direccion2 ?><br><?= Empresa::$provincia2 ?> <?= Empresa::$CP2 ?><br>Tel. <?= Empresa::$telefono2 ?><br><?= Empresa::$email ?></p>
						</div>

					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include('templates/marcas-slider.php'); ?>

<?php include('footer.php'); ?>