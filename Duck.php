<?php

abstract class Duck {

	public $flyBehavior;

	public $quackBehavior;

	public function __constructor() {} 


	public abstract function display();

	public function PerformFly() {

		$this->flyBehavior->fly();
	}


	public function performQuack() {

		$this->quackBehavior->quack();
	}


	public function swim() {

		echo "all ducks floats, even decoys!";
	}

}

