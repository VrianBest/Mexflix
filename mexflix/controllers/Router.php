<?php

class Router {
	public $route;

	public function __construct($route){
		$session_options = array(
			'use_only_cookies' => 1,
			#'auto_start' => 1,
			'read_and_close' => false
		);

		if( !isset($_SESSION) )  session_start($session_options);
		
		if( !isset($_SESSION['ok']) ) $_SESSION['ok'] = false;

		if($_SESSION['ok']) {
			$this->route = isset($_GET['r']) ? $_GET['r'] : 'home';
			$controller = new ViewController();
			
			switch ($this->route) {
				case 'home':
					$controller->load_view('home');
					break;

				case 'movieseries':
					$controller->load_view('movieseries');
					break;

				case 'usuarios':
					$controller->load_view('users');
					break;

				case 'status':
					$controller->load_view('status');
					break;

				case 'salir':
					$user_session = new SessionController();
					$user_session->logout();
					break;

				default:
					$controller->load_view('erro404');
					break;
			}	
		}else {
			if( !isset($_POST['user']) && !isset($_POST['pass'])) {
				$login_form = new ViewController();
				$login_form->load_view('login');
			}else {
				$user_session = new SessionController();
				$session = $user_session->login($_POST['user'], $_POST['pass']);

				if(empty($session)) {
					//echo "El usuario y la contraseña son incorrectos";
					$login_form = new ViewController();
					$login_form->load_view('login');
					header('Location: ./?error=El usuario ' . $_POST['user'] . ' o el password son incorrectos');
				}else {
					//echo "El usuario y la contraseña son correctos";
					$_SESSION['ok'] = true;

					foreach ($session as $row) {
						$_SESSION['user'] = $row['user'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['birthday'] = $row['birthday'];
						$_SESSION['pass'] = $row['pass'];
						$_SESSION['role'] = $row['role'];
					}

					header('Location: ./');
				}
			}
		}
	}

	public function __destruct() {
		#unset($this);
	}
}