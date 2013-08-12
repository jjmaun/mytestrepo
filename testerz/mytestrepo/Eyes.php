<?php
class Eyes{

	private $color;

	public function __construct($eyecolor){
		$this->color = $eyecolor;
	}
	
	
	public function setColor($color){
		$this->color = $color;	
	}

	public function getColor(){
		return $this->color;
	}



}
?>