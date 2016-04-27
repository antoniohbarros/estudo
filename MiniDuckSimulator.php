<?php
 function __autoload($class_name) {
      require_once $class_name . '.php';
  }

class MiniDuckSimulator {

	public function run() {
		$mallard = new MallardDuck();

		$mallard->performQuack();
		$mallard->performFly();

		$model = new ModelDuck();

		$model->performFly();
		$model->setFlyBehavior(new FlyRocketPowered());
		$model->performFly();	

	}

}


$simulator = new MiniDuckSimulator();

$simulator->run();