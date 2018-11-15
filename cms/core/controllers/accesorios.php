<?php

Class Accesorios extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "accesorios";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "accesorios";

	    $controller_config["paginator_results_per_page"] = 30;

        // Acciones
        $controller_config['actions_list'] = array(
        	//'preview'	=>	'',
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/',
        	//'clonar'	=>	base_url().$controller_config['script'].'/clonar/{id}/',
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
				'key'     =>'codigo',
				'label'   =>'Código',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'codigo',
					'maxlenght' => 10,
				)
			),

			array(
				'key'     =>'precio',
				'label'   =>'Precio',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'precio',
					'maxlenght' => 7,
				)
			),

			array(
				'key'     =>'peso',
				'label'   =>'Peso',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'peso',
					'maxlenght' => 7,
				)
			),

			array(
				'key'     =>'especificaciones',
				'label'   =>'Especificaciones',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'especificaciones',
					'maxlenght' => 800,
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
						array('width'=>'auto','height'=>'72'),
					),
				'siempre_jpg' => false,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

		);

        $this->cargar_config( $controller_config );
    }
}
