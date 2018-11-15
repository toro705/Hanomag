<?php

class Novedades_model extends MY_Model {

	var $fields = array(
		'activa',
		'fecha',
		'titulo',
		'cuerpo',
		'foto_id',
		'orden'
	);

	var $table = 'novedades';

	function __construct(){
        parent::__construct();
    }

}
