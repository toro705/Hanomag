<?php

class Columnas_acabados_model extends MY_Model {

	var $fields = array(
		'nombre',
		'tipo',
		'descripcion',
		'foto',
		'orden'
	);

	var $table = 'columnas_acabados';

	function __construct(){
        parent::__construct();
    }

}
