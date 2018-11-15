<?php

class _Atributos_model extends MY_Model {

	var $fields = array(
		'nombre',
		'subcategoria_id',
		'orden',
	);

	var $table = 'atributos';

	function __construct(){
        parent::__construct();
    }

     public function save_item($o, $isUpdate){

    	// Compruebo que el nombre sea obligatorio
		if(trim($o->nombre) == ''){
			throw new Exception('El nombre es obligatorio.');
			return false;
		}

		// Compruebo que se seleccione alguna subcategoría
		/*if(trim($o->subcategoria_id) == ''){
			throw new Exception('Seleccione alguna agrupación.');
			return false;
		}*/

		return parent::save_item($o, $isUpdate);
	}

}
