<?php
 return [

 	"connection" => [

 		"mysql" => [
	 		"host" => "mysql:host=".env("DB_HOST"),
	 		"port" => env("DB_PORT"),
	 		"dbName" => env("DB_DATABASE"),
	 		"userName" => env("DB_USERNAME"),
	 		"password" => env("DB_PASSWORD"),
	 	], 
 	]

 	
 ];