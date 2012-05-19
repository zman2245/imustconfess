<?php
namespace lib\dao;
use lib\dao\sql\MySQLConnection;

/*
 * Dao factory! Creates and caches Daos
 * 
 * @author zack
 */
class Dao
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
	public static function get($name)
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
}