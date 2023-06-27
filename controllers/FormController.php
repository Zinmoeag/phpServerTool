<?php


/**
 * 
 */
class FormController
{
	public function index(){
		view("form");
	}

	public function create(){
		$artist = new QueryBuilder(App::get("database"),"artists");

		$artist->insert([
			"artist_name" => "zin zin",
			"slug" => "zin_ain",
		]);

		header('Location: /');
	}
}