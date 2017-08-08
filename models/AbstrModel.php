<?php

require_once __DIR__ . "/DBConnect.php";


abstract class AbstrModel {

	protected static $table;
	protected $data = [];

	public function __set($key, $value) {
		$this->data[$key] = $value;
	}

	public function __get($key) {
		return $this->data[$key];
	}
	
	public static function selectAll() {
		$class = get_called_class();
		$sql = 'SELECT * FROM ' . static::$table;
		$db = new DBConnect();
		$db->setNameClass($class);
		$res = $db->query($sql);
		return $res;	
	}

	public static function selectId($id) {
		$class = get_called_class();
		$sql = 'SELECT `title`, `text` FROM ' . static::$table . ' WHERE id = :id';
		$db = new DBConnect();
		$db->setNameClass($class);
		$res = $db->query($sql, [':id' => $id])[0];
		return $res;
	}

	public function insert() {
		$keys = array_keys($this->data);
		$params = [];
		foreach ($keys as $key) {
			$params[':'.$key] = $this->data[$key];
		}
		$sql = 'INSERT INTO ' . static::$table . ' 
		(' . implode(', ', $keys) . ') 
		VALUES 
		(' . implode(', ', array_keys($params)) . ')';

		$db = new DBConnect();
		$db->execute($sql, $params);
	}
}
