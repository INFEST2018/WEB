<?php

// configuration file

$config = array(

	// Page Title, Also Used in header
	'Title' => "Shania Image-Matic",

	// Default Meta Keywords and Description
	"Meta-Description" => "Make Your Photos Look Awesome",
	"Meta-Keywords" => "Photo Editing, Photo filters, Photo Effects, Awesome Photos",

	// System configuration
	
	// Time to Keep uploaded image on the server
	// Time is given in seconds (60 sec * 60 min = 1 hour) 
	'TimeToKeepUploadedImage' => 60*30,

	// Time to keey shared image
	// Time is given in seconds (60 sec * 60 min * 24 hour * 30 = 30 Day) 
	'TimeToKeepSharedImage' => 60*60*24*30,

);
