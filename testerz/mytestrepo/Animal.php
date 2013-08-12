<?php namespace testerz\\mytestrepo
class Animal{

	private $name;
	private $ownerName;
	private $address;
	private $eyes;
	
	public function __construct($eyeColor){
		$this->eyes = new Eyes($eyeColor);
	
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function makeNoise(){
		$this->makeMyNoise();
	}

	
	public function getEyeColor(){
	
		return $this->eyes->getColor();
	}
}
?>