<?php
// Database host
$host = getenv('DB_HOST');
// Database user name
$user = getenv('DB_USER');
// Database user password
$pass = getenv('DB_PASS');
// Database name
$mariadb = getenv('DB_NAME');
class Database {
	public static $mariadb;
	public static $con;
	
	function Database(){
	}

	function connect(){
		$con = new mysqli("localhost", "user", "pass", "mariadb");
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$mariadb==null){
			self::$mariadb = new Database();
			self::$con = self::$mariadb->connect();
		}
		return self::$con;
	}
	
}
?>
