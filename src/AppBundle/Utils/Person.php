<?php

namespace AppBundle\Utils;

use AppBundle\Utils\MagicGetterSetter;

class Person {

	use MagicGetterSetter;

	public function __construct($first, $last, $age) {
		$this->properties['firstname'] = $first;
		$this->properties['lastname'] = $last;
		$this->properties['age'] = $age;
	}

	public function get_Description() {
		return $this->firstname.' '.$this->lastname.' '.$this->age;
	}
	public function get_firstname() {
		return $this->properties['firstname'];
	}
	public function set_firstname($value) {

		$this->properties['firstname'] = $value;
	}
	public function get_lastname() {

		return $this->properties['lastname'];
	}
	public function set_lastname($value) {

		$this->properties['lastname'] = $value;
	}
	public function get_age() {

		return $this->properties['age'];
	}
	public function set_age($value) {
		$this->properties['age'] = $value;
	}
}
