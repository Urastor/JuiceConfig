<?php 

namespace JuiceConfig;

use JuiceConfig\Config\Juiceable;
use JuiceConfig\Exceptions\ConfigNotFoundException;

class JuiceContainer {
	use \JuiceConfig\Utility\Singleton;

	private $storage = [];

	public function add($key, Juiceable $cfg)
	{
		$this->storage[$key] = $cfg;
	}

	public function remove($key)
	{
		if(!$this->exists($key))
			throw new ConfigNotFoundException($key . ' is not in the storage!');

		unset($this->storage[$key]);
		return !$this->exists($key);
	}

	public function get($key)
	{
		if(!$this->exists($key))
			throw new ConfigNotFoundException($key . ' is not in the storage!');

		return $this->storage[$key];
	}

	public function exists($key)
	{
		return isset($this->storage[$key]);
	}
}