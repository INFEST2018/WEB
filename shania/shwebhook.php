<?php

  require_once "LINEBotTiny.php";
  require_once "shconfig.php";

  // Membuat link dari basepath
  function generate_shlink($id,$intype,$gentype){
    $str = "https://cs.unsyiah.ac.id/~hmif/shgen/shmake.php?intype=$intype&gentype=$gentype&contentid=$id";
		return $str;
  }

  function generate_video_response($id,$intype){
    if ($intype == "video"){
      $nama_media = "video";
    } else {
      $nama_media = "gambar";
    }
    $video_url = generate_shlink($id,$intype,'video');
    $response[] = array(
      'type' => 'sticker',
      'packageId' => '1',
      'stickerId' => '407'
    );
    $response[] = array(
      'type' => 'template',
      'altText' => "Untuk mendownload $nama_media twibbon animasi ini, buka link berikut:\n$video_url",
      'template' => array(
        'type' => 'buttons',
        'thumbnailImageUrl' => generate_shlink($id,$intype,'image'),
        'imageAspectRatio' => 'square',
        'title' => 'Twibbon Animasi Anda',
        'text' => 'Tekan tombol berikut untuk membuat sekarang!',
        'actions' => array(
          array(
            'type' => 'uri',
            'label' => 'Proses sekarang',
            'uri' => $video_url
          ),
          array(
            'type' => 'message',
            'label' => 'Link download',
            'text' => "linkdl $intype $id"
          ),
          array(
            'type' => 'message',
            'label' => 'Informasi',
            'text' => 'info'
          )
        )
      )
    );
    return $response;
  }

  function bot_on_follow(){
    $pesan[] = array(
      'type' => 'sticker',
      'packageId' => '1',
      'stickerId' => '124'
    );
		$pesan[] = array(
      "Selamat datang di bot twibbon helper untuk Infest! (Codename Shania)",
      "Disini kamu bisa membuat twibbon Infest secara mudah, hanya dengan mengirimkan gambar atau video yang ingin dijadikan twibbon!",
      "Untuk informasi lebih lanjut, silahkan ketik \"info\""
    );
		return $pesan;
  }

  function bot_on_message($msg){
    $type = strtolower($msg['type']);
    $id = $msg['id'];
    if ($type == "image"){
      $pesan = generate_video_response($id,'image');
		} else
		if ($type == "video"){
			$pesan = generate_video_response($id,'video');
    } else
    if ($type == "text"){
      $cmd = strtolower($msg['text']);
      if ($cmd == "about"){
        $pesan[] = array(
          'type' => 'template',
          'altText' => "(C) Bot codename Shania by Thiekus ~ September 2018",
          'template' => array(
            'type' => 'buttons',
            'title' => 'Tentang bot ini',
            'text' => '(C) Bot codename Shania by Thiekus ~ 2018',
            'actions' => array(
              array(
                'type' => 'uri',
                'label' => 'Kontak LINE',
                'uri' => 'http://line.me/ti/p/~ndezo'
              ),
              array(
                'type' => 'uri',
                'label' => 'My Website',
                'uri' => 'http://cs.unsyiah.ac.id/~frmizi/'
              ),
              array(
                'type' => 'uri',
                'label' => 'My Instagram',
                'uri' => 'https://www.instagram.com/farismee/'
              )
            )
          )
        );
      } else
      if ($cmd == "info"){
        $pesan = array(
          "Disini kamu bisa membuat Twibbon bergerak secara mudah, hanya dengan mengirimkan gambar atau video yang ingin dijadikan twibbon.",
          "Tips & tricks:\n\n".
          "* Anda dapat mengedit foto yang akan dijadikan twibbon dengan menggunakan editor gambar dari LINE sebelum mengirimkannya\n".
          "* Proses pembuatan video baru akan dimulai ketika anda menekan tombol proses. Proses ini memerlukan berberapa detik atau menit dan pemrosesan video biasanya lebih lama.\n".
          "* Apabila anda tidak dapat mendownload video setelah selesai memproses, tekan tombol \"Link download\", lalu copy dan paste url download video yang dihasilkan ke browser handphone anda.\n".
          "* Video akan disesuaikan dengan durasi dari twibbon animasi yang tersedia. Apabila durasi video lebih pendek, program secara otomatis akan membuat efek \"boomerang\" pada sisa durasi yang tersisa.\n",
          "Apabila ada masalah atau ingin kepo tentang bot ini? Ketik \"about\"."
        );
      } else
      if (substr($cmd,0,6) == "linkdl"){
        $param = explode(' ',$cmd);
        $pesan = $this->generate_shlink($param[2],$param[1],'video');
      } else {
        $pesan = "Ketik \"info\" untuk mendapatkan informasi tentang bot ini!";
      }
    }
    return $pesan;
  }

  // Jalankan client ketika webhook direquest!
  $client = new LINEBotTiny($channel_token, $channel_secret);
  foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
      case 'follow': {
        $replies = bot_on_follow();
        break;
      }
      case 'message': {
        $message = $event['message'];
        $replies = bot_on_message($message);
        break;
      }
      default: {
        error_log("Unsupporeted event type: " . $event['type']);
        break;
      }
    }

    if($replies){
      foreach ($replies as $reply){
        if (gettype($reply) == "string"){
          $msg[] = array(
            'type' => 'text',
            'text' => $reply
          );
        } else {
          $msg[] = $reply;
        }
      }
      $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => $msg
      ));
    }

};

?>
