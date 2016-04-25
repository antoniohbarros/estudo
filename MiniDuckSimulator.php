<?php
 function __autoload($class_name) {
      require_once $class_name . '.php';
  }

class MiniDuckSimulator {

	public function run() {
		$mallard = new MallardDuck();

		$mallard->performQuack();
		$mallard->performFly();

	}
}


$simulator = new MiniDuckSimulator();

$simulator->run();