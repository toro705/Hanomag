<?php

include_once('forms/core/Formulario.php');

class Form_pedido extends Formulario{

	/** Construye el mensaje para enviar
	*
	*/
	public function contruirMensaje(){

		ob_start();
		?>
		<?php

	define('EMPRESA', 'Experiencias & Sabores');

	define('WEB', 'http://www.compass-group.com.ar/experiencias/');

	define('BASE', 'http://www.compass-group.com.ar/experiencias/newsletter/');

	define('TITULO', 'Muchas gracias por su pedido!');

	define('MAILING', 'muchas-gracias');

	define('URL', BASE.'/'.MAILING.'/');

	define('RECURSOS', BASE.'/recursos/');

	define('IMAGENES', URL.'images/');
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html><head>
	<meta charset="utf-8">
	<meta property="og:title" content="<?=TITULO?>" />
    <meta property="og:site_name" content="Tecnolive"/>
    <meta name="og:description" content="<?=TITULO?>">
    <meta property="og:image" content="<?=IMAGENES?>cabecera-1.jpg" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="../../images/favicons/favicon.ico">
	<title><?=TITULO?></title>
</head>
<body style="margin:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;" >


<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #FFFFFF;">

	<!-- IMPORTANTE!!! NO DEJAR ESPACIO ENTRE LAS TABLAS CONDICIONALES Y EL CONTENIDO, AL MENOS EN LOS DEL MEDIOS -->
	<!-- Cabecera -->
	<?php if (isset($_GET['envio'])) { ?>
		<tr>
			<td align="center" style="background-color: #E6E6E6;">
			<!--[if (mso)|(IE)]> 
				<table width="640" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td align="center">
			<![endif]-->
				<table style="max-width: 640px; width: 100%; min-width: 320px; text-align: left;" cellspacing="0" cellpadding="0">
						<tr>
							<td align="center" style="padding-top: 5px; padding-bottom: 5px; background-color: #E6E6E6;">
								<a style="font-family: Arial, sans-serif; font-size: 12px; line-height: 20px; color: #000000; text-decoration: none;" href="<?=URL?>" target="_blank">
									VER ONLINE
								</a>
							</td>
						</tr>
				</table>
						<!--[if (mso)|(IE)]> 	
						</td>
					</tr>
				</table>
			<![endif]-->
			</td>
		</tr>
	<?php } ?>
	<tr>
		<td align="center" style="background-color: #000000;">
		<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
		<![endif]-->
			<table style="max-width: 640px; width: 100%; min-width: 320px; text-align: left;" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" style="font-family: Arial, sans-serif; font-size: 10px; line-height: 12px; color: #FFFFFF; text-align: center; padding-top: 10px; padding-bottom: 10px; background-color: #000000; vertical-align: top;">
							<a href="<?=WEB?>" style="color: #FFFFFF;" target="_blank">
								<img src="<?=IMAGENES?>logo_top.gif" width="126" height="90" alt="<?=EMPRESA?>" style="border: 0;">
							</a>
						</td>
					</tr>
			</table>
					<!--[if (mso)|(IE)]>
					</td>
				</tr>
			</table>
		<![endif]-->
		</td>
	</tr>
	<!-- Fin cabecera -->

	<!-- Cuerpo -->
	<tr>
		<td align="center" style="background-color: #FE0000;">
		<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
		<![endif]-->
			<table style="max-width: 640px; width: 100%; min-width: 320px; text-align: left;" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" style="font-family: Arial, sans-serif; font-size: 58px; line-height: 58px; color: #FFFFFF; text-align: center; padding-top: 45px; padding-bottom: 20px; padding-left: 10px; padding-right: 10px; background-color: #FE0000; vertical-align: top;">
							MUCHAS GRACIAS
						</td>
					</tr>
					<tr>
						<td align="left" style="font-family: Arial, sans-serif; font-size: 18px; line-height: 36px; color: #FFFFFF; text-align: center; padding-bottom: 40px; padding-left: 10px; padding-right: 10px; background-color: #FE0000; vertical-align: top;">
							Hemos recibido su solicitud, entre<br>
							el 20 y el 25 del mes en curso,<br>
							recibir&aacute; la respuesta a la solicitud v&iacute;a e-mail
						</td>
					</tr>
			</table>
					<!--[if (mso)|(IE)]>
					</td>
				</tr>
			</table>
		<![endif]-->
		</td>
	</tr>
	<tr>
		<td align="center" style="background-color: #FFFFFF;">
		<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
		<![endif]-->
			<table style="max-width: 640px; width: 100%; min-width: 320px; text-align: left;" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" style="font-family: Arial, sans-serif; font-size: 18px; font-weight: bold; line-height: 18px; color: #000000; text-align: center; padding-top: 35px; padding-bottom: 20px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
							Este es un resumen del pedido:
						</td>
					</tr>
			</table>
					<!--[if (mso)|(IE)]>
					</td>
				</tr>
			</table>
		<![endif]-->
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF; padding-bottom: 20px;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; padding-top: 35px; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #AFAFB0; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #AFAFB0;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 35px; padding-left: 10px; padding-right: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td width="135" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #000000; text-align: center; background-color: #FFFFFF; vertical-align: middle; border-top-width: 1px; border-top-style: solid; border-top-color: #FE0000; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #FE0000; border-left-width: 1px; border-left-style: solid; border-left-color: #FE0000; border-right-width: 1px; border-right-style: solid; border-right-color: #FE0000;">
													EXPERIENCIA
												</td>
												<td width="165" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #FFFFFF; text-align: center; background-color: #94A0BE; vertical-align: middle;">
													<?=$this->campos['experiencias']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding-bottom: 35px; padding-left: 10px; padding-right: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td width="135" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #000000; text-align: center; background-color: #FFFFFF; vertical-align: middle; border-top-width: 1px; border-top-style: solid; border-top-color: #FE0000; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #FE0000; border-left-width: 1px; border-left-style: solid; border-left-color: #FE0000; border-right-width: 1px; border-right-style: solid; border-right-color: #FE0000;">
													FECHA DE<br>
													ENTREGA
												</td>
												<td width="165" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #FFFFFF; text-align: center; background-color: #94A0BE; vertical-align: middle;">
													<?=$this->campos['fecha_entrega']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 35px; padding-left: 10px; padding-right: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td width="135" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #000000; text-align: center; background-color: #FFFFFF; vertical-align: middle; border-top-width: 1px; border-top-style: solid; border-top-color: #FE0000; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #FE0000; border-left-width: 1px; border-left-style: solid; border-left-color: #FE0000; border-right-width: 1px; border-right-style: solid; border-right-color: #FE0000;">
													CANTIDAD
												</td>
												<td width="165" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #FFFFFF; text-align: center; background-color: #94A0BE; vertical-align: middle;">
													<?=$this->campos['cantidad_carros']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding-bottom: 35px; padding-left: 10px; padding-right: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td width="135" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #000000; text-align: center; background-color: #FFFFFF; vertical-align: middle; border-top-width: 1px; border-top-style: solid; border-top-color: #FE0000; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #FE0000; border-left-width: 1px; border-left-style: solid; border-left-color: #FE0000; border-right-width: 1px; border-right-style: solid; border-right-color: #FE0000;">
													FECHA DE<br>
													RETIRO
												</td>
												<td width="165" height="85" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 16px; color: #FFFFFF; text-align: center; background-color: #94A0BE; vertical-align: middle;">
													<?=$this->campos['fecha_retiro']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													COMEDOR
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['comedor']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													TEL. COMEDOR/CELULAR GU
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['telefono']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													CANTIDAD DIARIA DE ALMUERZOS
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['cantidad_almuerzos']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													MOTIVO
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['motivo']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													REQUISITOS DE INGRESO
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['requisitos']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													HORARIOS DE DISPONIBILIDAD DE GU<br>
													PARA RECEPCI&Oacute;N Y ENTREGA DE CARRO
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td width="50" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													DESDE
												</td>
												<td width="125" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['horario_desde']->valor?>
												</td>
												<td width="50" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													HASTA
												</td>
												<td width="125" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['horario_hasta']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													SU GRADO DE FLEXIBILIDAD<br> 
													PARA LA ENTREGA DEL CARRO
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 10px; background-color: #D3D9E6; vertical-align: top;">
													<?=$this->campos['flexibilidad']->valor?>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<tr>
		<td align="center" style="text-align: center; background-color: #FFFFFF; padding-bottom: 45px;">
			<center>
			<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
					<center>
		<![endif]-->
				<table style="max-width: 640px; width: 100%; text-align: center;" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="font-size: 0; vertical-align: top; padding-bottom: 20px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #AFAFB0;">
						<!--[if (mso)|(IE)]>
							<table width="640" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" width="100%" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; line-height: 12px; color: #000000; text-align: left; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFFFFF; vertical-align: top;">
													REQUISITOS SOLICITADOS
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div><!--[if (mso)|(IE)]>
									</center>
									</td>
									<td align="center" style="vertical-align: top;">
									<center>
						<![endif]--><div style="width: 320px; display: inline-block; font-size: 0; vertical-align: top;">
							<table align="left" width="320" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td style="padding-bottom: 10px; background-color:#FFFFFF; vertical-align: top;">
										<table align="left" cellspacing="0" cellpadding="0" border="0">
											<tr>
												<td width="27" style="font-family: Arial, sans-serif; font-size: 10px; line-height: 12px; color: #000000; text-align: left; background-color: #D3D9E6; vertical-align: top;">
													<img src="<?=IMAGENES?>icono-tilde.gif" width="27" height="25" alt="<?=EMPRESA?>" style="display: block; border: 0;">
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (mso)|(IE)]>
									</center>
									</td>
								</tr>
							</table>
						<![endif]-->
						</td>
					</tr>
				</table>
			<!--[if (mso)|(IE)]>
					</center>
					</td>
				</tr>
			</table>
		<![endif]-->
			</center>
		</td>
	</tr>
	<!-- Fin cuerpo -->

	<!-- Pie -->
	<tr>
		<td align="center" style="background-color: #342925;">
		<!--[if (mso)|(IE)]>
			<table width="640" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="center">
		<![endif]-->
			<table style="max-width: 640px; width: 100%; min-width: 320px; text-align: left;" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 11px; color: #FFFFFF; text-align: left; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: #342925; vertical-align: top;">
							&copy; Compass Group Argentina 2016
						</td>
					</tr>
			</table>
					<!--[if (mso)|(IE)]>
					</td>
				</tr>
			</table>
		<![endif]-->
		</td>
	</tr>
	<!-- Fin pie -->

</table>
</body>
</html>
		<?php
		$this->cuerpo = ob_get_contents();
		ob_end_clean();

		return $this->cuerpo;
	}
}

$form_pedido = new Form_pedido(
	array(
		'destinatarios' => array(
			'maquetacion@synapsis.com.ar',
			'matias.fernandez@compass-group.com.ar',
			'ezequiel.vigo@compass-group.com.ar',
			//$usuario->email
		),
		'asunto' 	=> 'Pedido - '.Empresa::$nombre,
		'remitente' => array(
			'nombre' => 'Web '.Empresa::$nombre,
			'email' => 'web@compass-group.com.ar'
		),
		'responder_a' => array(
			'nombre' => 'nombre',
			'email' => 'email'
		),
		'opciones' => array(
			'debug' => false,
			'guardar_contacto' => false,
			'guardar_form' => false
		)
	)
);

$form_pedido->agregarCampos(
	array(

		array(
			'name' 		=> 'experiencias',
			'label' 	=> 'Experiencia',
			'tipo' 		=> 'select',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'cantidad_carros',
			'label' 	=> 'Cantidad carros',
			'tipo' 		=> 'radio',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'fecha_entrega',
			'label' 	=> 'Fecha entrega',
			'tipo' 		=> 'date',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'fecha_retiro',
			'label' 	=> 'Fecha retiro',
			'tipo' 		=> 'date',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'comedor',
			'label' 	=> 'Comedor',
			'tipo' 		=> 'select',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'telefono',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'cantidad_almuerzos',
			'label' 	=> 'Cantidad almuerzos',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'motivo',
			'label' 	=> 'Motivo',
			'tipo' 		=> 'select',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'valor_venta',
			'label' 	=> 'valor_venta',
			'tipo' 		=> 'text',
			'validar' 	=> array( (isset($_POST['motivo']) AND $_POST['motivo']=='Venta') ? 'requerido': ''),
		),

		array(
			'name' 		=> 'requisitos',
			'label' 	=> 'Requisitos',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'horario_desde',
			'label' 	=> 'Horario desde',
			'tipo' 		=> 'select',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'horario_hasta',
			'label' 	=> 'Horario hasta',
			'tipo' 		=> 'select',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'flexibilidad',
			'label' 	=> 'Flexibilidad',
			'tipo' 		=> 'select',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'requisito_acceso',
			'label' 	=> 'Requisito acceso',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'requisito_altura',
			'label' 	=> 'Requisito altura',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'requisito_electricidad',
			'label' 	=> 'Requisito electricidad',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'requisito_puertas',
			'label' 	=> 'Requisito puertas',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'requisito_espacio',
			'label' 	=> 'Requisito espacio',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'requisito_capacitacion',
			'label' 	=> 'Requisito capacitacion',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'requisito_equipamiento',
			'label' 	=> 'Requisito equipamiento',
			'tipo' 		=> 'checkbox',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'captcha',
			'label' 	=> 'Captcha',
			'tipo' 		=> 'Captcha',
			 'validar' 	=> array('requerido'),
		),
	)
);

$form_pedido->agregarMensajeEstado(
	array(
		'incompleto' =>	'Todos los campos son requeridos.',
	)
);

if( isset($_POST['enviar_pedido']) ){
	$form_pedido->enviar();
}


