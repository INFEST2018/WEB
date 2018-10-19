<?php

/**
 * This file will clean up old images
 */

include 'config.php';

$UploadDirectories = array (
	dirname(__FILE__).'/upload/files/thumb' => $config['TimeToKeepUploadedImage'],
	dirname(__FILE__).'/upload/files/large' => $config['TimeToKeepUploadedImage'],
	dirname(__FILE__).'/share/files/0' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/1' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/2' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/3' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/4' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/5' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/6' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/7' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/8' => $config['TimeToKeepSharedImage'],
	dirname(__FILE__).'/share/files/9' => $config['TimeToKeepSharedImage']
);
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && isset($_POST['magic'])) {
	foreach($UploadDirectories as $dir => $time){
		cleanup($dir, (int)$time);
	}
	echo "ho ho ho";
}else{
	header("HTTP/1.0 404 Not Found");
	exit("Sorry, this is private page");
}

function cleanup($dir, $timeToKeepFile = 3600) {
	$mydir = opendir($dir);
	while($file = readdir($mydir)) {
		$fileExt = explode(".", $file);
		$fileExt = end($fileExt);
	    if($file != "." && $file != ".." && $fileExt == "jpeg") {
	        if(is_file($dir.'/'.$file)) {
	            if(time()-filemtime($dir.'/'.$file) > $timeToKeepFile){
                	@unlink($dir.'/'.$file);
                }
	        }
	    }
	}
	closedir($mydir);
}