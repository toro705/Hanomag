<?php

class Aplicaciones_model extends MY_Model {

	var $fields = array(
		'nombre',
		'orden',
	);

	var $table = 'aplicaciones';

	function __construct(){
        parent::__construct();
    }
}
