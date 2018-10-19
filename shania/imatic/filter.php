<?php

include 'filters/Filters.php';
include 'filters/Effects.php';
include 'filters/Borders.php';

// Define variables to avoid PHP Notice and Validate $_GET Request

$large = $thumb = $filter = $effect = $border = $filename = $download = $imageReady = $share = false;

/**
 * image Size
 * For Security Sake, lets not default to ANY size
 */
if(isset($_GET['type']) and $_GET['type'] == "thumb"){
	$thumb = true;
}elseif(isset($_GET['type']) and $_GET['type'] == "large"){
	$large = true;
}else{
	echo "Sorry, Requested Filetype is unidentified";
	exit();
}
/**
 * Requested Filter
 */
if(isset($_GET['filter']) and !empty($_GET['filter'])){
	$filter = strtoupper($_GET['filter']);
}
/**
 * Requested Effect
 */
if(isset($_GET['effect']) and !empty($_GET['effect'])){
	$effect = strtoupper($_GET['effect']);
}
/**
 * Requested Border
 */
if(isset($_GET['border']) and !empty($_GET['border'])){
	$border = strtoupper($_GET['border']);
}
/**
 * Donwload? 
 */
if(isset($_GET['download']) and $_GET['download'] == "true"){
	$download = true;
}
/**
 * Share? 
 */
if(isset($_GET['share']) and $_GET['share'] == "true"){
	$share = true;
}
/**
 * Validate $_GET File
 */
$allowedEXTs= array("png", "jpg", "jpeg", "gif");
if(isset($_GET['file']) and !empty($_GET['file'])){
	/**
	 * Check filename and Ext
	 */
	$parts = explode('.', $_GET['file']);
	$numericName = $parts[0];
	$ext = $parts[1];
	if(strlen($numericName) > 1 and is_numeric($numericName) and in_array($ext, $allowedEXTs) and is_file(dirname(__FILE__) . "/upload/files/thumb/" . $_GET['file']) 
		and is_file(dirname(__FILE__) . "/upload/files/large/" . $_GET['file'])){
		if($thumb){
			$filename = dirname(__FILE__) . "/upload/files/thumb/" . $_GET['file'];
		}
		if($large){
			$filename = dirname(__FILE__) . "/upload/files/large/" . $_GET['file'];
		}
	}elseif(strlen($numericName) == 1 and in_array($ext, $allowedEXTs) and is_file(dirname(__FILE__) . "/sample_images/files/thumb/" . $_GET['file'])
		and is_file(dirname(__FILE__) . "/sample_images/files/large/" . $_GET['file'])){
		if($thumb){
			$filename = dirname(__FILE__) . "/sample_images/files/thumb/" . $_GET['file'];
		}
		if($large){
			$filename = dirname(__FILE__) . "/sample_images/files/large/" . $_GET['file'];
		}
	}
}
if($filename){
	switch (strtolower($ext)) {
		case 'png':
			$image = imagecreatefrompng($filename);
			break;
		case 'jpg':
		case 'jpeg':
			$image = imagecreatefromjpeg($filename);
			break;
		case 'gif':
			$image = imagecreatefromgif($filename);
			break;
		default:
			echo "Sorry, there was an error processing your request.";
			exit();
			break;
	}
	
	if($filter and defined('Filters::'.$filter)){
		new Filters($image, constant("Filters::$filter"));
		$imageReady = true;
	}
	if($effect and defined('Effects::'.$effect)){
		new Effects($image, constant("Effects::$effect"));
		$imageReady = true;
	}
	if($border and defined('Borders::'.$border)){
		new Borders($image, constant("Borders::$border"));
		$imageReady = true;
	}


	if($imageReady){
		if($download){
			$newFilename = explode(".", $_GET['file']);
			$newFilename = $newFilename[0]."[".$_SERVER['SERVER_NAME']."]" ;
			header('Content-Description: File Transfer');
		    header('Content-Type: image/jpeg');
		    header("Content-disposition: attachment; filename=".$newFilename.".jpg");
		}elseif($share){
			// Share is requested, save the file and retrun response 
			// no need to modify header
		}else{
			header ('Content-Type: image/jpeg');
			
		}
	}else{
		echo "Sorry, Request is unidentified";
		exit();
	}
//if($filename)
}else{
	echo "Sorry Filename is unitinfied";
	exit();
}
if($share){
	$subdir = substr($numericName, -1);
	$destinationDir = dirname(__FILE__) . "/share/files/" . $subdir . "/";
	$destinationFile = dirname(__FILE__) . "/share/files/" . $subdir . "/" . $numericName .".". $ext ;
	$destinationWeb = "/share/files/" . $subdir . "/" . $numericName .".". $ext ;
	if (!file_exists($destinationDir)) {
    	mkdir($destinationDir, 0755, true);
	}
	Imagejpeg($image, $destinationFile, 100);
	echo "/share/?i=".$numericName;
}else{
	ImageJpeg($image);
}
imagedestroy($image);