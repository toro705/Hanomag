<?php

Class Productos extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "productos";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "productos";

		if(! isset($_GET['order'])){
	    	$_GET['order'] = array(
				'subcategoria_id' => 'ASC',
				'nombre' => 'ASC',
			);
	    }

        // Acciones
        $controller_config['actions_list'] = array(
        	//'preview'	=>	'',
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/',
        	'clonar'	=>	base_url().$controller_config['script'].'/clonar/{id}/',
        	'delete'	=>	'javascript:areYouSurePrompt(\''.base_url().$controller_config['script'].'/delete/{id}/\');'
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
				'filter'=>false,
				'list'	=>true,
				'class'	=>'form-half clear label-up',
				'properties'=> array(
					'name'     => 'activo',
					'id'       => 'activo',
					'value'    => '1',
					'checked'    => 'checked',
				)
			),

			array(
				'key'	=>'destacado',
				'label'	=>'Destacado',
				'type'	=>'form_checkbox',
				'filter'=>false,
				'list'	=>true,
				'class'	=>'form-half clear label-up cl-b',
				'properties'=> array(
					'name'     => 'destacado',
					'id'       => 'destacado',
					'value'    => '1',
				)
			),

			array(
				'key'	=>'estado',
				'label'	=>'Estado',
				'type'	=>'form_dropdown',
				'filter'=>null,
				'list'	=>true,
				'class'	=>'form-quarter label-up cl-b',
				'properties'=> array(
					'name'    => 'estado',
					'es_filtro' => false,
					'options' => array(
						"" => "Elija una opción",
						'oferta' => 'Oferta',
						'nuevo' => 'Nuevo',
					)
				)
			),

			array(
				'key'     =>'codigo',
				'label'   =>'Código base',
				'type'    =>'form_input',
				'filter'  =>false,
				'list'    =>false,
				'class'   =>'form-quarter label-up cl-b',
				'properties'=> array(
					'name' => 'codigo',
					'maxlenght' => 20,
				)
			),

			array(
				'key'     =>'nombre',
				'label'   =>'Nombre',
				'type'    =>'form_input',
				'filter'  =>'like',
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name' => 'nombre',
					'maxlenght' => 255,
				)
			),

			array(
				'key'     =>'descripcion',
				'label'   =>'Descripción',
				'type'    =>'form_textarea',
				'filter'  =>false,
				'list'    =>false,
				'class'   =>'form-half label-up cl-b',
				'properties'=> array(
					'name' => 'descripcion',
					'maxlenght' => 255,
				)
			),

			array(
				'key'     =>'detalle',
				'label'   =>'Detalle',
				'type'    =>'form_textarea',
				'filter'  =>false,
				'list'    =>false,
				'class'   =>'form-half label-up cl-b',
				'properties'=> array(
					'name' => 'detalle',
				)
			),

			array(
				'key'	=>'categoria_id',
				'label'	=>'Familia',
				'type'	=>'form_dropdown',
				'filter'=>'match',
				'list'	=>true,
				'class'	=>'form-third label-up cl-b',
				'properties'=> array(
					'name'       => 'categoria_id',
					'es_filtro' => false,
					'options'    => array(""=>"Elija una familia") + $this->getOptions('categorias_model','nombre')
				)
			),

			array(
				'key'    =>'subcategoria_id',
				'label'  =>'Agrupación',
				'type'   =>'form_dropdown_ajax',
				'filter' =>true,
				'list'   =>true,
				'class'  =>'form-full label-up',
				'properties'=> array(
					'es_filtro' => false,
					'name'      => 'subcategoria_id',
					'id'        => 'subcategoria_id',
					'child_model'			=> 'subcategorias',
					'child_describe_field'	=> 'nombre',
					'child_foreign_key'		=> 'categoria_id',
					'parent_select_id'		=> 'categoria_id',
					'options' => array( ""=>"Elija una agrupación:") + $this->getOptions('subcategorias_model','nombre')
				)
			),

			array(
				'key'    =>'aplicaciones',
				'label'  =>'Aplicaciones',
				'type'   =>'form_multiselect_simple',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third label-up',
				'comentario' => 'Para seleccionar varios filtros mantené apretada la tecla Ctrl o Command.',
				'properties'=> array(
					'name'    => 'aplicaciones',
					'options' =>  $this->getOptions('aplicaciones_model','nombre'),
					'size' => 5,
					'style' => 'overflow: hidden;',
				)
			),

			array(
				'key'	=>'marca_id',
				'label'	=>'Marca',
				'type'	=>'form_dropdown',
				'filter'=>false,
				'list'	=>false,
				'class'	=>'form-quarter label-up cl-b',
				'properties'=> array(
					'name'       => 'marca_id',
					'es_filtro' => false,
					'options'    => array(""=>"Elija una marca") + $this->getOptions('marcas_model','nombre')
				)
			),

			array(
				'key'    =>'folleto_id',
				'label'  =>'',
				'type'   =>'form_upload',
				'filter' =>null,
				'titulo' => 'Folleto',
				'class'  =>'form-half clear label-up',
				'properties'=> array(
					'name'          => 'folleto_id',
					'allowed_types' => 'pdf',
					'max_size'      => 2080,
				)
			),

			array(
				'key'    =>'galeria',
				'label'  =>'',
				'type'   =>'gallery',
				'filter' =>null,
				'list'   =>false,
				'hidden' =>false,
				'titulo' => 'Galería',
				'comentario' => 'Podés reordenar las fotos agarrando y soltando.',
				'properties'=> array(
					'name'  => 'galeria',
					'sizes' =>array(
						array('width' =>638,'height'=>520, 'method'=>'crop'),
						array('width' =>233,'height'=>190, 'method'=>'crop'),
					),
					'marca_de_agua' => false,
					'controller'    => $controller_config['script']
				)
			),

		);

        $this->cargar_config( $controller_config );
    }
}
