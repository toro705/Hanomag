<?php

Class Columnas_acabados extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "columnas_acabados";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "acabados de columna";

	    $controller_config["paginator_results_per_page"] = 30;

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
				'key'	=>'tipo',
				'label'	=>'Tipo de columna',
				'type'	=>'form_dropdown',
				'filter'=>true,
				'list'	=>true,
				'class'	=>'form-full label-up',
				'properties'=> array(
					'name'       => 'tipo',
					'es_filtro' => false,
					'options'    => $this->getOptions('columnas_tipos_model','nombre')
				)
			),

			array(
				'key'     =>'descripcion',
				'label'   =>'Descripción',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'descripcion',
					'maxlenght' => 500,
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
						array('width'=>'147','height'=>'147', 'method'=>'crop'),
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
