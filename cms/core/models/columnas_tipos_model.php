<?php

class Columnas_tipos_model extends MY_Model {

	var $fields = array(
		'activo',
		'nombre',
		'altura',
		'peso',
		'foto',
		'orden'
	);

	var $table = 'columnas_tipos';

	function __construct(){
        parent::__construct();
    }

}
