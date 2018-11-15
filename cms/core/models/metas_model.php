<?php

class Metas_model extends MY_Model {

	var $fields = array(
		'seccion',
		'titulo_es',
		'titulo_en',
		'titulo_zh',
		'descripcion_es',
		'descripcion_en',
		'descripcion_es',
		'keywords_zh',
		'keywords_en',
		'keywords_zh',
	);

	var $table = 'metas';

	 function __construct()
    {
        parent::__construct();
    }

}
