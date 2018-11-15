<?php

function url($seccion, $dato = null, $idioma = IDIOMA){

	// Definir cuáles URLs son dinámicas (ficha o listado)
	$urls_dinamicas = array(
	    'novedad' => 'ficha',
	    'novedades' => 'listado',
	);

	// Nombre personalizado para las secciones (Definir solo cuando no hay idiomas)//
	$secciones_sin_idioma = array(
	    'ejemplo-seccions' => 'nombre-seccion',
	);

	// Esto es todo lo que hay que modificar. //

	include_once('cadenaUrl.php');

	// Veo si cargar el idioma y lo cargo si corresponde
	static $idioma_cargado  = '';
	static $secciones = array();

	$idiomas_habilitados = json_decode(IDIOMA_ENABLED);

	if( count($idiomas_habilitados)>1 AND in_array($idioma, $idiomas_habilitados)){
		static $cargar_idioma = true;
	}else{
		static $cargar_idioma = false;
	}

	// Defino el texto principal de la URL
	if($cargar_idioma){
		if($idioma_cargado != $idioma){
			include(INCLUDE_PATH.'idioma/'.$idioma.'.php');
			$secciones = $txt['secciones'];
			$idioma_cargado = $idioma;
		}
	}else{
		$secciones = array_merge($secciones_sin_idioma, array('home'=>''));
	}
	//echo '<script>console.log("URL: \"'.$secciones['home'].'\" IDIOMA: '.$idioma.' CARGAR: '.$cargar_idioma.' CARGADO: '.$idioma_cargado.'")</script>';

	// Por defecto el texto coincide con el nombre de la sección
	if(! array_key_exists($seccion, $secciones)){
		$secciones[ $seccion ] = str_replace('_', '-', $seccion);
	}
	// Defino los datos secundarios de la URL
	if(array_key_exists($seccion, $urls_dinamicas)){
		switch($urls_dinamicas[ $seccion ]){
			case 'ficha':
				$nombre = property_exists($dato,'nombre') ? $dato->nombre : $dato->titulo;
				$url = $dato->id.'-'.cadenaUrl($nombre);
				break;

			case 'listado':
				$url = (! is_null($dato) ) ? $dato : '';
				break;
		}
	}

	// Construyo la URL y la devuelvo
	$url = $secciones[ $seccion ].((isset($url) AND $url) ? '/'.$url : '');

	return BASE_URL . ($cargar_idioma ? $idioma.'/' : '') . $url;
}
