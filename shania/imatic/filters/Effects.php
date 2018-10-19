<?php


class Effects{

	private $image;

	const COLORISE 	= "COLORISE";
	const BUBBLES 	= "BUBBLES";
	const CANVAS	= "CANVAS"; 
	const STREET	= "STREET"; 
	const POPART	= "POPART"; 
	const GRID		= "GRID"; 
	const GRAYGRID	= "GRAYGRID"; 
	const BOCEA		= "BOCEA"; 
	const BURN		= "BURN"; 
	const GLAZE		= "GLAZE"; 
	const STARS		= "STARS"; 
	const ABSTRACTS	= "ABSTRACTS"; 
	const METAL		= "METAL"; 
	const STRIPE	= "STRIPE"; 
	


	public function __construct( &$image, $filter = NULL){
		$this->image = $image;
		if(defined('self::'.$filter)){
			call_user_func(array($this, $filter));
		}
	}

	public function COLORISE(){
		$dest = imagecreatefromjpeg(dirname(__FILE__) . "/files/pattern5.jpg");

		$x = imagesx($this->image);
		$y = imagesy($this->image);

		$x2 = imagesx($dest);
		$y2 = imagesy($dest);

		$thumb = imagecreatetruecolor($x, $y);
		imagecopyresized($thumb, $dest, 0, 0, 0, 0, $x, $y, $x2, $y2);

		imagecopymerge($this->image, $thumb, 0, 0, 0, 0, $x, $y, 50);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -25);

	}

	public function BUBBLES(){
		$dest = imagecreatefromjpeg(dirname(__FILE__) . "/files/pattern4.jpg");
		$x = imagesx($this->image);
		$y = imagesy($this->image);
		$x2 = imagesx($dest);
		$y2 = imagesy($dest);
		$thumb = imagecreatetruecolor($x, $y);
		imagecopyresized($thumb, $dest, 0, 0, 0, 0, $x, $y, $x2, $y2);
		imagecopymerge($this->image, $thumb, 0, 0, 0, 0, $x, $y, 20);
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, 40);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -10);

	}

	

	public function CANVAS(){
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, 25);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -25);
		imagefilter($this->image, IMG_FILTER_COLORIZE, 50, 25, -35);
		$this->applyOverlay('canvas', 100);
	}

	public function STREET(){
		$dest = imagecreatefromjpeg(dirname(__FILE__) . "/files/street.jpg");
		$x = imagesx($this->image);
		$y = imagesy($this->image);
		$x2 = imagesx($dest);
		$y2 = imagesy($dest);
		$thumb = imagecreatetruecolor($x, $y);
		imagecopyresized($thumb, $dest, 0, 0, 0, 0, $x, $y, $x2, $y2);
		imagecopymerge($this->image, $thumb, 0, 0, 0, 0, $x, $y, 30);
		imagefilter($this->image, IMG_FILTER_BRIGHTNESS, 20);
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
	}

	public function POPART(){
		$width = imagesx($this->image);
		$height = imagesy($this->image);
		$filter = imagecreatetruecolor($width, $height);

		imagealphablending($filter, false);
		imagesavealpha($filter, true);

		$transparent = imagecolorallocatealpha($filter, 255, 255, 255, 0);
		imagefilledrectangle($filter, 0, 0, $width, $height, $transparent);
		$comp = imagecreatetruecolor($width, $height);
		$img1 = imagecreatetruecolor($width, $height);
		$img2 = imagecreatetruecolor($width, $height);
		$img3 = imagecreatetruecolor($width, $height);
		$img4 = imagecreatetruecolor($width, $height);

		imagefilter($this->image, IMG_FILTER_GRAYSCALE);

		imagecopyresized($img1, $this->image, 0, 0, 0, 0, ($width/2)-4, ($height/2)-4, $width, $height );
		imagefilter($img1, IMG_FILTER_COLORIZE, 0, 77, 255, 70);

		imagecopyresized($img2, $this->image, 0, 0, 0, 0, ($width/2)-4, ($height/2)-4, $width, $height);
		imagefilter($img2, IMG_FILTER_COLORIZE, 255, 0, 10, 70);

		imagecopyresized($img3, $this->image, 0, 0, 0, 0, ($width/2)-4, ($height/2)-4, $width, $height);
		imagefilter($img3, IMG_FILTER_COLORIZE, 0, 143, 23, 70);

		imagecopyresized($img4, $this->image, 0, 0, 0, 0, ($width/2)-4, ($height/2)-4, $width, $height);
		imagefilter($img4, IMG_FILTER_COLORIZE, 255, 239, 0, 70);

		imagecopy($comp, $img1, 2, 2, 0, 0, $width, $height);
		imagecopy($comp, $img2, ($width-($width/2))+2, 2, 0, 0, $width, $height);
		imagecopy($comp, $img3, 2, ($height/2)+2, 0, 0, $width, $height);
		imagecopy($comp, $img4, ($width-($width/2))+2, ($height/2)+2, 0, 0, $width, $height);
		imagecopymerge($this->image, $comp, 0, 0, 0, 0, $width, $height, 100);
		
	}

	public function GRID(){
		$width = imagesx($this->image);
		$height = imagesy($this->image);
		$filter = imagecreatetruecolor($width, $height);

		imagealphablending($filter, false);
		imagesavealpha($filter, true);

		$transparent = imagecolorallocatealpha($filter, 0, 0, 0, 100);
		imagefilledrectangle($filter, 0, 0, $width, $height, $transparent);
		$comp = imagecreatetruecolor($width, $height);
		$percent = 1;
		$borderLeftRight = ($percent / 100) * $width;
		$borderTopBottom = ($percent / 100) * $height;

		imagecopyresized($comp, $this->image, $borderLeftRight, $borderTopBottom, 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopyresized($comp, $this->image, ($width-($width/2)+$borderLeftRight/2), $borderTopBottom, 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopyresized($comp, $this->image, $borderLeftRight, ($height/2)+($borderTopBottom), 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopyresized($comp, $this->image, ($width-($width/2)+$borderTopBottom), ($height/2)+($borderTopBottom), 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopymerge($this->image, $comp, 0, 0, 0, 0, $width, $height, 100);
		
	}

	public function GRAYGRID(){
		$width = imagesx($this->image);
		$height = imagesy($this->image);
		$filter = imagecreatetruecolor($width, $height);

		imagealphablending($filter, false);
		imagesavealpha($filter, true);

		$transparent = imagecolorallocatealpha($filter, 0, 0, 0, 100);
		imagefilledrectangle($filter, 0, 0, $width, $height, $transparent);
		$comp = imagecreatetruecolor($width, $height);
		imagefilter($this->image, IMG_FILTER_GRAYSCALE);
		$percent = 1;
		$borderLeftRight = ($percent / 100) * $width;
		$borderTopBottom = ($percent / 100) * $height;

		imagecopyresized($comp, $this->image, $borderLeftRight, $borderTopBottom, 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopyresized($comp, $this->image, ($width-($width/2)+$borderLeftRight/2), $borderTopBottom, 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopyresized($comp, $this->image, $borderLeftRight, ($height/2)+($borderTopBottom), 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopyresized($comp, $this->image, ($width-($width/2)+$borderTopBottom), ($height/2)+($borderTopBottom), 0, 0, ($width/2)-($borderLeftRight*2), ($height/2)-($borderTopBottom*2), $width, $height);
		imagecopymerge($this->image, $comp, 0, 0, 0, 0, $width, $height, 100);
		
	}
	
	public function BOCEA(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		$this->applyOverlay('bocea', 100);
	}

	public function BURN(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		$this->applyOverlay('burn', 40);
	}

	public function GLAZE(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		$this->applyOverlay('glaze', 100);
	}

	public function STARS(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		$this->applyOverlay('stars', 100);
	}

	public function ABSTRACTS(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		$this->applyOverlay('abstract', 100);
	}

	public function METAL(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		$this->applyOverlay('metal', 50);
	}


	public function STRIPE(){
		imagefilter($this->image, IMG_FILTER_CONTRAST, -20);
		$this->applyOverlay('stripe', 30);
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
