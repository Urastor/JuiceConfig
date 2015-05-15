<?php 

namespace JuiceConfig\Config;

interface Juiceable {
	public function get($key);
	public function set($key, $value);
}