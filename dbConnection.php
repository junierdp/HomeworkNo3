<?php
	include('config.php');

	class connection{
		public $conn;
		function __construct(){
			$this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		}

		function __destruct(){
			mysqli_close($this->conn);
		}
	}

	class DB{
		public static $connection = null;

		public static function checkDBC(){
			if (self::$connection == null) {
				self::$connection = new connection();
			}
		}

		public static function insert($table, $data){
			self::checkDBC();
			$con = self::$connection->conn;

			$fields = array();
			$values = array();

			foreach ($data as $field => $value) {
				$fields[] = $field;
				$values[] = $value;
			}

			$fields = implode(',', $fields);
			$values = implode("','", $values);

			$sql = "INSERT INTO {$table} ({$fields}) values('{$values}')";

			mysqli_query($con, $sql);
		}

		public static function show($table){
			self::checkDBC();
			$con = self::$connection->conn;

			$sql = "SELECT * FROM {$table}";

			$rs = mysqli_query($con, $sql);

			$data = array();
			while ($row = mysqli_fetch_object($rs)) {
				$data[] = $row;
			}

			return $data;
		}

		public static function delete($table, $id){
			self::checkDBC();
			$con = self::$connection->conn;

			$sql = "DELETE FROM {$table} WHERE ID = {$id}";

			$rs = mysqli_query($con, $sql);
		}
	}
?>