<?php

Class Usuario extends Modelo{

	public $id;
	public $nombre;
	public $email;

	function comedores(){
		return $this->comedores = Comedor::obtener('usuario', $this->id);
	}


	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){
		$this->id     = $datos->id;
		$this->nombre = $datos->nombre;
		$this->email  = $datos->email;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todos' => ''), $dato = null, $modelo = '', $tabla = ''){

		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;

		$elementos = parent::obtener($filtros, $dato, 'Usuario', 'usuarios');

		if(array_key_exists('email', $filtros)){
			return array_key_exists(0, $elementos) ? $elementos[0] : null;
		}else{
			return $elementos;
		}
	}


	/** Construye el SQL para un filtro específico
	*
	*/
	protected static function filtro($tabla, $tipo, $dato = null){
		$filtro = parent::filtro($tabla, $tipo, $dato);
		switch($tipo){
			case 'clave':
				$filtro = array(
					'where' => $tabla.'.clave = "'.md5($dato).'"',
				);
				break;

			case 'email':
				$filtro = array(
					'where' => 'LOWER('.$tabla.'.email) = "'.strtolower(filter_var($dato, FILTER_VALIDATE_EMAIL)).'"',
					'limit' => 1
				);
				break;
		}

		return $filtro;
	}
}