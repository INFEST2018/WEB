<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript">
			<?php
					include APPPATH ."modules/DaftarPeserta/ajax/DaftarPeserta.js";
			?>
	</script>
	<style media="screen">

	table, tr, td, th
		{
			border: 1px solid black;
			border-collapse:collapse;
		}
		.lihat
		{
			cursor:pointer;
		}
		.sign:after{
		content:"+";
		display:inline-block;
		}
		.lihat .sign:after{
		content:"-";
		}
	</style>

</head>
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
							<h1 style="font-size: 40px; line-height: 30px;">Daftar Peserta Pendaftar Programming Contest</h1>
							<img style="padding: 10px 0 50px 0; width:700px;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
						</div>
						<div align="center" style="font-size:12pt;">
								<table id=DataTeam border="0">

								</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
