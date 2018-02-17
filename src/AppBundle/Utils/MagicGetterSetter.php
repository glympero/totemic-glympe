<?php

namespace AppBundle\Utils;

trait MagicGetterSetter
{
	protected $properties;

	public function __get($property)
	{
		if (method_exists($this, ($method = 'get_'.$property)))
		{
			return $this->$method();
		}
		$this->throwException($property);

	}

	public function __set($property, $value)
	{
		if (method_exists($this, ($method = 'set_'.$property)))
		{
			return $this->$method($value);
		}
		$this->throwException($property);
	}

	private function throwException($property)
	{
		$message =  "Trying to get undefined property " . __CLASS__ . "::$" . $property . ".";
		throw new \RuntimeException($message);
	}

}
