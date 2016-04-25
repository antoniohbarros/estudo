<?php
class MallardDuck extends Duck {

	public function __constructor(){

		$quackBehavior = new Quack();

		$flyBehavior = new FlyWithWings();

		

		echo "i'm a real mallard duck!";
	}
}
