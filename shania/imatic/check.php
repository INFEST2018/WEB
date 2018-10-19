<!DOCTYPE HTML>
<html lang="en">
<head>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title>System Check</title>


<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>

<div class="container">


<h1>System Check</h1>
<?php

echo '<div class="alert alert-info" role="alert">Your memory limit is: '.ini_get('memory_limit').', Minimum 128M is required</div>';

if (version_compare(phpversion(), '5.3.8', '<')) {
    echo'<div class="alert alert-danger" role="alert">You PHP version is too old, Please update. Installed version: '.phpversion().', Minimum required Version is 5.3</div>';
}else{
	echo '<div class="alert alert-success" role="alert">Your PHP Verision is awesome (Installed version: '.phpversion().')</div>';
}


if (extension_loaded('gd') && function_exists('gd_info')) {
    echo '<div class="alert alert-success" role="alert">GD Library is installed.</div>';
}else{
	echo'<div class="alert alert-danger" role="alert">Ooops, GD Library is missing, Please Install it or contact your hosting provider. (<a href="http://php.net/manual/en/book.image.php">More</a> about GD Library)</div>';
}

/*
if (!extension_loaded('imagick')){
    echo'<div class="alert alert-warning" role="alert">ImageMagick Library is missing, Application should fail back to GD libraries if installed, but it is recommended to install ImageMagick. (<a href="http://php.net/manual/en/book.imagick.php">More</a> about ImageMagick Library)</div>';
}else{
	echo '<div class="alert alert-success" role="alert">ImageMagick Library is installed.</div>';
}
*/


if(is_writable(dirname(__FILE__) ."/upload/files/large")){
	echo '<div class="alert alert-success" role="alert"><b>/upload/files/large</b> is writable</div>';
}else{
	echo'<div class="alert alert-danger" role="alert"><b>/upload/files/large</b> is not writable, please make sure application has permission to write into this directory</div>';
}

if(is_writable(dirname(__FILE__) ."/upload/files/thumb")){
	echo '<div class="alert alert-success" role="alert"><b>/upload/files/thumb</b> is writable</div>';
}else{
	echo'<div class="alert alert-danger" role="alert"><b>/upload/files/thumb</b> is not writable, please make sure application has permission to write into this directory</div>';
}

if(is_writable(dirname(__FILE__) ."/share/files")){
	echo '<div class="alert alert-success" role="alert"><b>/share/files</b> is writable</div>';
}else{
	echo'<div class="alert alert-danger" role="alert"><b>/share/files</b> is not writable, please make sure application has permission to write into this directory</div>';
}
?>

If you do not see RED alerts above you are good to continue using the application. <Br /><Br />
<strong><i>  Please do not forget to remove this file. </i></strong>
</div>
</body> 
</html>