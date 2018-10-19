<?php

  require "shimgfuncs.php";

  // https://api.line.me/v2/bot/message/{messageId}/content
  $auth_code = "N7E6eLzm16IX1rvVZr3L9BGnBC7kv459A3MjoeraTAC7a6kryr1v+eLU7jGt12NxsrZrohzWDS9T3rf4uJbT8+u2RxY1OQL1QZjOF/1WAjeS4TWGFjrNTIaoIW8m+drmTVST2PnPMfJ3aMDIPaFYgAdB04t89/1O/w1cDnyilFU=";

  if (!isset($_GET['imgid'])){
    die("Masukkan image id!");
  }
  $imgid = $_GET['imgid'];
  $imgurl = "https://api.line.me/v2/bot/message/".$imgid."/content";
  $imgname = hash("md5", $imgid) . ".jpg";
  $imgpath = dirname(__FILE__) . "/uploads/" . $imgname;

  $ch = curl_init();
  //curl_setopt($ch, CURLOPT_FILE, $out);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer '.$auth_code
  ));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $imgurl);
  $imgdata = curl_exec($ch);
  curl_close($ch);

  $fp = fopen($imgpath, 'w');
  fwrite($fp, $imgdata);
  fclose($fp);

  header("Content-Type: image/jpeg");
  generateTwibbon("template2.png",$imgpath);

?>
