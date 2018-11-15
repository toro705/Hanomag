<?php

Class Marcas extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "marcas";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "marcas";

		if(! isset($_GET['order'])){
	    	$_GET['order'] = array(
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
				'key'    =>'logo_id',
				'label'  =>'Logo',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third label-up cl-b',
				'properties'=> array(
					'id'       => 'logo_id',
					'name'     => 'logo_id',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'auto','height'=>'80', 'method'=>'crop'),
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
