<?php 

namespace JuiceConfig\Exceptions;

class JuiceConfigException extends \Exception {

	private $type;

	public function __construct($type, $msg, $code = 0, \Exception $previous = null)
	{
		$this->type = $type;
		parent::__construct($msg, $code, $previous);
	}

	public function getType()
	{
		return $this->type;
	}

	public function __toString()
	{
		return '[JuiceConfigException : ' . $this->type . '] in ' . $this->getFile() . ' on line ' . $this->getLine() . ' -> ' . $this->getMessage();
	}

}