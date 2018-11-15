<?php

class Usuarios_model extends MY_Model {

	var $fields = array(
		'nombre',
		'username',
		'email',
		'clave',
	);

	var $table = 'usuarios';

	 function __construct()
    {
        parent::__construct();
    }

    public function save_item($o, $isUpdate){

    	// Compruebo el nombre
		if($isUpdate){
			$this->db->where('id !=', $o->id);
		}
		$this->db->where('nombre', $o->nombre);
		$this->db->from( $this->table );
		if($this->db->count_all_results() > 0){
			throw new Exception('Ya existe un usuario con este nombre.');
			return false;
		}

		// Si no ingresó un nombre de usuario uso el nombre
		if($o->username == ''){
			$o->username = $o->nombre;
		}

		// Compruebo el nombre de usuario
		if($isUpdate){
			$this->db->where('id !=', $o->id);
		}

		$this->db->where('username', $o->username);
		$this->db->from( $this->table );
		if($this->db->count_all_results() > 0){
			throw new Exception('Este nombre de usuario no está disponible.');
			return false;
		}

		// Compruebo el email
		if($isUpdate){
			$this->db->where('id !=', $o->id);
		}
		$this->db->where('email', $o->email);
		$this->db->from( $this->table );
		if($this->db->count_all_results() > 0){
			throw new Exception('Ya hay un usuario registrado con este email.');
			return false;
		}

		return parent::save_item($o,$isUpdate);

	}
}