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

		$this->quackBehavior->quacks();
	}


	public function swim() {

		echo "all ducks floats, even decoys!";
	}

	public function setFlyBehavior ($fb) {

		$this->flyBehavior = $fb;
	}

	public function setQuackBehavior ($qb) {

		$this->quackBehavior = $qb;
	}

}

