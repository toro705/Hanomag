<?php

class Accesorios_model extends MY_Model {

	var $fields = array(
		'activo',
		'nombre',
		'especificaciones',
		'peso',
		'codigo',
		'precio',
		'foto',
		'orden'
	);

	var $table = 'accesorios';

	function __construct(){
        parent::__construct();
    }

}
