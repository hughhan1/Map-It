<?php

class App {

	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	/** Default constructor. */
	public function __construct() {

		/* Get URL from browser. */
		$url = $this->parseUrl();

		/* If URL refers to a controller, then set controller to something new. */
		if (file_exists('../app/controllers/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		}

		/* Redirect to controller. */
		require_once '../app/controllers/' . $this->controller . '.php';

		$this->controller = new $this->controller;

		/* If URL refers to a method, then set method to something new. */
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		/* If URL refers to parameters, then set the parameters to something new. */
		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params);

	}

	public function parseUrl() {
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}