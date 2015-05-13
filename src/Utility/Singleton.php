<?php 

namespace JuiceConfig\Utility;

trait Singleton {
	private static $instance;

	private function __clone() {}
	private function __wakeup() {}

	final private function __construct($args)
	{
		$this->init($args);
	}

	final public static function instance($args = null)
	{
		$cls = get_class();
		return (static::$instance instanceof $cls) ? 
				static::$instance : 
				self::$instance = new static($args);
	}

	protected function init($args) {}
}