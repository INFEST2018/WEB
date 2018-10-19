<?php
include realpath(dirname(__FILE__) . '/../').'/config.php';

function siteURL() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || 
    $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}
if(isset($_GET['i']) and !empty($_GET['i']) and is_numeric($_GET['i'])){
	$numericName = $_GET['i'];
	$dir = substr($numericName, -1);
	if(is_file(dirname(__FILE__) . "/files/" . $dir . "/" . $numericName . ".jpeg")){
		$imageURL = siteURL() ."/share/files/" . $dir . "/" . $numericName . ".jpeg";
	}else{
        header("HTTP/1.0 404 Not Found");
		$error = "Sorry, Photo not found";
	}
	

}else{
    header("HTTP/1.0 404 Not Found");
	$error = "Request unidentified";
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title><?php echo $config['Title']; ?></title>
<meta name="description" content="<?php echo $config['Meta-Description']; ?>">
<meta name="keywords" content="<?php echo $config['Meta-Keywords']; ?>">
<meta property="og:title" content="<?php echo $config['Title']; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo siteURL() . "/share/?i=".$_GET['i']; ?>" />
<?php 
    if(isset($imageURL) and !empty($imageURL)){
        echo '<meta property="og:image" content="'.$imageURL.'" />';
    }
?>
<meta property="og:description" content="<?php echo $config['Meta-Description']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../Assets/css/style.css">
</head>
<body>
<progress value="" max="100" id="progress"></progress>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo $config['Title']; ?></a>
        </div>
        <div class="navbar-collapse collapse">
            
        </div>
    </div>
</div>
<div class="container">
    
    <div class="col-md-12 text-center">
        <a href="/" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add effect to your own photo!</a>
    </div>
    
    <div class="clearfix"></div>
    <hr />   

    
    <div id="files" class="files col-md-12 thumbnail text-center">
    		<?php 
    		if(isset($error) and !empty($error)){
    			echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
    		}elseif(isset($imageURL) and !empty($imageURL)){
    			echo "<img src='".$imageURL."' />";
    		}else{
    			echo '<div class="alert alert-warning" role="alert">Something went wrong, we are sorry.';
    		}
    		?>
    </div>
</div>
<footer class="footer">
    &copy; <?php echo date("Y");?> |
    <a href="/termsofuse.php">Terms Of Use</a> | 
    <a href="/privacypolicy.php">Privacy Policy</a> 
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>

jQuery.fn.bottomCenter = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight() -20 ))));
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
}
$(function(){
    $(".footer").bottomCenter();
})
</script>
</body> 
</html>
