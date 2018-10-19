<?php
include dirname(__FILE__) . '/config.php';
include dirname(__FILE__) . '/filters/Filters.php';
include dirname(__FILE__) . '/filters/Effects.php';
include dirname(__FILE__) . '/filters/Borders.php';
function siteURL() {
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
		$_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$domainName = $_SERVER['HTTP_HOST'];
	return $protocol . $domainName;
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title><?php echo $config['Title'];?></title>
<meta name="description" content="<?php echo $config['Meta-Description'];?>">
<meta name="keywords" content="<?php echo $config['Meta-Keywords'];?>">
<meta property="og:title" content="<?php echo $config['Title'];?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo siteURL();?>" />
<meta property="og:description" content="<?php echo $config['Meta-Description'];?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="Assets/css/style.css">
<link rel="stylesheet" href="Assets/css/jquery.fileupload.css">
</head>
<body>
<progress value="0" max="100" id="progress"></progress>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="/"><?php echo $config['Title'];?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right colorMenu">
                <li><a href="javascript:void(0);">Background Color:</a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#000000"><span class="glyphicon glyphicon-stop colorSelector" style="color:#000000;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#282828"><span class="glyphicon glyphicon-stop colorSelector" style="color:#282828;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#404040"><span class="glyphicon glyphicon-stop colorSelector" style="color:#404040;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#606060"><span class="glyphicon glyphicon-stop colorSelector" style="color:#606060;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#808080"><span class="glyphicon glyphicon-stop colorSelector" style="color:#808080;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#989898"><span class="glyphicon glyphicon-stop colorSelector" style="color:#989898;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#B8B8B8"><span class="glyphicon glyphicon-stop colorSelector" style="color:#B8B8B8;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#D0D0D0"><span class="glyphicon glyphicon-stop colorSelector" style="color:#D0D0D0;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#F0F0F0"><span class="glyphicon glyphicon-stop colorSelector" style="color:#F0F0F0;"></span></a></li>
                <li><a href="javascript:void(0);" class="colorWrapper" data-color="#FFFFFF"><span class="glyphicon glyphicon-stop colorSelector" style="color:#FFFFFF;"></span></a></li>

            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="pull-left">
        <span class="btn btn-primary pull-left fileinput-button ">
            <i class="fa fa-cloud-upload"></i>
            <span> Upload a Photo</span>
            <input id="fileupload" type="file" name="files" accept="image/*" />
        </span>
    </div>
    <div class="download pull-right text-center ">
        &nbsp; <a href="#" class="downloadlink btn btn-primary " target="_blank" disabled="disabled"><i class="fa fa-download"></i> <span class="hidden-xs">Download</span></a>
    </div>
     <div class="share pull-right text-center ">
        <a href="javascript:void(0)" class="sharelink btn btn-primary " target="_blank" disabled="disabled"><i class="fa fa-share-alt"></i> <span class="hidden-xs">Share</span></a>
    </div>
    <div class="clearfix"></div>
    <div class="welcome">
    <Br />
        <div class="col-sm-6 col-md-offset-1 col-md-5 text-left">
            <i class="fa fa-share fa-rotate-negative-100 fixarrow"></i> <div class="Gloria helperLeft text-center">Select an image <br /> to begin </div>
        </div>
        <div class="col-sm-6 col-md-5 text-right">
            <div class="Gloria helperRight">Afterwards you will be able <br /> to download or share </div> <i class="fa fa-reply fa-rotate-95 fixarrow"></i>
        </div>
        <div class="clearfix"></div>
    </div>

    <hr class="hidden-xs" />



    <div class="stack text-center">
        <h2 class="Gloria bigtext">Try with one of ours</h2>
        <div class="col-md-4">
            <div id="imgstack">
              <a href="1.jpeg" class="sample"><img src="sample_images/files/thumb/1.jpeg" alt="" /></a>
              <a href="2.jpeg" class="sample"><img src="sample_images/files/thumb/2.jpeg" alt="" /></a>
              <a href="3.jpeg" class="sample"><img src="sample_images/files/thumb/3.jpeg" alt="" /></a>
            </div>
        </div>
        <div class="col-md-4">
            <div id="imgstack">
              <a href="4.jpeg" class="sample"><img src="sample_images/files/thumb/4.jpeg" alt="" /></a>
              <a href="5.jpeg" class="sample"><img src="sample_images/files/thumb/5.jpeg" alt="" /></a>
              <a href="6.jpeg" class="sample"><img src="sample_images/files/thumb/6.jpeg" alt="" /></a>
            </div>
        </div>
        <div class="col-md-4">
            <div id="imgstack">
              <a href="7.jpeg" class="sample"><img src="sample_images/files/thumb/7.jpeg" alt="" /></a>
              <a href="8.jpeg" class="sample"><img src="sample_images/files/thumb/8.jpeg" alt="" /></a>
              <a href="9.jpeg" class="sample"><img src="sample_images/files/thumb/9.jpeg" alt="" /></a>
            </div>
        </div>
    </div>

    <div id="files" class="files col-md-12 thumbnail text-center hide"></div>



</div>
<footer class="footer">
    &copy;
<?php echo date("Y");
?>|
    <a href="termsofuse.php">Terms Of Use</a> |
    <a href="privacypolicy.php">Privacy Policy</a>
</footer>
<div id="filterWrapper">
<ul class="tabs">
    <li><a href="#" title="filters"><i class="fa fa-camera-retro"></i> Filters</a></li>
    <li><a href="#" title="effects"><i class="fa fa-star-half-o"></i> Effects</a></li>
    <li><a href="#" title="borders"><i class="fa fa-picture-o"></i> Borders</a></li>
</ul>
 <div id="filterContainer">
        <ul id="filters">
          <li><a id="normal" href="javascript:void(0)" class="removeFilter" data-id="" data-mode="filter"><span class="normal" class="text-center"></span><br /> normal</a> </li>
<?php
$ReflectionFiltes = new ReflectionClass('Filters');
$filterConstants  = $ReflectionFiltes->getConstants();
foreach ($filterConstants as $filter):
	echo '<li><a class="effect" data-id="' . $filter . '" data-mode="filter" href="#' . $filter . '" ><span id="' . $filter . 'Preview" class="text-center"></span><br /> ' . $filter . '</a> </li>';
endforeach;
?>
</ul>

        <ul id="effects">
          <li><a id="normal" href="javascript:void(0)" class="removeEffect" data-id="" data-mode="effect"><span class="normal" class="text-center"></span><br /> normal</a> </li>
<?php
$ReflectionEffects = new ReflectionClass('Effects');
$effectsConstants  = $ReflectionEffects->getConstants();
foreach ($effectsConstants as $effects):
	echo '<li><a class="effect" data-id="' . $effects . '" data-mode="effect" href="#' . $effects . '" ><span id="' . $effects . 'Preview" class="text-center"></span><br /> ' . $effects . '</a> </li>';
endforeach;
?>
</ul>
        <ul id="borders">
            <li><a id="normal" href="javascript:void(0)" class="removeBorder" data-id="" data-mode="border"><span class="normal" class="text-center"></span><br /> normal</a> </li>
<?php
$ReflectionBorders = new ReflectionClass('Borders');
$bordersConstants  = $ReflectionBorders->getConstants();
foreach ($bordersConstants as $borders):
	echo '<li><a class="effect" data-id="' . $borders . '" data-mode="border" href="#' . $borders . '" ><span id="' . $borders . 'Preview" class="text-center"></span><br /> ' . $borders . '</a> </li>';
endforeach;
?>

        </ul>
</div>
</div>
<div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="Share" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Share</h4>
      </div>
      <div class="modal-body sharebody ">
            <div class="text-center shareLoader">
                <img src="Assets/img/loader.gif" />
            </div>
            <div class="shareContent hide">
                <div class="form-group">
                    <label for="shareURL" class="col-sm-3 control-label">Image URL:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="shareURL" value="<?php echo siteURL();?>">
                    </div>
                </div>
                <br />
            </div>
            <Br />
            <div class="socialButtons text-center hide">
                <a href="#" class="gplusShare"><span class="fa fa-google-plus"></span> +1</a>
                <a href="#" class="popout-menu-item twitterShare"> <span class="fa fa-twitter"></span> Tweet</a>
                <a href="#" class="popout-menu-item facebookShare"> <span class="fa fa-facebook"></span> Share</a>
            </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="Share" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Oops..</h4>
      </div>
      <div class="modal-body text-center">
            We are sorry file size is too big or the format is not supported.
            <br /><br />
            Please try again with different image.
      </div>
    </div>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="Assets/js/vendor/jquery.ui.widget.js"></script>
<script src="Assets/js/jquery.iframe-transport.js"></script>
<script src="Assets/js/jquery.fileupload.js"></script>
<script src="Assets/js/jquery.color.plus-names-2.1.2.min.js"></script>
<script src="Assets/js/jquery.cookie.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="Assets/js/script.js?v2"></script>
<script>

$(function () {
    'use strict';

    $('#fileupload').fileupload({
        url: window.url,
        dataType: 'json',
        done: function (e, data) {
            if(typeof data.result.files[0] == "undefined"){
                $('#error').modal('show');
            }else{
                var file = data.result.files[0];
                window.file = file.name;
                window.directory = "upload";
                loadImage();
            }
        },
        fail: function(){
             $('#error').modal('show');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('progress').val(progress).show();
            if(progress == 100){
                $('progress').hide();
            }
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

    $(".sample").on("click", function(){
        window.file = $(this).attr("href");
        window.directory = "sample_images";
        loadImage();
        return false;
    });

    function loadImage(sample){
        $(".welcome").remove();
        $(".stack").remove();
        $(".footer").remove();
        $('#files').html("").removeClass("hide");
        $('progress').val("0");

        var bheight = $(window).height();
        var percent = 0.5;
        var hpercent = bheight * percent;

        $('<img />').attr("src", "/"+window.directory+"/files/large/"+window.file).appendTo('#files').css({"height" : hpercent});
        $('.normal').html("");
        $('<img />').attr("src", "/"+window.directory+"/files/thumb/"+window.file).appendTo('.normal');
        $("#filterWrapper").show();

<?php
foreach ($filterConstants as $filter):
	echo '$("#' . $filter . 'Preview").html("");
	                    $("<img />").attr("src", "filter.php?type=thumb&filter=' . $filter . '&file="+window.file).appendTo("#' . $filter . 'Preview");
	';
endforeach;
foreach ($effectsConstants as $effect):
	echo '$("#' . $effect . 'Preview").html("");
	                    $("<img />").attr("src", "filter.php?type=thumb&effect=' . $effect . '&file="+window.file).appendTo("#' . $effect . 'Preview");
	';
endforeach;
foreach ($bordersConstants as $borders):
	echo '$("#' . $borders . 'Preview").html("");
	                    $("<img />").attr("src", "filter.php?type=thumb&border=' . $borders . '&file="+window.file).appendTo("#' . $borders . 'Preview");
	';
endforeach;
?>
}

});
</script>
</body>
</html>
