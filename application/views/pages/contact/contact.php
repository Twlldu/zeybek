<?= $sections['header']?>

<!-- start header -->
<?= $sections['navbar'] ?>
        <!-- end header -->
        <!-- start page title -->
        <section class="page-title-center-alignment cover-background top-space-padding" style="background-image: url(<?= base_url('assets/images/demo-decor-store-title-bg.jpg')?>)">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px"><?= __('contact')?></h1>
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                        <ul>
                            <li><a href="<?= lang_url();?>"><?= __('home')?></a></li> 
                            <li><?= __('contact')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title --> 
        <!-- start section -->  
        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col md-mb-35px">
                        <span class="fs-17 fw-600 d-block w-90 sm-w-100 text-base-color border-bottom border-color-base-color pb-15px mb-15px"><i class="feather icon-feather-map-pin d-inline-block text-base-color me-10px"></i><?= __('company_location')?></span>
                        <div>
                            <p class="w-100 m-0">Mahmudiye Mahallesi 15. Mobilya Sokak No:16<br> 16400 İnegöl/Bursa</p>
                        </div>
                    </div>
                    <div class="col md-mb-35px">
                        <span class="fs-17 fw-600 d-block w-90 sm-w-100 text-base-color border-bottom border-color-base-color pb-15px mb-15px"><i class="feather icon-feather-mail d-inline-block text-base-color me-10px"></i>Email</span>
                        <a href="mailto:siparis@zeybekhome.com">siparis@zeybekhome.com</a><br>
                    </div>
                    <div class="col xs-mb-35px">
                        <span class="fs-17 fw-600 d-block w-90 sm-w-100 text-base-color border-bottom border-color-base-color pb-15px mb-15px"><i class="feather icon-feather-phone d-inline-block text-base-color me-10px"></i><?= __('company_phone')?></span>
                        <span class="me-2"><?= __('contact_order_title_phone')?></span><a href="tel:05354153326">0 535 415 3326</a><br>
                        <span class="me-2"><?= __('contact_title_phone')?></span><a href="tel:05392319911">0 539 231 9911</a><br>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0 position-relative overflow-hidden" style="margin-bottom: -80px;"> 
            <div class="container">
                <div class="row mb-20px">
                    <div class="col-lg-10 col-md-12" data-anime='{ "effect": "slide", "color": "#1B3250", "direction":"rl", "easing": "easeOutQuad", "delay":50}'> 
                        <img src="<?= base_url('assets/images/petra-koltuk/IMG_0779.jpg')?>" alt="" />
                    </div> 
                </div>
                <div class="row align-items-end">
                    <div class="col-lg-7 col-md-12 align-self-start md-mt-15px" data-bottom-top="transform: translate3d(80px, 20px, 0px);" data-top-bottom="transform: translate3d(-80px, 20px, 0px);">
                        <span class="alt-font fs-120 xs-fs-75 fw-600 opacity-3 d-block d-lg-inline-block text-center ls-minus-3px text-white-space-nowrap xs-text-white-space-normal">Zeybek Home</span>
                    </div>
                    <div class="col-lg-5 contact-form-style-03 position-relative overlap-section-one-fourth md-mt-0" data-anime='{ "el": "childs", "translateY": [50, 0],"opacity": [0,1], "duration": 800, "delay": 550, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                        <div class="bg-base-color p-16 lg-p-10 position-relative overflow-hidden mt-50px">
                            <i class="bi bi-chat-text fs-140 text-white opacity-1 position-absolute top-minus-30px right-minus-20px"></i>
                            <h2 class="fw-600 alt-font text-white mb-30px fancy-text-style-4 ls-minus-1px"> 
                                <span><?= __('contact')?></span> 
                            </h2>
                            <form action="email-templates/contact-form.php" method="post">
                                <div class="position-relative form-group mb-10px">
                                    <span class="form-icon text-white"><i class="bi bi-person icon-small"></i></span>
                                    <input class="fw-300 ps-0 border-radius-0px bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required" type="text" name="name" placeholder="<?= __('contact_form_placeholder_name')?>*">
                                </div>
                                <div class="position-relative form-group mb-10px">
                                    <span class="form-icon text-white"><i class="bi bi-envelope icon-small"></i></span>
                                    <input class="fw-300 ps-0 border-radius-0px bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required" type="email" name="email" placeholder="<?= __('contact_form_placeholder_email')?>*">
                                </div>
                                <div class="position-relative form-group mb-10px">
                                    <span class="form-icon text-white"><i class="fa fa-phone icon-small"></i></span>
                                    <input class="fw-300 ps-0 border-radius-0px bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required" type="tel" name="tel" placeholder="<?= __('contact_form_placeholder_phone')?>*">
                                </div>
                                <div class="position-relative form-group form-textarea mt-10px"> 
                                    <textarea class="fw-300 ps-0 border-radius-0px bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control" name="comment" placeholder="<?= __('contact_form_placeholder_messages')?>" rows="3"></textarea>
                                    <span class="form-icon text-white"><i class="bi bi-chat-square-dots icon-small"></i></span>
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn btn-white btn-large fw-600 btn-switch-text btn-box-shadow btn-round-edge submit mt-30px" type="submit">
                                        <span>
                                            <span class="btn-double-text" data-text="<?= __('contact_form_hover_text')?>"><?= __('contact_form_button')?></span> 
                                        </span>
                                    </button>
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> 
        <!-- start section -->
         <section>
            <div class="container-fluid">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3053.1504609161343!2d29.530407999999998!3d40.0720558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cbc9412d4e98d5%3A0x18a7530d00e7ecce!2sZeybek%20%C3%9Cnite!5e0!3m2!1str!2str!4v1751070093066!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
         </section>
        <?= $sections['page_footer']?>
        <!-- end footer -->
        <a id="button"></a>
        <?= $sections['cookies']?>



<?= $sections['footer']?>