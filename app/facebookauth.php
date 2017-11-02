<?php 

	class facebookauth
	{
		protected $facebook;
		protected $facebookUrl = "http://localhost/PF-ComIT-Conde/callback.php";

		public function __construct (facebook\facebook $facebook){
			$this -> facebook = $facebook;
		}

		public function getHelper(){
			return $this -> facebook -> getRedirectLoginHelper();
		}

		public function getAuthUrl(){
			return $this -> getHelper() -> getLoginUrl ($this -> facebookUrl);
		}

		public function isLogin (){
			return isset ($_SESSION['id_facebook']);
		}
	}

?>