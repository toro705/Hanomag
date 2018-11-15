<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'repuestos');

 	$metas = array(
		'titulo' 	  => 'Repuestos',
		'descripcion' => 'Solicite sus repuestos online de manera facil y simple.',
		'img' 		  => '',
		'slider'=> '<h1 class="h1 color-1 text-center"><small>SOLICITUD DE</small><span>REPUESTOS</span></h1>',
	);

	include('header.php');

?>
	<article>
		<section id="repuestos" class="banda bg-1">
			<div class="container">
				<?php include('forms/repuestos.php'); ?>
				<?= $form_repuestos->mensaje_estado ?>
				<?php if ($form_repuestos->estado != 'ok') { ?>
				<form id="repuestos-form" role="form" method="post" class="row">
					<div class="col-xs-12 col-sm-6">
						<h3 class="text-left">Datos del repuesto</h3>
						<div class="clearfix"></div>
						  <div class="form-group text-left">
							    <input type="text" class="form-control" id="maquina" placeholder="Máquina" name="maquina" value="<?= (isset($_POST['mombre'])) ? $_POST['maquina'] : ''; ?>" placeholder="">
						  </div>
						  <div class="form-group text-left">
							    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" <?= (isset($_POST['modelo'])) ? $_POST['modelo'] : ''; ?>" placeholder="">
						  </div>
						  <div class="form-group text-left">
							    <input type="number" class="form-control" id="año" name="año" placeholder="Año" <?= (isset($_POST['año'])) ? $_POST['año'] : ''; ?>" placeholder="">
						  </div>
						  <div class="form-group text-left">
							    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código" <?= (isset($_POST['codigo'])) ? $_POST['codigo'] : ''; ?>" placeholder="">
						  </div>
					</div>
					<div class="col-xs-12 col-sm-6 dat-personales">
							<h3 class="text-left">Datos personales</h3>
							<div class="clearfix"></div>
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
					</div>
					<div class="col-xs-12 col-sm-6 col-sm-offset-6">
							<div class="form-group">
							    <div class="col-xs-12 text-center">
									<?php foreach($form_repuestos->campos AS $c){
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
							  <button type="submit" class="btn btn-rojo" name="enviar_repuestos">ENVIAR</button>
							</div>
						</div>						
					</div>
					<?php  } ?>					
				</form>
			</div>
		</section>	
	</article>
	<?php include('templates/marcas-slider.php'); ?>

<?php include('footer.php'); ?>