<?php

Class Metas extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

        $controller_config["script"] 	= "metas";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
        $controller_config["name"] = "metas del sitio";

        // Acciones
        $controller_config['actions_list'] = array(
			'add'    =>	base_url().$controller_config['script'].'/add/{id}/{uriParameters}',
			'editar' =>	base_url().$controller_config['script'].'/edit/{id}/{uriParameters}',
			'delete' =>	'javascript:areYouSurePrompt(\''.base_url().$controller_config['script'].'/delete/{id}/{uriParameters}\');'
        );


	 	 ///////////////////////////////////
	    /// Configuración de los campos ///
	   ///////////////////////////////////

		// Opciones de filtrado
		$controller_config["campos_form"] = array(

			array(
				'key'	=>'seccion',
				'label'	=>'Sección',
				'type'	=>'form_input',
				'filter'=>'like',
				'list'	=>true,
				'class'	=>'form-third label-up',
				'properties'=> array(
					'name'         => 'seccion',
					'id'           => 'seccion',
					'maxlength'    => '50',
				)
			),

			array(
				'key'     =>'titulo',
				'label'   =>'Título',
				'type'    =>'form_input',
				'filter'  =>'like',
				'list'    =>true,
				'idiomas' =>true,
				'class'   =>'form-third label-up clear',
				'properties'=> array(
					'name'      => 'titulo',
					'id'        => 'titulo',
					'maxlength' => '55',
				)
			),

			array(
				'key'	=>'descripcion',
				'label'	=>'Descripción',
				'type'	=>'form_textarea',
				'filter'=>'like',
				'list'	=>true,
				'class'	=>'form-third label-up',
				'properties'=> array(
					'name'         => 'descripcion',
					'id'           => 'descripcion',
					'maxlength'    => '160',
					'rows' => 5
				)
			),
		);

        $this->cargar_config( $controller_config );
    }
}
