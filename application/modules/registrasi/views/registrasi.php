
<div id="Header_wrapper">
	<!-- Header -->
	<header id="Header">
		<!-- Header Top -  Info Area -->

		<!-- Header -  Logo and Menu area -->
		<div id="Top_bar">
			<div class="container">
				<div class="column one">
					<div class="top_bar_left clearfix">
						<!-- Logo-->
						<div class="logo">
							<a id="logo" href="<?php echo base_url();?>index.php" title="INFEST"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/theme/custom-image/logo-text.png"
								 alt="INFEST" />
							</a>
						</div>
						<!-- Main menu-->
						<div class="menu_wrapper">
							<nav id="menu">
								<ul id="menu-main-menu" class="menu">
									<li>
										<a href="<?php echo base_url();?>index.php"><span>Beranda</span></a>
									</li>
									<li class="current-menu-item">
										<a href="#"><span>Kategori Lomba</span></a>
										<ul class="sub-menu">
											<li>
												<a href="<?php echo base_url();?>index.php/pemograman"><span>Programming Contest</span></a>
											</li>

											<li>
												<a href="<?php echo base_url();?>index.php/komputer"><span>Olimpiade Komputer</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>index.php/rubik"><span>Kompetisi Rubik</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>index.php/mengetik"><span>Lomba Mengetik Cepat</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>index.php/mobilelegend"><span>Kompetisi Mobile Legend</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>index.php/pes"><span>Kompetisi Pes</span></a>
											</li>

										</ul>
									</li>

									<li>
										<a href="<?php echo base_url();?>index.php/seminar"><span>Seminar</span></a>

									</li>

									<li>
										<a href="<?php echo base_url();?>index.php/pengumuman"><span>Pengumuman</span></a>

									</li>
									<li>
										<a href="<?php echo base_url();?>index.php/jadwal"><span>Jadwal</span></a>

									</li>

								</ul>
							</nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
						</div>
						<!-- Secondary menu area - only for certain pages -->

						<!-- Banner area - only for certain pages-->

						<!-- Header Searchform area-->

					</div>
				</div>
			</div>
		</div>
	</header>
</div>

<div id="content" style="margin: 0 0 0 50px;">
	<div class="content_wrapper clearfix">
		<div class="sections_group">
			<div class="entry-content">
				<div class="section full-width flv_sections_16">
					<div class="section_wrapper clearfix">

						<div align="center" style="padding-top: 50px;">
							<h1 style="font-size: 40px; line-height: 30px;">Pendaftaran Programming Contest</h1>
							<img style="padding: 10px 0 50px 0; width:700px;;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
						</div>
						<div align="center" style="font-size:12pt;">
							<form name="frm" action="<?php echo base_url(). 'index.php/registrasi/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
								<h3 class="form-judul">Form Tim</h3>
								<img style="padding: 0px 0 20px 0; height:3px; width:450px;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
								<div class="form-group">
									<label for="nama_tim">Nama Tim:</label>
									<span id="team_result"></span>
									<input type="text" class="form-control" id="nama_tim" placeholder="Masukan Nama Tim" name="nama_tim">
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<span id="email_result"></span>
									<input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
								</div>
								<div class="form-group">
									<label for="pswd">Password:</label>
									<input type="password" class="form-control" id="pswd" placeholder="password" onkeyup="check();" name="pswd">
								</div>
								<div class="form-group">
									<label for="confirm_pswd">Confirm Password:</label>
									<span style="font-size:10pt;" id='message'></span>
									<input type="password" class="form-control" id="confirm_pswd" placeholder="password" onkeyup="check();" name="confirm_pswd">

								</div>
								<div class="form-group">
									<label for="universitas">Universitas:</label>
									<input type="text" class="form-control" id="universitas" name="universitas">
								</div>


								<br><br>
								<h3 class="form-judul">Form Anggota Tim</h3>
								<img style="padding: 0px 0 20px 0; height:3px; width:450px;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
								<br>
								<h4>Anggota 1</h4>
								<img style="padding: 0px 0 20px 0; height:3px; width:200px;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
								<div class="form-group">
									<label for="anggota1">Nama:</label>
									<input type="text" class="form-control" id="anggota1" placeholder="Nama" name="anggota1">
								</div>
								<div class="form-group">
									<label for="fak_jur1">Fakultas/Jurusan:</label>
									<input type="text" class="form-control" id="fak_jur1" placeholder="Fakultas/Jurusan" name="fak_jur1">
								</div>
								<div class="form-group">
									<label for="no_hp1">No Hp:</label>
									<input type="text" class="form-control" id="no_hp1" placeholder="ex: 082360011441" name="no_hp1">
								</div>
								<div class="form-group">
									<label for="wa1">Whatsapp:</label>
									<input type="text" class="form-control" id="wa1" placeholder="Whatsapp" name="wa1">
								</div>
								<div class="form-group">
									<label for="ktm1">Scan Ktm</label>
									<input type="file" class="form-control" id="ktm1" name="ktm1">
								</div>

								<br><br>
								<h4>Anggota 2</h4>
								<img style="padding: 0px 0 20px 0; height:3px; width:200px;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
								<div class="form-group">
									<label for="anggota2">Nama:</label>
									<input type="text" class="form-control" id="anggota2" placeholder="Nama" name="anggota2">
								</div>
								<div class="form-group">
									<label for="fak_jur2">Fakultas/Jurusan:</label>
									<input type="text" class="form-control" id="fak_jur2" placeholder="Fakultas/Jurusan" name="fak_jur2">
								</div>
								<div class="form-group">
									<label for="no_hp2">No Hp:</label>
									<input type="text" class="form-control" id="no_hp2" placeholder="ex: 082360011441" name="no_hp2">
								</div>
								<div class="form-group">
									<label for="wa2">Whatsapp:</label>
									<input type="text" class="form-control" id="wa2" placeholder="Whatsapp" name="wa2">
								</div>
								<div class="form-group">
									<label for="ktm2">Scan Ktm</label>
									<input type="file" class="form-control" id="ktm2" name="ktm2">
								</div>

								<br><br>
								<h4>Anggota 3</h4>
								<img style="padding: 0px 0 20px 0; height:3px; width:200px;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
								<div class="form-group">
									<label for="anggota3">Nama:</label>
									<input type="text" class="form-control" id="anggota3" placeholder="Nama" name="anggota3">
								</div>
								<div class="form-group">
									<label for="fak_jur3">Fakultas/Jurusan:</label>
									<input type="text" class="form-control" id="fak_jur3" placeholder="Fakultas/Jurusan" name="fak_jur3">
								</div>
								<div class="form-group">
									<label for="no_hp3">No Hp:</label>
									<input type="text" class="form-control" id="no_hp3" placeholder="ex: 082360011441" name="no_hp3">
								</div>
								<div class="form-group">
									<label for="wa3">Whatsapp:</label>
									<input type="text" class="form-control" id="wa3" placeholder="Whatsapp" name="wa3">
								</div>
								<div class="form-group">
									<label for="ktm3">Scan Ktm</label>
									<input type="file" class="form-control" id="ktm3" name="ktm3">
								</div>

								<br><br><br>

								<button type="submit" onclick="IsEmpty()" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script>
	var check = function () {
		if (document.getElementById('pswd').value ==
			document.getElementById('confirm_pswd').value) {
			document.getElementById('message').style.color = 'green';
			document.getElementById('message').innerHTML = '<i class="material-icons" style="font-size:10pt">done</i> match';
		} else {
			document.getElementById('message').style.color = 'red';
			document.getElementById('message').innerHTML = '<i class="material-icons" style="font-size:10pt">clear</i> password need to match';
		}
	}

	function IsEmpty() {
		if (document.forms['frm'].nama_tim.value === "") {
			alert("Nama Tim Tidak Boleh Kosong");
			return false;
		} else if (document.forms['frm'].email.value === "") {
			alert("Mohon Masukan Email");
			return false;
		} else if (document.forms['frm'].pswd.value === "") {
			alert("Password tidak boleh kosong");
			return false;
		} else if (document.forms['frm'].confirm_pswd.value === "") {
			alert("Mohon Konfirmasi Password");
			return false;
		}else if (document.forms['frm'].confirm_pswd.value != document.forms['frm'].pswd.value) {
			alert("Mohon Periksa Konfirmasi Password");
			return false;
		} else if (document.forms['frm'].universitas.value === "") {
			alert("Masukan Nama Universitas Anda");
			return false;
		} else if (document.forms['frm'].anggota1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		} else if (document.forms['frm'].fak_jur1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		} else if (document.forms['frm'].no_hp1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		}else if (document.forms['frm'].wa1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		}else if (document.forms['frm'].ktm1.value === "") {
			alert("Mohon Upload Scan Ktm Anggota 1");
			return false;
		}  else if (document.forms['frm'].anggota2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		} else if (document.forms['frm'].fak_jur2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		} else if (document.forms['frm'].no_hp2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		}else if (document.forms['frm'].wa2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		}else if (document.forms['frm'].ktm2.value === "") {
			alert("Mohon Upload Scan Ktm Anggota 2");
			return false;
		}   else if (document.forms['frm'].anggota3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		} else if (document.forms['frm'].fak_jur3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		} else if (document.forms['frm'].no_hp3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		}else if (document.forms['frm'].wa3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		}else if (document.forms['frm'].ktm3.value === "") {
			alert("Mohon Upload Scan Ktm Anggota 3");
			return false;
		} else {
			return true;
		}

		
	}
</script>
<script>
 $(document).ready(function(){
      $('#email').change(function(){
           var email = $('#email').val();
           if(email != '')
           {
                $.ajax({
                     url:"<?php echo base_url(); ?>index.php/registrasi/check_email_avalibility",
                     method:"POST",
                     data:{email:email},
                     success:function(data){
                          $('#email_result').html(data);
                     }
                });
           }
      });
 });
 </script>

 <script>
 $(document).ready(function(){
      $('#nama_tim').change(function(){
           var nama_tim = $('#nama_tim').val();
           if(nama_tim != '')
           {
                $.ajax({
                     url:"<?php echo base_url(); ?>index.php/registrasi/check_team_avalibility",
                     method:"POST",
                     data:{nama_tim:nama_tim},
                     success:function(data){
                          $('#team_result').html(data);
                     }
                });
           }
      });
 });
 </script>
