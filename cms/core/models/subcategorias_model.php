<?php

class Subcategorias_model extends MY_Model {

	var $fields = array(
		'nombre',
		'codigo',
		'categoria_id',
		'orden',
	);

	var $table = 'subcategorias';

	function __construct(){
        parent::__construct();
    }

     public function save_item($o, $isUpdate){

    	// Compruebo que el nombre sea obligatorio
		if(trim($o->nombre) == ''){
			throw new Exception('El nombre es obligatorio.');
			return false;
		}
		// y que no pueda estar repetido
		if($isUpdate){
			$this->db->where('id !=', $o->id);
		}
		$this->db->where('nombre', $o->nombre);
		$this->db->from( $this->table );
		if($this->db->count_all_results() > 0){
			throw new Exception('Ya hay una agrupación con este nombre.');
			return false;
		}

		// El código no pueda estar repetido
		if($isUpdate){
			$this->db->where('id !=', $o->id);
		}
		$this->db->where('codigo', $o->codigo);
		$this->db->from( $this->table );
		if($this->db->count_all_results() > 0){
			throw new Exception('Ya hay una agrupación con este código.');
			return false;
		}

		// Compruebo que se seleccione alguna categoría
		if(trim($o->categoria_id) == ''){
			throw new Exception('Seleccione alguna familia.');
			return false;
		}

		return parent::save_item($o, $isUpdate);
	}

}
