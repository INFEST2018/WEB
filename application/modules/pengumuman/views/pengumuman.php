<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>
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
                                    <a id="logo" href="<?php echo base_url();?>" title="INFEST"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/theme/custom-image/logo-text.png" alt="INFEST" />
                                    </a>
                                </div>
                                <!-- Main menu-->
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu">
                                            <li >
                                                <a href="<?php echo base_url();?>"><span>Beranda</span></a>
                                            </li>
                                             <li >
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

                                            <li >
                                                <a href="<?php echo base_url();?>seminar"><span>Seminar</span></a>

                                            </li>

                                            <li class="current-menu-item">
                                                <a href="<?php echo base_url();?>pengumuman"><span>Pengumuman</span></a>
                                            </li>
                                            <li >
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


<div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section full-width flv_sections_16">
                            <div class="section_wrapper clearfix">

                                <div align="center" style="padding-top: 50px;">
                                    <h1 style="font-size: 40px; line-height: 30px;">Pengumuman</h1>
                                    <img style="padding: 10px 0 50px 0;" src="<?php echo base_url() ?>asset/theme/custom-image/icon/line.png">
                                </div>

                                <div class="deskripsi" >
                                    <button onclick="location.href='https://coding.infestunsyiah.com/'" class="accordion"><b>Klik disini untuk memulai tahap penyisihan Programming Contest</b></button>
                                    <button class="accordion"><b>Tahap penyisihan Programming Contest akan berlangsung pada 17 Oktober 2018 pukul 15.00 - 23.55 wib</b></button>
                                    <button onclick="location.href='https://coding.infestunsyiah.com/'" class="accordion"><b>Klik disini untuk memulai demo Programming Contest</b></button>
                                    <button class="accordion"><b>Demo online Programming Contest akan dilaksanakan pada 12-13 Oktober 2018 pukul 15.00 - 23.55 wib</b></button>
                                    <div class="panel">
                                    </div>
                                     <button class="accordion"><b>Tim yang Akan Berpartisipasi pada Tahap Penyisihan Programming Contest</b></button>
                                    <div class="panel">
                                        <p>Berikut adalah daftar 93 (sembilan puluh tiga) tim yang akan berpartisipasi pada tahap penyisihan Programming Contest INFEST 2018 <a href="https://drive.google.com/open?id=1Ovzz1prxWPkTCeKxcOy_-NCgk35Mz2nH">Klik disini untuk melihat.</a></p>
                                    </div>
                                     <button class="accordion"><b>Pendaftaran Programming Contest akan berakhir pada 07 Oktober 2018 pukul 20.00 wib</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>