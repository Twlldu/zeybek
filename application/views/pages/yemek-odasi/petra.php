<?= $sections['header']?>

      <?= $sections['navbar'] ?>

<!-- start breadcrumb -->
<section class="top-space-margin border-top border-color-extra-medium-gray pt-20px pb-20px ps-45px pe-45px lg-ps-35px lg-pe-35px md-ps-15px md-pe-15px sm-ps-0 sm-pe-0">
            <div class="container-fluid">
                <div class="row align-items-center"> 
                    <div class="col-12 breadcrumb breadcrumb-style-01 fs-14 alt-font">
                        <ul>
                            <li><a href="<?= lang_url('/')?>"><?= __('home')?></a></li>
                            <li>Petra <?= __('dining_room_set')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end breadcrumb --> 
        <!-- start section -->
        <section class="pt-40px pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 md-mb-40px" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="row overflow-hidden position-relative">
                            <div class="col-12 position-relative product-image">
                                <div class="swiper product-image-slider" data-slider-options='{ "spaceBetween": 0, "watchOverflow": true, "navigation": { "nextEl": ".slider-product-next", "prevEl": ".slider-product-prev" }, "thumbs": { "swiper": { "el": ".product-image-thumb", "slidesPerView": "5", "spaceBetween": 15 } } }' data-swiper-thumb-click="1">
                                    <div class="swiper-wrapper">
                                        <!-- start slider item -->
                                        <div class="swiper-slide gallery-box">
                                            <a href="<?= base_url('assets/images/petra-yasam/PETRA-1.jpg')?>" data-group="lightbox-gallery" title="Petra-1">
                                                <img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-1.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item -->
                                        <div class="swiper-slide gallery-box">
                                            <a href="<?= base_url('assets/images/petra-yasam/PETRA-3.jpg')?>" data-group="lightbox-gallery" title="Petra-2">
                                                <img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-3.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item -->
                                        <div class="swiper-slide gallery-box">
                                            <a href="<?= base_url('assets/images/petra-yasam/PETRA-5.jpg')?>" data-group="lightbox-gallery" title="Petra-3">
                                                <img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-5.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item -->
                                        <div class="swiper-slide gallery-box">
                                            <a href="<?= base_url('assets/images/petra-yasam/PETRA-7')?>" data-group="lightbox-gallery" title="Petra-4">
                                                <img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-7')?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item -->
                                        <div class="swiper-slide gallery-box">
                                            <a href="<?= base_url('assets/images/petra-yasam/PETRA-12.jpg')?>" data-group="lightbox-gallery" title="Petra-5">
                                                <img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-12.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item --> 
                                        <div class="swiper-slide gallery-box">
                                            <a href="<?= base_url('assets/images/petra-yasam/PETRA-13.jpg')?>" data-group="lightbox-gallery" title="Petra-6">
                                                <img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-13.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item --> 
                                        <div class="swiper-slide gallery-box">
                                            <a href="<?= base_url('assets/images/petra-yasam/PETRA-14.jpg')?>" data-group="lightbox-gallery" title="Petra-7">
                                                <img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-14.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item --> 
                                    </div>
                                </div>
                                <div class="slider-product-next swiper-button-next border-radius-100 border border-1 border-color-extra-medium-gray"><i class="fa fa-chevron-right text-dark-gray icon-very-small"></i></div>
                                <div class="slider-product-prev swiper-button-prev border-radius-100 border border-1 border-color-extra-medium-gray"><i class="fa fa-chevron-left text-dark-gray icon-very-small"></i></div>
                            </div>
                            <div class="col-12 position-relative">
                                <div class="swiper-container product-image-thumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-1.jpg')?>" alt=""></div>
                                        <div class="swiper-slide"><img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-3.jpg')?>" alt=""></div>
                                        <div class="swiper-slide"><img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-5.jpg')?>" alt=""></div>
                                        <div class="swiper-slide"><img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-7.jpg')?>" alt=""></div> 
                                        <div class="swiper-slide"><img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-12.jpg')?>" alt=""></div>
                                        <div class="swiper-slide"><img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-13.jpg')?>" alt=""></div>
                                        <div class="swiper-slide"><img class="w-100" src="<?= base_url('assets/images/petra-yasam/PETRA-14.jpg')?>" alt=""></div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 product-info" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="fw-500 text-dark-gray d-block">Zeybek Home</span>
                        <h5 class="alt-font text-dark-gray fw-700 mb-10px">Petra <?= __('dining_room_set')?> </h5>
                        
                        
                        <p><?= __('petra_dining_content')?></p>
                       
                        <div class="d-flex align-items-start flex-column flex-sm-column mb-20px position-relative">
                            <a href="https://drive.google.com/drive/folders/1CJ3g9FrH1yVlLs8F5IIGPto6_B-7dI7N?usp=drive_link" class="btn btn-cart btn-extra-large btn-switch-text btn-box-shadow btn-none-transform btn-dark-gray left-icon border-radius-5px me-15px xs-me-0 order-3 order-sm-2 w-60">
                                <span>
                                    <span><i class="fab fa-google-drive" style="font-size:25px;"></i></span>
                                    <span class="btn-double-text" data-text="Google drive">Google Drive</span> 
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section id="tab">
            <div class="container">
                <div class="row">
                    <div class="col-12 tab-style-04" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <ul class="nav nav-tabs border-0 justify-content-center alt-font fs-17 fw-500">
                            <li class="nav-item"><a data-bs-toggle="tab" href="#tab_five1" class="nav-link active"><?= __('petra_tab_explanation_title')?><span class="tab-border bg-dark-gray"></span></a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five2"><?= __('dimensions')?><span class="tab-border bg-dark-gray"></span></a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five3"><?= __('shipping_and_delivery')?><span class="tab-border bg-dark-gray"></span></a></li>
                            
                        </ul>
                        <div class="mb-6 h-1px w-100 bg-extra-medium-gray sm-mt-10px"></div>
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane fade in active show" id="tab_five1">
                                <div class="row align-items-center justify-content-center mb-5 sm-mb-10">
                                    <div class="col-xl-4 col-lg-5 md-mb-40px">
                                        <div class="d-flex align-items-center mb-10px">
                                            <div class="col alt-font fs-15 fw-500 text-dark-gray">Zeybek Home</div>
                                        </div>
                                        <h4 class="alt-font text-dark-gray fw-700 mb-20px">Petra <?= __('dining_room_set')?></h4>
                                        <p><?= __('petra_tab_explanation_content')?> </p>
                                        <div>
                                            <div class="feature-box feature-box-left-icon-middle mb-10px">
                                                <div class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-very-light-gray me-10px">
                                                    <i class="fa-solid fa-check fs-12 text-dark-gray"></i>
                                                </div>
                                                <div class="feature-box-content"> 
                                                    <span class="d-block text-dark-gray fw-500"><?= __('petra_tab_explanation_row_1')?></span>
                                                </div>
                                            </div>
                                            <div class="feature-box feature-box-left-icon-middle mb-10px">
                                                <div class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-very-light-gray me-10px">
                                                    <i class="fa-solid fa-check fs-12 text-dark-gray"></i>
                                                </div>
                                                <div class="feature-box-content"> 
                                                    <span class="d-block text-dark-gray fw-500"><?= __('petra_tab_explanation_row_2')?></span>
                                                </div>
                                            </div>
                                            <div class="feature-box feature-box-left-icon-middle mb-10px">
                                                <div class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-very-light-gray me-10px">
                                                    <i class="fa-solid fa-check fs-12 text-dark-gray"></i>
                                                </div>
                                                <div class="feature-box-content"> 
                                                    <span class="d-block text-dark-gray fw-500"><?= __('petra_tab_explanation_row_3')?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 offset-xl-1">
                                        <img src="<?= base_url('assets/images/petra-yasam/PETRA-1.jpg')?>" alt="" class="w-100" />
                                    </div>
                                </div>
                                
                                
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_five2">
                                <div class="row m-0">
                                <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-4 pt-10px pb-10px xs-pb-0 text-dark-gray alt-font fw-600"><?= __('table')?></div>
                                            <div class="col-lg-10 col-md-9 col-sm-8 pt-10px pb-10px xs-pt-0"><?=__('width') ?> 170-205 | <?= __('depth')?> 92 | <?= __('height')?>79</div>
                                        </div>
                                        <div class="row bg-very-light-gray">
                                            <div class="col-lg-2 col-md-3 col-sm-4 pt-10px pb-10px xs-pb-0 text-dark-gray alt-font fw-600"><?= __('console')?></div>
                                            <div class="col-lg-10 col-md-9 col-sm-8 pt-10px pb-10px xs-pt-0"><?=__('width') ?> 200 | <?= __('depth')?>  45 | <?= __('height')?>83</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-4 pt-10px pb-10px xs-pb-0 text-dark-gray alt-font fw-600"><?=__('coffe_table')?></div>
                                            <div class="col-lg-10 col-md-9 col-sm-8 pt-10px pb-10px xs-pt-0"><?=__('width') ?> 120 | <?= __('depth')?>  68 | <?= __('height')?>44</div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-4 pt-10px pb-10px xs-pb-0 text-dark-gray alt-font fw-600"></div>
                                            <div class="col-lg-10 col-md-9 col-sm-8 pt-10px pb-10px xs-pt-0"><?=__('width') ?> 45 | <?= __('depth')?>  45 | <?= __('height')?>45-50-55</div>
                                        </div>
                                        <div class="row bg-very-light-gray">
                                            <div class="col-lg-2 col-md-3 col-sm-4 pt-10px pb-10px xs-pb-0 text-dark-gray alt-font fw-600">Tv Alt Blok:</div>
                                            <div class="col-lg-10 col-md-9 col-sm-8 pt-10px pb-10px xs-pt-0"><?=__('width') ?> 200 | <?= __('depth')?>  45 | <?= __('height')?>60</div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-2 col-md-3 col-sm-4 pt-10px pb-10px xs-pb-0 text-dark-gray alt-font fw-600">Tv Üst Blok:</div>
                                            <div class="col-lg-10 col-md-9 col-sm-8 pt-10px pb-10px xs-pt-0"><?=__('width') ?> 63 | <?= __('depth')?>  19 | <?= __('height')?>80</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_five3">
                                <div class="row">
                                    <div class="col-md-6 last-paragraph-no-margin sm-mb-30px">
                                        <div class="fs-20 alt-font text-dark-gray mb-20px fw-600"><?= __('shipping_information')?></div>
                                        <p class="mb-0"><span class="fw-600 text-dark-gray"><?= __('normal_title')?></span>  <?= __('normal_content')?></p>
                                        <p><span class="fw-600 text-dark-gray"><?= __('target')?></span> <?= __('target_content')?></p>
                                        <p class="w-80 md-w-100"><?= __('alt_content')?></p>
                                    </div>
                                    <div class="col-md-6 last-paragraph-no-margin">
                                        <div class="fs-20 alt-font text-dark-gray mb-20px fw-600"><?= __('return_information')?></div> 
                                        <p class="w-80 md-w-100"><?= __('return_information_content')?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
       

        <?= $sections['page_footer']?>
  
        <?= $sections['cookies']?>
    
        <a id="button"></a>

<?= $sections['footer'] ?>