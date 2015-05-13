<?php 

namespace JuiceConfig\Exceptions;

class ConfigNotFoundException extends JuiceConfigException {

	public function __construct($msg)
	{
		parent::__construct(get_class(), $msg);
	}
}