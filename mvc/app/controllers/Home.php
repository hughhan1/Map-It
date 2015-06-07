<?php

class Home extends Controller {

	public function index() {

		$config = array(
		    'apiKey' => 'b6446a69f86a4e06bb807270b908c5a8',
		    'apiSecret' => '38df69501f064350921ae5dab0bb0a0d',
		    'apiCallback' => 'http://macklemore.local/Map-It/src/success.php'
		);

		$instagram = $this->model('Instagram', $config);
		$this->view('home/index', ['loginUrl' => $instagram->getLoginUrl()]);
	}

	public function login($loginUrl = NULL) {
		$loginUrl ? header('Location: ' . $loginUrl);
	}

	public function search() {

	}

	public function popular() {

	}
	
}

?>