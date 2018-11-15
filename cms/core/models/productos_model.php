<?php

class Productos_model extends MY_Model {

	var $fields = array(
		'codigo',
		'activo',
		'destacado',
		'estado',
		'nombre',
		'descripcion',
		'detalle',
		'aplicaciones',
		'categoria_id',
		'subcategoria_id',
		'marca_id',
		'folleto_id',
		'galeria_id',
		'orden',
	);

	var $table = 'productos';

	function __construct(){
        parent::__construct();
    }

     public function save_item($o, $isUpdate){

    	/* Lo comento porque no me deja subir PDFs si no
    	// Compruebo que el nombre sea obligatorio
		if(trim($o->nombre) == ''){
			throw new Exception('El nombre es obligatorio.');
			return false;
		}

		// Compruebo que se seleccione alguna subcategoría
		if(trim($o->subcategoria_id) == ''){
			throw new Exception('Seleccione alguna agrupación.');
			return false;
		}*/

		return parent::save_item($o, $isUpdate);
	}

}
