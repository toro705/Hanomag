<?php

Class Columnas_tipos extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "columnas_tipos";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "tipos de columna";

	     // Drag & drop
        $controller_config["ordenar"] = true;

        // Acciones
        $controller_config['actions_list'] = array(
        	//'preview'	=>	'',
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/',
        	'delete'	=>	'javascript:areYouSurePrompt("'.base_url().$controller_config['script'].'/delete/{id}/");'
        );


	 	 ///////////////////////////////////
	    /// Configuración de los campos ///
	   ///////////////////////////////////

		// Opciones de filtrado
		$controller_config['campos_form'] = array(

			array(
				'key'	=>'activo',
				'label'	=>'Activo',
				'type'	=>'form_checkbox',
				'filter'=>null,
				'list'	=>true,
				'class'	=>'form-quarter label-up cl-b',
				'properties'=> array(
					'name'    => 'activo',
					'value'   => 1,
					'checked' => 'checked',
				)
			),

			array(
				'key'     =>'nombre',
				'label'   =>'Nombre',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'nombre',
					'maxlenght' => 255,
				)
			),

			array(
				'key'     =>'altura',
				'label'   =>'Altura (m)',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'altura',
					'maxlenght' => 11,
				)
			),

			array(
				'key'     =>'peso',
				'label'   =>'Peso (Kg/ml)',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'peso',
					'maxlenght' => 11,
				)
			),

			array(
				'key'    =>'foto',
				'label'  =>'Foto',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third label-up cl-b',
				'properties'=> array(
					'id'       => 'foto',
					'name'     => 'foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'260','height'=>'196', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

		);

        $this->cargar_config( $controller_config );
    }
}
