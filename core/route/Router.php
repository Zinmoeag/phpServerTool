<?php

class Router{
	public $routes = [
		"GET" => [],
		"POST" => [],
	];

	public static function load($filename)
	{
		$Router = new Router;

		require $filename;

		return $Router;
	}

	public function get($uri, $controller)
	{
		$this->routes["GET"][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes["POST"][$uri] = $controller;
	}

	public function direct($uri,$method)
	{
		// check uri exist and return controller
		if(!array_key_exists($uri,$this->routes[$method])){
			die("404");
		}

		$destination = explode("@",$this->routes[$method][$uri]);

		$this->controller($destination[0],$destination[1]);
	}

	protected function controller($class, $method){

		$controller = new $class;
		$controller->$method();
	}
}