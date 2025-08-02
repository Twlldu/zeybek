        <!-- end sticky elements --> 
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->

        <!-- javascript libraries -->
        <script type="text/javascript" src="<?= base_url('assets/js/jquery.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/vendors.min.js')?>"></script>
        <!-- slider revolution core javaScript files -->
        <script type="text/javascript" src="<?= base_url('assets/revolution/js/jquery.themepunch.tools.min.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/revolution/js/jquery.themepunch.revolution.min.js')?>"></script>

        <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
        <!-- <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script> -->

        <!-- Slider Revolution add on files -->
        <script type='text/javascript' src='<?= base_url('assets/revolution/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3')?>'></script>
        <!-- Slider's main "init" script -->
        <script type="text/javascript">
            /* https://learn.jquery.com/using-jquery-core/document-ready/ */
            jQuery(document).ready(function () {
                /* initialize the slider based on the Slider's ID attribute from the wrapper above */
                jQuery('#decor-store-slider').show().revolution({
                    sliderType: "standard",
                    /* sets the Slider's default timeline */
                    delay: 9000,
                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'fullscreen',
                    /* RESPECT ASPECT RATIO */
                    autoHeight: 'off',
                    /* options that disable autoplay */
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: true
                        },
                        arrows: {

                            enable: false,
                            style: 'uranus',
                            rtl: false,
                            hide_onleave: false,
                            hide_onmobile: false,
                            hide_under: 0,
                            hide_over: 778,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            left: {
                                container: 'slider',
                                h_align: 'left',
                                v_align: 'center',
                                h_offset: 10,
                                v_offset: 10
                            },
                            right: {
                                container: 'slider',
                                h_align: 'right',
                                v_align: 'center',
                                h_offset: 10,
                                v_offset: 10
                            }

                        }

                    },
                    /* Lazy Load options are "all", "smart", "single" and "none" */
                    lazyType: "smart",
                    spinner: "spinner0",
                    /* DISABLE FORCE FULL-WIDTH */
                    fullScreenAlignForce: 'off',
                    hideThumbsOnMobile: 'off',
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                    responsiveLevels: [1240, 1024, 778, 480],
                    /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                    gridwidth: [1220, 1024, 778, 480],
                    /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                    gridheight: [900, 1000, 960, 720],
                    /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                    visibilityLevels: [1240, 1024, 1024, 480],
                    fallbacks: {
                        simplifyAll: 'on',
                        nextSlideOnWindowFocus: 'off',
                        disableFocusListener: false
                    },
                });
            })
        </script>
        <script type="text/javascript" src="<?= base_url('assets/js/main.js')?>"></script>
    </body>
</html>