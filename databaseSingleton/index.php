<?php
class MyConnect {
	private $db_name;
	private $username;
	private $password;
	private $host;
	
	// Keeper of keys of singleton
	private static $connection;

	function __construct($name, $username, $password) {
		$this->db_name = $name;
		$this->username = $username;
		$this->password = $password;
		$this->host = 'localhost';	
	}
	
	public static function open_connection($name, $username, $password) {
		if ( !isset(self::$connection)) {
			self::$connection = new MyConnect($name, $username, $password);
		}

		return self::$connection;
	}

	public function get_info( $query ) {
		//STUB
	}
	
	public function set_info( $query ) {
		//STUB
	}

	public function get_db_name() {
		return $this->db_name;
	}
}

$db = MyConnect::open_connection( 'people', 'joe', 'hello_there' );
echo $db->get_db_name() . '<br/>';

$db2 = MyConnect::open_connection('people', 'joe', 'hello_there');
echo $db->get_db_name();
