<?php

Class Atributos extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "atributos";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "atributos";

		// Ordeno el listado
	    if(! isset($_GET['order'])){
	    	$_GET['order'] = array(
				'subcategoria_id' => 'ASC',
				'nombre' => 'ASC',
			);
	    }

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
				'filter'  =>'like',
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'nombre',
					'maxlenght' => 222,
				)
			),

			/*array(
				'key'	=>'subcategoria_id',
				'label'	=>'Agrupación',
				'type'	=>'form_dropdown',
				'filter'=>'match',
				'list'	=>true,
				'class'	=>'form-quarter label-up cl-b',
				'properties'=> array(
					'name'       => 'subcategoria_id',
					'es_filtro' => false,
					'options'    => array(""=>"Elija una agrupación") + $this->getOptions('subcategorias_model','nombre')
				)
			),*/

		);

        $this->cargar_config( $controller_config );
    }
}
