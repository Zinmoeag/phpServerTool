<?php


	$Router->get("","PagesController@index");

	$Router->get("artist","ArtistController@index");

	$Router->get("category","PagesController@category");

	$Router->get("form","FormController@index");

	$Router->get("blog","BlogController@index");

	$Router->post("formadd","FormController@create");

