<?php

include_once('forms/core/Formulario.php');

$form_ficha = new Formulario(
	array(
		'destinatarios' => array(
			'Empresa::$email'//Empresa::$email
		),
		'asunto' 	=> 'Contacto - '.Empresa::$nombre,
		'remitente' => array(
			'nombre' => 'Web '.Empresa::$nombre,
			'email' => 'web@hanomagpatagonia.com.ar'
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

$form_ficha->agregarCampos(
	array(

		array(
			'name' 		=> 'nombre',
			'label' 	=> 'Nombre y Apellido',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),


		array(
			'name' 		=> 'email',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('requerido','formato'),
		),

		array(
			'name' 		=> 'telefono',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'comentarios',
			'label' 	=> 'Consulta',
			'tipo' 		=> 'textarea',
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

$form_ficha->agregarMensajeEstado(
	array(
		'incompleto' =>	'Todos los campos son requeridos.',
	)
);

if( isset($_POST['enviar_ficha']) ){
	$form_ficha->enviar();
}


