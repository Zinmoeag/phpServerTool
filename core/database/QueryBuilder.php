
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

	private function run($query,$executeVal = null){
		$query->execute($executeVal);
	}

	public function all(){
		$query = $this->connection->prepare("select * from $this->table;");
		$this->run($query);
		return $query->fetchAll(PDO::FETCH_ASSOC);
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

	public function insert($dataArr){
		$dataKeyArr = array_keys($dataArr);
		$tableCol = implode(",",$dataKeyArr);
		$questionMarks ="";

		foreach ($dataArr as $item) {
			$questionMarks .= "?,";
		}

		$questionMarks = rtrim($questionMarks , ",");

		$sql = "insert into $this->table ($tableCol) values ($questionMarks)";
		$query = $this->connection->prepare($sql);

		//insert value
		$dataValueArr = array_values($dataArr);
		$this->run($query,$dataValueArr);
	}

	public function get(){
		$this->run($this->query);
		return $this->query->fetchAll(PDO::FETCH_ASSOC);
	}
}