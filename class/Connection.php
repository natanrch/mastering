<?php

require_once 'global.php';


class Connection
{
	public static function getConnection()
	{
		$conn = new PDO(DB_DRIVE . ':host='.DB_HOSTNAME.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	}

	public static function insert($table, $date, $sec)
	{
        $query = "INSERT INTO ".$table." (date, sec) VALUES ('".$date."', '".$sec."')";
        $conn = Connection::getConnection();
        $conn->exec($query);
	}
}