<?php

 class Active{

	public function genFields(){
		$error = array();
		$fields = '';
		$staticKey = static::$key;
		foreach ($this as $key=>$value) {
			//$this->key = $this->checkString($value) != false ? $value : array_push($error, $key);
			if ($key == $staticKey) continue;
			$fields .= $key."='".$value."',";
		}
		$fields = rtrim($fields,',');
		return $fields;
	}
	public function update(){
		$db = Db::getConnection();
		$tabela = static::$table;
		$key = static::$key;
		$upit = 'update '.$tabela.' set ';
		$upit .= $this->genFields();
		$upit .= ' where '.$key.' = '.$this->id;
		$db->exec($upit);
	}
	public static function delete($id=null){
		$db = Db::getConnection();
		$table = static::$table;
		$key = static::$key;
		$db->exec("delete from {$table} where {$key} = {$id}");
	}
	public function insert(){
		$db = Db::getConnection();
		$table = static::$table;
		$query = "insert into ".$table." set ";
		$query .= $this->genFields();
		// var_dump($query); die;
		$db->exec($query);
		$staticKey = static::$key;
		$this->$staticKey = $db->lastInsertId();
		return $this->$staticKey;
	}
	public static function get($filter){
		$db = Db::getConnection();
		$table = static::$table;
		$key = static::$key;
		$res = $db->query("select * from {$table} where {$filter}");
		$res->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		return $res->fetch();
	}
	public static function getAll($filter = ""){
		$db = Db::getConnection();
		$table = static::$table;
		$key = static::$key;
		$res = $db->query("select * from {$table} {$filter}");
		$res->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		$output = [];
		while ($rw=$res->fetch()) {
			$output[] = $rw;
		}
		return $output;
	}
	public function checkEmail($email){
		$illegal_characters = array("'", "\"", ";", "$", "*", "/", "\\", "!", "#", "%", "^", "&", "(", ")", "-", "_", "+", "=", "?", "<", ">", ",", "`", "~", " ", ":", "{", "}", "|", "[", "]", );
		$illegal_character=implode(",",$illegal_characters);
		if (empty($email)) {
			return false;
		}
		if(strpbrk($email, $illegal_character)){
			return false;
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return false;
		}
		return true;
	}
	public function checkString($pass){
		$illegal_characters = array("'", "\"", "`", "\\", ";", " ", "~", "{", "}", "*", "$", "/", "%", "^", "?", "=", "_", "(", ")", "[", "]", "|");
		$illegal_character=implode(",",$illegal_characters);
		if (empty($pass)) {
			return false;
		}
		if (strpbrk($pass, $illegal_character)){
			return false;
		}
		return true;
	}

}