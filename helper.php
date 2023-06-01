<?php

function env($key){
	return $value = getenv($key);
}

function dd($val){
	echo "<pre>";
	var_dump($val);
	die();
}