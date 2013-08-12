<?php namespace testerz\\mytestrepo

class Cat extends Animal{

	private $likesPeople;
	private $favoriteCatFood;

	public function __construct($favTreat, $hasFleas, $eyeColor){
		parent::__construct($eyeColor);
	
		$this->favoriteDogTreat = $favTreat;
		$this->hasFleas = $hasFleas;
	}

	public function makeMyNoise(){
		echo 'meow meow';
	}
}
?>