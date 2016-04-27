<?php
class ModelDuck extends Duck {

	function __construct() {

		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Quack();
	}

	public function display() {

		echo "i'm a model duck!";
	}
}