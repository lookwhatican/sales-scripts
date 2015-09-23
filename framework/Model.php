<?php

abstract class Model
{
	public static function find($param)
	{
		$db = new DataBase;
		$class = get_called_class();
		$db->setClassName($class);

		if(is_string($param)) {
			$query = 'SELECT * FROM ' . static::$table;
			return $db->query($query);
		}

		$query = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
		return $db->query($query, [':id' => $param]);
	}
}