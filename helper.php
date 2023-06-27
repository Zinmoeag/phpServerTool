<?php

function env($key){
	return $value = getenv($key);
}

function dd($val){
	echo "<pre>";
	var_dump($val);
	die();
}

function view($view,$data = null){

	if($data){
		$blah = extract($data);
	}
	return require "./views/$view.view.php";

}