<?php
namespace lib;
use lib\dao\sql\MySQLConnection;

/*
 * Factory! Creates and caches Daos, provides structs
*
* @author zack
*/
class Factory
{
	/*
	 * An array cache of daos
	* @var array
	*/
	private static $daos;

	/*
	 * A connection to an sql database
	* @var lib\dao\MySQLConnection
	*/
	private static $connection;

	/*
	 * Return the appropriate sql dao; if a new one is needed, cache it.
	*
	* @param string $name
	* @return mixed
	*/
	public static function dao($name)
	{
		$name = "lib\\dao\\sql\\$name";

		if (!empty($daos[$name]))
		return $daos[$name];

		if (empty(static::$connection))
		static::$connection = new MySQLConnection("localhost", "zack", "zacksql2245", "imustconfess");

		$dao = new $name(static::$connection);
		static::$daos[$name] = $dao;

		return $dao;
	}
	
	/*
	* Returns an instance of the appropriate struct if one exists
	*
	* @param string $name
	* @return mixed
	*/
	public static function struct($name)
	{
		$name = "lib\\datamodel\\sql\\$name";
		
		return new $name;
	}
}