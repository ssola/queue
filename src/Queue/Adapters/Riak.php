<?php
namespace Queue\Adapters;

class Riak implements Adapter
{
	public function __construct($config = null)
	{
		
	}
	
	public function isAvailable()
	{
		if ( class_exists('Basho\Riak\Riak') )
		{
			return true;	
		}
		
		return false;
	}
	
	public function set()
	{
		echo "set";
	}
	
	public function get()
	{
		echo "get";
	}
}