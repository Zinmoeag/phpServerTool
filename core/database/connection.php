<?php

class DbConnection{
	public static function make($config){
		try{
			return new PDO(
				   "{$config['host']};
					port={$config['port']};
					dbname={$config['dbName']};
					user={$config['userName']};
					password={$config['password']}"
			);

		}catch(Exception $e){
			echo $e;
		}
	}
}