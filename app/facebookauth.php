<?php 

	class facebookauth {

		protected $facebook;
		protected $facebookUrl = "http://localhost/PF-ComIT-Conde/callback.php";

		
		public function __construct(facebook\facebook $facebook){
			$this -> facebook = $facebook;
		}

		// Función que nos permitirá crear la URL de Facebook para poder conectarnos
		public function getHelper(){
			return $this -> facebook -> getRedirectLoginHelper();
		}

		public function getAuthUrl(){
			return $this -> getHelper() -> getLoginUrl($this -> facebookUrl);
		}

		public function isLogin(){
			return isset($_SESSION['id_facebook']);
		}

		public function login(){
			try {
				$response = $this -> facebook -> get('/me?fields=id,name,picture', $this->getHelper() -> getAccessToken());

				$usuario = $response -> getGraphUser ();

				$_SESSION['id_facebook'] = $usuario -> getId();

				return true;
			} catch (Exception $e) {
				return false;
			}

			
		}

		public function signOut(){
			unset($_SESSION['id_facebook']);
		}

	}

?>