<?php

Class Categorias extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "categorias";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "familias";

		if(! isset($_GET['order'])){
	    	$_GET['order'] = array(
				'codigo' => 'ASC',
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
		);

        $this->cargar_config( $controller_config );
    }
}
