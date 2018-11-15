<?php

Class Comedor extends Modelo{

	public $id;
	public $codigo;
	public $nombre;


	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){
		$this->id     = $datos->id;
		$this->codigo = $datos->codigo;
		$this->nombre = $datos->nombre;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todos' => ''), $dato = null, $modelo = '', $tabla = ''){

		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;

		return parent::obtener($filtros, $dato, 'Comedor', 'comedores');
	}


	/** Construye el SQL para un filtro específico
	*
	*/
	protected static function filtro($tabla, $tipo, $dato = null){
		$filtro = parent::filtro($tabla, $tipo, $dato);
		switch($tipo){
			case 'usuario':
				$filtro = array(
					'from' => 'JOIN usuarios_comedores ON usuarios_comedores.comedor_id = '.$tabla.'.id',
					'where' => 'usuarios_comedores.usuario_id = '.intval($dato),
				);
				break;
		}

		return $filtro;
	}
}