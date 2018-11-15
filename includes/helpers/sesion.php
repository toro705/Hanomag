<?php

Class Sesion{

	static function logueado(){
		return isset($_SESSION['experiencias']) ? true : false;
	}

	static function validar(){

		include('config/db.php');

		$filtros = array(
			'email' => trim($_POST['email']),
			'clave' => trim($_POST['clave']),
		);
		$usuario = Usuario::obtener($filtros);
		if(! $usuario) {
			return false;

		}else{
			if( isset($_SESSION) ){
				$_SESSION['experiencias']['usuario'] = json_encode($usuario);
				header('location:'.url('home'));
			}
		}	
	}

	static function abrir(){
		session_start();
	}

	static function cerrar(){

		// Destruir todas las variables de sesión.
		$_SESSION = array();

		// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
		// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}

		// Finalmente, destruir la sesión.
		session_destroy();
	}
}
