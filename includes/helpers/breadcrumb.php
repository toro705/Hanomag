<?php

function breadcrumb( $seccion, $dato = null ){


	$mapa_de_sitio = array(
		'home' => array(
			'titulo' => array( 'es'=> 'Inicio', 'en'=> 'Home'),
			'padre' => ''
		),


		'comunidad' => array(
			'titulo' => array( 'es'=> 'Comunidad', 'en'=> 'Community'),
			'padre' => 'home'
		),
			'comunidad_categoria' => array(
				'padre' => 'comunidad'
			),
				'comunidad_centro' => array(
					'padre' => 'comunidad_categoria'
				),
					'comunidad_album' => array(
						'padre' => 'comunidad_centro'
					),


		'empresa' => array(
			'titulo' => array( 'es'=> 'Empresa', 'en'=> 'Company'),
			'padre' => 'home'
		),


		'distribuidores' => array(
			'titulo' => array( 'es'=> 'Distribuidores', 'en'=> 'Distributors'),
			'padre' => 'home'
		),
			'distribuidores_descargas' => array(
				'titulo' => array( 'es'=> 'Distribuidores descargas', 'en'=> 'Distributors downloads'),
				'padre' => 'distribuidores'
			),


		'categoria' => array(
			'padre' => 'home'
		),
			'subcategoria' => array(
				'padre' => 'categoria'
			),
				'producto' => array(
					'padre' => 'subcategoria'
				),


		'contacto' => array(
			'titulo' => array( 'es'=> 'Contacto', 'en'=> 'Contact'),
			'padre' => 'home'
		),

		'busqueda' => array(
			'titulo' => array( 'es'=> 'Resultados de búsqueda', 'en'=> 'Search results'),
			'padre' => 'home'
		),


	);

	$breadcrumb = array();
	$enlace = $mapa_de_sitio[ $seccion ];
	do{

		// Genero las URLs y los títulos, si faltan
		if(in_array($seccion, array('producto','categoria','subcategoria','comunidad_categoria','comunidad_centro','comunidad_album'))){
			foreach(json_decode(IDIOMA_ENABLED) as $idioma){
				$enlace['titulo'][$idioma] = property_exists($dato,'nombre') ? $dato->nombre : $dato->titulo;
			}
			$enlace['href'] = url($seccion, $dato);

		}else{
			$enlace['href'] = url($seccion);
		}

		// Guardo el enlace padre actualizado
		$breadcrumb[ $seccion ] = $enlace;

		// Si tiene padre sigo con el padre
		if(isset($enlace['padre']) AND $enlace['padre']!= ''){
			$seccion = $enlace['padre'];
			$enlace = $mapa_de_sitio[ $seccion ];

			// Actualizo los datos necesarios para generar las URLs
			switch($seccion){
				case 'subcategoria':
					$dato = $dato->subcategoria;
					break;

				case 'categoria':
					$dato = $dato->categoria;
					break;

				case 'comunidad_centro':
					$dato = $dato->centro;
					break;

				case 'comunidad_categoria':
					$dato = $dato->categoria;
					break;
			}

		}else{
			$enlace = false;
		}

	}while( $enlace );

	$nav = '';
	$primero = true;
	foreach($breadcrumb as $e){
		if($primero){
			$nav = '<li>'.$e['titulo'][IDIOMA].'</li>'.$nav;
			$primero = false;
		}else{
			$nav = '<li><a href="'.$e['href'].'">'.$e['titulo'][IDIOMA].'</a></li>'.$nav;
		}
	}

	echo '<ul class="nav-breadcrumb">'.$nav.'</ul>';
}
