<?php

// namespace core\database;

class QueryBuilder{
	protected $connection;
	protected $table;
	protected $query;

	public function __construct($connection,$table){
		$this->connection = $connection;
		$this->table = $table;
	}

	private function runAndGet($query){
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function all(){
		$query = $this->connection->prepare("select * from $this->table;");
		return $this->runAndGet($query);
	}

	public function where($column,$value,$operator="="){
		if(gettype($value) === "string"){
			$this->query = $this->connection->prepare("select * from $this->table where ". $column . " $operator" . "'" ."$value"."'");
			return $this;
		}else{
			$this->query = $this->connection->prepare("select * from $this->table where $column $operator $value");
			return $this;
		}
	}

	public function get(){
		return $this->runAndGet($this->query);
	}
}