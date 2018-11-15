<?php

Class Columnas extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "columnas";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "columnas";

	    $controller_config["paginator_results_per_page"] = 30;

        // Acciones
        $controller_config['actions_list'] = array(
        	//'preview'	=>	'',
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/',
        	'clonar'	=>	base_url().$controller_config['script'].'/clonar/{id}/',
        	'delete'	=>	'javascript:areYouSurePrompt("'.base_url().$controller_config['script'].'/delete/{id}/");'
        );


	 	 ///////////////////////////////////
	    /// Configuración de los campos ///
	   ///////////////////////////////////

		// Opciones de filtrado
		$controller_config['campos_form'] = array(

			array(
				'key'	=>'activa',
				'label'	=>'Activa',
				'type'	=>'form_checkbox',
				'filter'=>null,
				'list'	=>true,
				'class'	=>'form-quarter label-up cl-b',
				'properties'=> array(
					'name'    => 'activa',
					'value'   => 1,
					'checked' => 'checked',
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
				'key'    =>'acabado',
				'label'  =>'Acabado de la columna',
				'type'   =>'form_dropdown_ajax',
				'filter' =>true,
				'list'   =>true,
				'class'  =>'form-full label-up',
				'properties'=> array(
					'es_filtro' => false,
					'name'      => 'acabado',
					'id'        => 'acabado',
					'child_model'			=> 'columnas_acabados',
					'child_describe_field'	=> 'nombre',
					'child_foreign_key'		=> 'tipo',
					'parent_select_id'		=> 'tipo',
					'options' => $this->getOptions('columnas_acabados_model','nombre')
				)
			),

			array(
				'key'     =>'medida',
				'label'   =>'Medida',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'medida',
					'maxlenght' => 20,
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

		);

        $this->cargar_config( $controller_config );
    }
}
