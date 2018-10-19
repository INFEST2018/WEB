<?php
  // Custom automated twibbon generator codename Shania
  // Copyright (C) Thiekus 2018

  // Menadapatkan size gambar berdasarkan nilai maksimum
  /*function getAspectRatioMaxSize($maxsize, $srcw, $srch, &$dstw, &$dsth){
    if ($srcw > $srch){
      $ratio = $maxsize / $srcw;
      $dstw = $maxsize;
      $dsth = (int) ceil($srch * $ratio);
    } else {
      $ratio = $maxsize / $srch;
      $dsth = $maxsize;
      $dstw = (int) ceil($srcw * $ratio);
    }
    //echo "$dstw $dsth";
  }*/

  // Dapatkan nilai terkecil sebagai minimum
  function getAspectRatioMinSize($minsize, $srcw, $srch, &$dstw, &$dsth){
    if ($srcw < $srch){
      $ratio = $minsize / $srcw;
      $dstw = $minsize;
      $dsth = (int) ceil($srch * $ratio);
    } else {
      $ratio = $minsize / $srch;
      $dsth = $minsize;
      $dstw = (int) ceil($srcw * $ratio);
    }
    //echo "$dstw $dsth";
  }

  // Based from https://stackoverflow.com/questions/6891352/crop-image-from-center-php
  function cropAlign($image, $cropWidth, $cropHeight, $horizontalAlign = 'center', $verticalAlign = 'middle') {
    $width = imagesx($image);
    $height = imagesy($image);
    $horizontalAlignPixels = calculatePixelsForAlign($width, $cropWidth, $horizontalAlign);
    $verticalAlignPixels = calculatePixelsForAlign($height, $cropHeight, $verticalAlign);
    return imageCrop($image, [
      'x' => $horizontalAlignPixels[0],
      'y' => $verticalAlignPixels[0],
      'width' => $horizontalAlignPixels[1],
      'height' => $verticalAlignPixels[1]
    ]);
  }

  function calculatePixelsForAlign($imageSize, $cropSize, $align) {
    switch ($align) {
      case 'left':
      case 'top':
        return [0, min($cropSize, $imageSize)];
      case 'right':
      case 'bottom':
        return [max(0, $imageSize - $cropSize), min($cropSize, $imageSize)];
      case 'center':
      case 'middle':
        return [
          max(0, floor(($imageSize / 2) - ($cropSize / 2))),
          min($cropSize, $imageSize),
        ];
      default: return [0, $imageSize];
    }
  }

  // Laksanakan :)
  function generateTwibbon($templatesrc,$usersrc){
    $img_template = imagecreatefrompng($templatesrc);
    // Hitung nilai maksimum dari template
    $org_template_w = imagesx($img_template);
    $org_template_h = imagesy($img_template);
    if ($org_template_w > $org_template_h){
      $template_size = $org_template_w;
    } else {
      $template_size = $org_template_h;
    }
    // Load image yg akan digunakan
    $img_user = imagecreatefromjpeg($usersrc);
    // Hitung nilai minimum
    $org_user_w = imagesx($img_user);
    $org_user_h = imagesy($img_user);
    getAspectRatioMinSize($template_size, $org_user_w, $org_user_h, $rsz_user_w, $rsz_user_h);
    // Buat buffer untuk image yg diresize
    $img_uresize = imagecreatetruecolor($rsz_user_w, $rsz_user_h);
    imagecopyresampled($img_uresize, $img_user,0,0,0,0, $rsz_user_w, $rsz_user_h, $org_user_w, $org_user_h);
    // freekan image asal
    imagedestroy($img_user);
    // Crop image agar sesuai dengan yg diminta template dan copy template
    $img_base = cropAlign($img_uresize, $org_template_w, $org_template_h, 'center', 'middle');
    imagecopy($img_base, $img_template, 0, 0, 0, 0, $org_template_w, $org_template_h);
    imagejpeg($img_base);
    // Destroy semua image yg telah Digunakan
    imagedestroy($img_base);
    imagedestroy($img_template);
  }
  
?>
