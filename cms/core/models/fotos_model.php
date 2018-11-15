<?php

class Fotos_model extends MY_Model {

	var $fields = array(
	 'filename',
	 'extension',
	 'epigrafe',
	 'galerias_id',
	 'orden');

	var $table = 'fotos';

	 function __construct()
    {
        parent::__construct();
    }

}
