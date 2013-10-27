<?php
namespace Queue\Adapters;
use Queue\Adapters\Adapter as Adapter;

class Riak implements Adapter 
{
	public function __construct()
	{
		echo "Riak";
	}
	
	public function isAvailable()
	{
		return false;
	}
}