<?php

class Filters{
	
	private $image;

	const OLD	 			= 	"OLD";
	const VINTAGE 			=  	"VINTAGE"; 
	const HARDVINTAGE 		= 	"HARDVINTAGE";
	const SEPIA 			=	"SEPIA";
	const DARKSEPIA 		= 	"DARKSEPIA";
	const GRAY 				= 	"GRAY";
	const DARKCITY 			= 	"DARKCITY";
	const SOFTCOLORS	 	= 	"SOFTCOLORS";
	const BOOST	 			= 	"BOOST";
	const SHARPEN 			= 	"SHARPEN";
	const EMBOSS 			= 	"EMBOSS";
	const COOL 				= 	"COOL";
	const CLEAN	 			= 	"CLEAN";
	const FUZZY	 			= 	"FUZZY";
	const AQUA	 			= 	"AQUA";
	const AMBER	 			= 	"AMBER";
	const GREEN	 			= 	"GREEN";
	const LIGHT	 			= 	"LIGHT";
	

	public function __construct( &$image, $filter = NULL){
		$this->image = $image;
		if(defined('self::'.$filter)){
			call_user_func(array($this, $filter));
		}
	}	

	public function OLD(){
		$dest = imagecreatefromjpeg(dirname(__FILE__) . "/files/bg1.jpg");
		$x = imagesx($this->image);
		$y = imagesy($this->image);
		$x2 = imagesx($dest);
		$y2 = imagesy($dest);
		$thumb = imagecreatetruecolor($x, $y);
		imagecopyresized($thumb, $dest, 0, 0, 0, 0, $x, $y, $x2, $y2);
		imagecopymerge($this->image, $thumb, 0, 0, 0, 0, $x, $y, 30);
		$this->applyOverlay('noise', 45);
	}

	private function VINTAGE(){
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, 15);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -25);
		imagefilter($this->image, IMG_FILTER_COLORIZE, -10, -5, -15);
		imagefilter($this->image, IMG_FILTER_SMOOTH, 7);
		$this->applyOverlay('scratch', 10);
	}

	private function HARDVINTAGE(){
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, 20);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 0, -137, -255, 90);
		imagefilter($this->image, IMG_FILTER_SMOOTH, 50);
		$this->applyOverlay('Vintage1', 80);
	}

	private function SEPIA(){
		imagefilter($this->image, IMG_FILTER_GRAYSCALE);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 100, 50, 0);
	}

	private function DARKSEPIA(){
		imagefilter($this->image, IMG_FILTER_GRAYSCALE);
		imagefilter($this->image, IMG_FILTER_CONTRAST, 255);
		imagefilter($this->image, IMG_FILTER_NEGATE);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 2, 118, 219, 50);
		imagefilter($this->image, IMG_FILTER_NEGATE);
	}

	private function GRAY(){
		imageFilter($this->image, IMG_FILTER_CONTRAST, -15);
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, -10);
		imagefilter($this->image, IMG_FILTER_SMOOTH, 10);
		imageFilter($this->image, IMG_FILTER_GRAYSCALE);
	}

	private function DARKCITY(){
		imageFilter($this->image, IMG_FILTER_GRAYSCALE);
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, -30);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 32, 32, 32, 80);

	}

	private function SOFTCOLORS(){
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, 20);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -30);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 255, 255, 255, 100);
		imagefilter($this->image, IMG_FILTER_SMOOTH, 50);
	}

	private function BOOST(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -35);
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, 10);
	}

	private function SHARPEN(){
		$gaussian = array(
				array(1.0, 1.0, 1.0),
				array(1.0, -6.0, 1.0),
				array(1.0, 1.0, 1.0)
		);
		imageconvolution($this->image, $gaussian, 1, 4);
	}

	private function EMBOSS(){
		$gaussian = array(
				array(-1.0, -1.0, 0.0),
				array(-1.0, 1.0, 1.0),
				array(0.0, 1.0, 2.0)
		);
		imageconvolution($this->image, $gaussian, 1, 3);
	}

	private function COOL(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 0, 70, 255, 50);
	}

	private function CLEAN(){
		$width = imagesx($this->image);
		$height = imagesy($this->image);
		$comp = imagecreatetruecolor($width, $height);
		imagecopy($comp, $this->image, 0, 0, 0, 0, $width, $height);

		imagefilter($comp, IMG_FILTER_GRAYSCALE);
		imagefilter($comp, IMG_FILTER_NEGATE);

		imagecopymerge($this->image, $comp, 0, 0, 0, 0, $width, $height, 20);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -10);
	}

	public function FUZZY(){
		$gaussian = array(
				array(5.0, 5.0, 5.0),
				array(5.0, 5.0, 5.0),
				array(5.0, 5.0, 5.0)
		);

		imageconvolution($this->image, $gaussian, 29, 10);
	}

	public function AQUA(){
		imagefilter($this->image, IMG_FILTER_COLORIZE, 0, 40, 40, 30);
	}

	public function AMBER(){
		imagefilter($this->image, IMG_FILTER_COLORIZE, 80, 0, 10, 30);
	}

	public function GREEN(){
		imageFilter($this->image, IMG_FILTER_BRIGHTNESS, 10);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 255, 239, 0, 70);
	}
	public function LIGHT(){
		imageFilter($this->image, IMG_FILTER_BRIGHTNESS, 10);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 100, 50, 0, 10);
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
