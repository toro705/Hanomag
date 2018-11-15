<?php

Class Obras extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "obras";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "obras";

		// Ordeno el listado
	    if(! isset($_GET['order'])){
	    	$_GET['order'] = array(
				'fecha' => 'DESC',
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
				'key'	=>'fecha',
				'label'	=>'Fecha',
				'type'	=>'date',
				'filter'=>'=',
				'list'	=>true,
				'class'	=>'form-quarter label-up cl-b',
				'properties'=> array(
					'id'   => 'fecha',
					'name' => 'fecha',
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
						array('width'=>'360','height'=>'224'),
						array('width'=>'260','height'=>'162'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'titulo',
				'label'   =>'Título',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up cl-b',
				'properties'=> array(
					'name'      => 'titulo',
					'maxlenght' => 100,
				)
			),

			array(
				'key'     =>'bajada',
				'label'   =>'Bajada',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-half label-up cl-b',
				'properties'=> array(
					'name'      => 'bajada',
					'maxlenght' => 255,
					'rows' => 5
				)
			),

			array(
				'key'     =>'cuerpo',
				'label'   =>'Cuerpo',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-half label-up cl-b',
				'properties'=> array(
					'name'  => 'cuerpo',
					'class' => 'tinymce-novedad',
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
				'comentario' => 'Las fotos deben tener al menos 554px de ancho y 327px de alto para verse bien. <br />Podés reordenar las fotos
					 agarrandolas y arrastrandolas.',
				'properties'=> array(
					'name'  => 'galeria',
					'sizes' =>array(
						array('width'=>'554','height'=>'327','method' => 'crop'),
						array('width'=>'165','height'=>'97','method' => 'crop'),
						array('width'=>'131','height'=>'77','method' => 'crop'),
					),
					'marca_de_agua' => false,
					'controller'    => $controller_config['script']
				)
			),

		);

        $this->cargar_config( $controller_config );
    }
}
