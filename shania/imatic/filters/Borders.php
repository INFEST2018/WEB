<?php

class Borders{
	private $image;

	const BORDER1	= "BORDER1"; 
	const BORDER2	= "BORDER2"; 
	const BORDER3	= "BORDER3"; 
	const BORDER4	= "BORDER4"; 
	const BORDER5	= "BORDER5"; 
	const BORDER6	= "BORDER6"; 
	const BORDER7	= "BORDER7"; 
	const BORDER8	= "BORDER8"; 
	const BORDER9	= "BORDER9"; 
	const BORDER10	= "BORDER10"; 
	const BORDER11	= "BORDER11"; 

	public function __construct( &$image, $filter = NULL){
		$this->image = $image;
		if(defined('self::'.$filter)){
			call_user_func(array($this, $filter));
		}
	}

	private function BORDER1(){
		$this->applyOverlay('border1', 100);
	}
	private function BORDER2(){
		$this->applyOverlay('border2', 100);
	}
	private function BORDER3(){
		$this->applyOverlay('border3', 100);
	}
	private function BORDER4(){
		$this->applyOverlay('border4', 100);
	}
	private function BORDER5(){
		$this->applyOverlay('border5', 100);
	}
	private function BORDER6(){
		$this->applyOverlay('border6', 100);
	}
	private function BORDER7(){
		$this->applyOverlay('border7', 100);
	}
	private function BORDER8(){
		$this->applyOverlay('border8', 100);
	}
	private function BORDER9(){
		$this->applyOverlay('border9', 100);
	}
	private function BORDER10(){
		$this->applyOverlay('border10', 100);
	}
	private function BORDER11(){
		$this->applyOverlay('border11', 100);
	}


	private function applyOverlay($type, $amount){
		$width = imagesx($this->image);
		$height = imagesy($this->image);
		$filter = imagecreatetruecolor($width, $height);

		imagealphablending($filter, false);
		imagesavealpha($filter, true);

		$overlay = dirname(__FILE__) . "/files/" . $type . ".png";
		
		$png = imagecreatefrompng($overlay);
		$width2 = imagesx($png);
		$height2 = imagesy($png);
		imagecopyresized($filter, $png, 0, 0, 0, 0, $width, $height, $width2, $height2);

		$comp = imagecreatetruecolor($width, $height);
		imagecopy($comp, $this->image, 0, 0, 0, 0, $width, $height);
		imagecopy($comp, $filter, 0, 0, 0, 0, $width, $height);
		imagecopymerge($this->image, $comp, 0, 0, 0, 0, $width, $height, $amount);
	}
}