        <footer id="Footer" class="clearfix" style="background-color:#f0eeee; color:black;">
            <!-- Footer - First area -->
            
            <div class="widgets_wrapper">
                <div class="container">
                    <div class="one-two column" style="padding:30px 120px 0px 0px;">
                        <img class="footer-image" src="<?php echo base_url() ?>asset/theme/custom-image/text-hitam.png">
                    </div>
                    
                    
                    <div class="one-two column">
                        <!-- Text Area -->
                        <aside id="text-8" class="widget widget_text">
                            <h4 style="color:black">Hubungi Kami</h4>
                            <div class="textwidget">
                                <ul class="list_mixed">
                                    <li class="custom-icon">
                                        <img class="image-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/email.png">
                                        <img class="back-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/email-hover.png">
                                        hmif.unsyiah.ac.id
                                    </li>
                                   <li class="custom-icon">
                                        <img class="image-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/phone.png">
                                        <img class="back-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/phone-hover.png">
                                        08116813107
                                    </li>
                                   <li class="custom-icon">
                                        <img class="image-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/fb.png">
                                        <img class="back-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/fb-hover.png">
                                        Himpunan Informatika Unsyiah
                                    </li>
                                    <li class="custom-icon">
                                        <img class="image-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/instagram.png">
                                        <img class="back-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/instagram-hover.png">
                                        hmif_unsyiah
                                    </li>
                                     <li class="custom-icon">
                                        <img class="image-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/lineM.png">
                                        <img class="back-icon" src="<?php echo base_url() ?>asset/theme/custom-image/icon/lineM-hover.png">
                                        @tll3620n
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <div class="copyright" style="font-size:15px">
                            &copy; 2018 - INFEST 2018 - FMIPA INFORMATIKA UNIVERSITAS SYIAH KUALA
                        </div>
                        <!--Social info area-->
                        
                    </div>
                </div>
            </div>
        </footer> 

</div>

    <!-- Popup contact form -->
    

    <!-- JS -->
   
    <script src="<?php echo base_url() ?>asset/theme/js/jquery-2.1.4.min.js"></script>

    <script src="<?php echo base_url() ?>asset/theme/js/mfn.menu.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/js/jquery.plugins.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/js/jquery.jplayer.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/js/animations/animations.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/js/email.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/js/scripts.js"></script>

    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo base_url() ?>asset/theme/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
 <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi34;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_34_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_34_2");
            } else {
                revapi34 = tpj("#rev_slider_34_2").show().revolution({
                    sliderType: "standard",

                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 7000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 0.7,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 90,
                                v_offset: 40
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 40,
                                v_offset: 40
                            }
                        },
                        thumbnails: {
                            style: "hesperiden",
                            enable: true,
                            width: 200,
                            height: 80,
                            min_width: 100,
                            wrapper_padding: 5,
                            wrapper_color: "transparent",
                            wrapper_opacity: "1",
                            tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">Slide</span>',
                            visibleAmount: 3,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_onleave: false,
                            direction: "horizontal",
                            span: false,
                            position: "inner",
                            space: 5,
                            h_align: "left",
                            v_align: "bottom",
                            h_offset: 40,
                            v_offset: 40
                        }
                    },
                    gridwidth: 1180,
                    gridheight: 650,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "on",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: "off",
                    }
                });
            }
        });
    </script>
    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "<?php echo base_url() ?>asset/theme/custom-image/logo-text.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>
    
</body>

</html>