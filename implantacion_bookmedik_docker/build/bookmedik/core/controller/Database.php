<?php
class Database {
	public static $db;
	public static $con;
	
	function Database(){
	}

	function connect(){
         // Database host
         $host = getenv('DB_HOST');
         // Database user name
         $user = getenv('DB_USER');
         //Database user password
         $pass = getenv('DB_PASS');
         //Database name
         $db = getenv('DB_NAME');
         // check the MySQL connection status
         $con = new mysqli($host, $user, $pass, $db);
	 $con->query("set sql_mode=''");
	 return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
