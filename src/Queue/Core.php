<?php
namespace Queue;

class Core
{
	private static $adapter = null;
	private static $availableAdapters = array (
		'Queue\Adapters\Riak'
	);
	
	private function __construct() {}
	private function __clone() {}
	
	public static function setAdapter ( $adapter )
	{
		if ( $adapter )
		{
			$className = get_class ( $adapter );
			if ( in_array ( $className, self::$availableAdapters ) )
			{
				self::$adapter = $adapter;
				if ( !self::$adapter->isAvailable() )
				{
					throw new Exception\AdapterNotAvailable('Adapter called not available');
				}
			}
			else 
			{
				throw new Exception\AdapterNotFound('Adapter has not found');
			}
		}
		
		return null;
	}
	
	public static function __callStatic($call, $arguments)
	{
		if ( self::$adapter )
		{
			self::$adapter->{$call}($arguments);
		}
	}
}