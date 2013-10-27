<?php
namespace Queue;

class Queue 
{
	private static $adapter = null;
	private static $isAvailable = false; 

	var $validAdapters = array(
		"riak",
		"rabbit"
	);

	private function __construct() {}
	private function __clone() {}

	public static function setAdapter(Adapters\Adapter $adapter)
	{
		self::$adapter = $adapter;
		if ( self::$adapter->isAvailable() )
		{
			self::$isAvailable = true;
		}
	}
	
	public static function isAvailable()
	{
		return self::$isAvailable;
	}
}