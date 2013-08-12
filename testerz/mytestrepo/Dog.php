<?php namespace testerz\mytestrepo


class Dog extends Animal{
	
	private $favoriteDogTreat;
	private $hasFleas;
	
	
	public function __construct($favTreat, $hasFleas, $eyeColor){
		parent::__construct($eyeColor);
	
		$this->favoriteDogTreat = $favTreat;
		$this->hasFleas = $hasFleas;
	}


	public function makeMyNoise(){
		echo 'ruff ruff';
	}

}