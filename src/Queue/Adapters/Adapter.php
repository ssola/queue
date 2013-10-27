<?php
namespace Queue\Adapters;

interface Adapter
{
	public function set();
	public function get();
	public function isAvailable();
}