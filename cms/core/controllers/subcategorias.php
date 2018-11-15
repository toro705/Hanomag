<?php

Class Subcategorias extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "subcategorias";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "agrupaciones";

		if(! isset($_GET['order'])){
	    	$_GET['order'] = array(
				'codigo' => 'ASC',
				'categoria_id' => 'ASC',
				'nombre' => 'ASC',
			);
	    }

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
				'filter'  =>'like',
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name' => 'nombre',
					'maxlenght' => 255,
				)
			),

			array(
				'key'     =>'codigo',
				'label'   =>'Código',
				'type'    =>'form_input',
				'filter'  =>'like',
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name' => 'codigo',
					'maxlenght' => 20,
				)
			),

			array(
				'key'	=>'categoria_id',
				'label'	=>'Familia',
				'type'	=>'form_dropdown',
				'filter'=>'match',
				'list'	=>true,
				'class'	=>'form-full label-up',
				'properties'=> array(
					'name'       => 'categoria_id',
					'es_filtro' => false,
					'options'    => array(""=>"Elija una familia") + $this->getOptions('categorias_model','nombre')
				)
			),
		);

        $this->cargar_config( $controller_config );
    }
}
