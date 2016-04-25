<?php
class MallardDuck extends Duck {

	function __construct(){

		$this->quackBehavior = new Quack();

		$this->flyBehavior = new FlyWithWings();

	}

	public function display(){ 		

		echo "i'm a real mallard duck!\n";
	}
}
