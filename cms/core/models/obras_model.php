<?php

class Obras_model extends MY_Model {

	var $fields = array(
		'activa',
		'fecha',
		'titulo',
		'bajada',
		'cuerpo',
		'foto',
		'galeria_id',
		'orden'
	);

	var $table = 'obras';

	function __construct(){
        parent::__construct();
    }

}
