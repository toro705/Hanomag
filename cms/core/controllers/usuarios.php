<?php

Class Usuarios extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

        $controller_config["script"] 	= "usuarios";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
        $controller_config["name"] = "usuarios";

        // Acciones
        $controller_config['actions_list'] = array(
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/{uriParameters}',
        	'delete'	=>	'javascript:areYouSurePrompt(\''.base_url().$controller_config['script'].'/delete/{id}/{uriParameters}\');'
        );

        // Campos que no se muestran sus valores al editar
        $controller_config['hide_value_fields'] = array('password','password_validate');



	 	 /////////////////////////////////////////
	    ////// Configuración de los campos //////
	   /////////////////////////////////////////

        $controller_config["campos_form"] = array(

			array(
				'key'=>'nombre',
				'label'=>'Nombre',
				'type'=>'form_input',
				'filter'=>'like',
				'list'=>true,
				'properties'=> array(
					'name'        => 'nombre',
					'id'          => 'nombre',
					'maxlength'   => '255',
				)
			),

			array(
				'key'=>'username',
				'label'=>'Nombre de usuario',
				'type'=>'form_input',
				'filter'=>false,
				'list'=>false,
				'hidden'=>true,
				'properties'=> array(
					'name'        => 'username',
					'id'          => 'username',
					'maxlength'   => '255',
				)
			),

			array(
				'key'=>'email',
				'label'=>'E-mail',
				'type'=>'form_input',
				'filter'=>true,
				'list'=>true,
				'properties'=> array(
					'name'        => 'email',
					'id'          => 'email',
					'maxlength'   => '255',
					'size'        => '25'
				)
			),

			array(
				'key'=>'clave',
				'label'   =>'Clave',
				'type'      =>'form_password',
				'validate'  => 'password_validate',
				'filter'=>null,
				'properties'=> array(
					'name'        => 'clave',
					'id'          => 'clave',
					'maxlength'   => '255',
					'size'        => '25'
				)
			),

			array(
				'key'=>'password_validate',
				'label'=>'Repetir clave',
				'type'=>'form_password',
				'filter'=>null,
				'properties'=> array(
					'name'        => 'password_validate',
					'id'          => 'password_validate',
					'maxlength'   => '255',
					'size'        => '25'
				)
			),

        );

        $this->cargar_config( $controller_config );
    }
}
