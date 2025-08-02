  <!-- start footer -->
  <footer class="footer-dark bg-dark-gray pb-0 pt-0 cover-background" style="background-image:url('<?= base_url('assets/images/demo-decor-store-footer-bg.jpg')?>')">
            <div class="container pt-4 pb-4 md-pt-45px md-pb-45px">
                <div class="row justify-content-center">
                    <!-- start footer column -->
                    <div class="col-6 col-lg-3 last-paragraph-no-margin order-sm-1 md-mb-50px xs-mb-30px">
                        <a href="<?= base_url('/')?>" class="footer-logo mb-15px d-inline-block"><img src="<?= base_url('assets/images/zeybek-white-logo.png')?>" data-at2x="<?= base_url('assets/images/zeybek-white-logo.png')?>" alt=""></a>
                        <p class="w-80 sm-w-100"><?= __('footer_about')?></p>
                        <div class="elements-social social-icon-style-02 mt-15px">
                            <ul class="small-icon light">
                                <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a class="whatsapp" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                        <span class="fs-16 alt-font fw-500 d-block text-white mb-5px"><?= __('products')?></span>
                        <ul>
                            <li><a href="<?= lang_url('urunler/petra-yemek-odasi'); ?>">Petra <?= __('dining')?> <?= __('room')?></a></li>
                            <li><a href="<?= lang_url('urunler/lotus-yemek-odasi'); ?>">Lotus <?= __('dining')?> <?= __('room')?></a></li>
                            <li><a href="<?= lang_url('urunler/asya-yemek-odasi'); ?>">Asya <?= __('dining')?> <?= __('room')?></a></li>
                            <li><a href="<?= lang_url('urunler/enna-yemek-odasi'); ?>">Enna <?= __('dining')?> <?= __('room')?></a></li>
                            <li><a href="<?= lang_url('urunler/enna-plus-yemek-odasi'); ?>">Enna Plus<?= __('dining')?> <?= __('room')?></a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                        <span class="fs-16 alt-font fw-500 d-block text-white mb-5px"><?= __('corporate'); ?></span>
                        <ul>
                            <li><a href="<?= lang_url('hakkimizda'); ?>"><?= __('about'); ?></a></li>
                            <li><a href="<?= lang_url('iletisim'); ?>"><?= __('contact'); ?></a></li>
                            <li><a href="<?= lang_url('sikca-sorulan-sorular'); ?>"><?= __('faq'); ?></a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                        <span class="fs-16 alt-font fw-500 d-block text-white mb-5px"><?= __('footer_site_map_title'); ?></span>
                        <ul>
                            <li><a href="<?= lang_url(''); ?>"><?= __('home'); ?></a></li>
                            <li><a href="<?= lang_url('hakkimizda'); ?>"><?= __('about'); ?></a></li>
                            <li><a href="<?= lang_url('iletisim'); ?>"><?= __('contact'); ?></a></li>
                            <li><a href="<?= lang_url('sikca-sorulan-sorular'); ?>"><?= __('faq'); ?></a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->  
                    <!-- start footer column -->
                    <div class="col-lg-3 col-sm-6 ps-20px sm-ps-15px md-mb-50px xs-mb-0 order-sm-2 order-lg-5">
                        <span class="fs-16 alt-font fw-500 d-block text-white mb-5px"><?= __('contact'); ?></span>
                        <div class="mb-20px"><?=__('footer_contact_information');?></div>
                        <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px"> 
                            <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                                <input class="bg-blue-tangaroa border-color-transparent-white-light w-100 form-control pe-50px ps-20px lg-ps-15px required" type="email" name="email" placeholder="<?= __('footer_email_placeholder')?>" />
                                <input type="hidden" name="redirect" value="">
                                <button class="btn pe-20px submit" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-white"></i></button>
                                <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>
                    </div>
                    <!-- end footer column -->                        
                </div>
            </div> 
            <div class="border-top border-color-transparent-white-light pt-30px pb-30px">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 last-paragraph-no-margin text-center text-xl-start lg-mt-20px order-3 order-xl-1">
                            <?= __('footer_bottom_recaptcha_notice')?>
                            <?= __('footer_bottom_copyrights')?>
                        </div>
                        <div class="col-6 col-xl-2 col-md-3 col-sm-5 text-center text-xl-start order-1 order-xl-2">
                            <span class="lh-26 alt-font d-block"><?= __('footer_bottom_phone_title')?></span>
                            <a href="tel:05354153326" class="fs-14 text-white fw-500">+90 535 415 3326</a>
                        </div>
                        <div class="col-6 col-xl-2 col-md-3 col-sm-5 text-center text-xl-start order-2 order-xl-3">
                            <span class="lh-26 alt-font d-block">Email</span>
                            <a href="mailto:siparis@zeybekhome.com" class="fs-13 text-white fw-400">siparis@zeybekhome.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>