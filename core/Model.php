<?php

class Model {

	// public $table;
	protected $connection;

	public static function __callStatic($name, $args){
		$table = strtolower(static::class)."s";
		$connection = new QueryBuilder(App::get("database"),$table);

		if($name === "all"){
			return $connection->$name(...$args)->get();
		}

		return $connection->$name(...$args);
	}

}