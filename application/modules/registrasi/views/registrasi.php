
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
							<a id="logo" href="<?php echo base_url();?>" title="INFEST"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/theme/custom-image/logo-text.png"
								 alt="INFEST" />
							</a>
						</div>
						<!-- Main menu-->
						<div class="menu_wrapper">
							<nav id="menu">
								<ul id="menu-main-menu" class="menu">
									<li>
										<a href="<?php echo base_url();?>"><span>Beranda</span></a>
									</li>
									<li class="current-menu-item">
										<a href="#"><span>Kategori Lomba</span></a>
										<ul class="sub-menu">
											<li>
												<a href="<?php echo base_url();?>pemograman"><span>Programming Contest</span></a>
											</li>

											<li>
												<a href="<?php echo base_url();?>komputer"><span>Olimpiade Komputer</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>rubik"><span>Kompetisi Rubik</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>mengetik"><span>Lomba Mengetik Cepat</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>mobilelegend"><span>Kompetisi Mobile Legend</span></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>pes"><span>Kompetisi Pes</span></a>
											</li>
											<li>
                                                <a href="<?php echo base_url();?>akustik"><span>Akustik</span></a>
                                            </li>

										</ul>
									</li>

									<li>
										<a href="<?php echo base_url();?>seminar"><span>Seminar</span></a>

									</li>

									<li>
										<a href="<?php echo base_url();?>pengumuman"><span>Pengumuman</span></a>

									</li>
									<li>
										<a href="<?php echo base_url();?>jadwal"><span>Jadwal</span></a>

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
						<br>
						<br>
						<br>
						<div align="center" style="font-size:12pt;">
							<h3 style="color: red">Masa pendaftaran telah berakhir.</h3>
						</div>
						<br>
						<br>
						<br>
						<br>
						<br>
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
		} else if (document.forms['frm'].pswd.value.length < 6) {
			alert("Password harus terdiri dari 6 character atau lebih");
			return false;
		} else if (document.forms['frm'].confirm_pswd.value === "") {
			alert("Mohon Konfirmasi Password");
			return false;
		} else if (document.forms['frm'].confirm_pswd.value != document.forms['frm'].pswd.value) {
			alert("Mohon Periksa Konfirmasi Password");
			return false;
		} else if (document.forms['frm'].universitas.value === "") {
			alert("Masukan Nama Universitas Anda");
			return false;
		} else if (document.forms['frm'].anggota1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		}else if (document.forms['frm'].nim1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		} else if (document.forms['frm'].fak_jur1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		} else if (document.forms['frm'].no_hp1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		} else if (document.forms['frm'].wa1.value === "") {
			alert("Lengkapi data Anggota 1");
			return false;
		} else if (document.forms['frm'].ktm1.value === "") {
			alert("Mohon Upload Scan Ktm Anggota 1");
			return false;
		} else if (document.forms['frm'].anggota2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		} else if (document.forms['frm'].nim2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		} else if (document.forms['frm'].fak_jur2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		} else if (document.forms['frm'].no_hp2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		} else if (document.forms['frm'].wa2.value === "") {
			alert("Lengkapi data Anggota 2");
			return false;
		} else if (document.forms['frm'].ktm2.value === "") {
			alert("Mohon Upload Scan Ktm Anggota 2");
			return false;
		} else if (document.forms['frm'].anggota3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		} else if (document.forms['frm'].nim3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		} else if (document.forms['frm'].fak_jur3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		} else if (document.forms['frm'].no_hp3.value === "") {
			alert("Lengkapi data Anggota 3");
			return false;
		} else if (document.forms['frm'].wa3.value === "") {
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
