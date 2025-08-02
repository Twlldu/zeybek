<?= $sections['header']?>

      <?= $sections['navbar'] ?>
        <!-- start page title -->
        <section class="page-title-center-alignment cover-background top-space-padding" style="background-image: url(<?= base_url('assets/images/demo-decor-store-title-bg.jpg')?>)">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px"><?= __('about')?></h1>
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                        <ul>
                            <li><a href="<?= lang_url('/')?>"><?= __('home')?></a></li> 
                            <li><?= __('about')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title --> 
        <!-- start section -->
        <section class="pb-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row mb-4 align-items-center text-center text-sm-start">
                    <div class="col-lg-6 col-md-7 col-sm-8" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="text-uppercase fs-13 ls-2px fw-600 mb-5px d-block">Zeybek Home</span>
                        <h3 class="text-dark-gray alt-font fw-700 mb-0"><?= __('about_title');?></h3>
                    </div>
                    <div class="col-lg-6 md-mt-30px last-paragraph-no-margin" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <p><?= __('about_content')?></p>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0">
            <div class="container">
                <div class="row row-cols-auto row-cols-xl-4 row-cols-sm-2 lg-ps-10 lg-pe-10 md-ps-7 md-pe-7 sm-ps-0 sm-pe-0 position-relative mb-6 md-mb-8 lg-mt-20px" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col align-self-start xs-mb-30px">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">01</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                                <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px"><?= __('about_mission_title')?></span>
                                <p> <?= __('about_mission_content')?></p>
                                <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col align-self-end mt-30px lg-mt-0">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">02</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                                <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px"><?= __('about_vision_title')?></span>
                                <p><?= __('about_vision_content')?></p>
                                <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col align-self-start lg-mt-30px">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">03</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                                <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px"><?= __('about_our_values_title')?></span>
                                    <p><?= __('about_our_values_content')?></p>
                                <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col align-self-end lg-mt-30px">
                        <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                            <div class="feature-box-icon position-absolute left-0px top-0px">
                                <h1 class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">04</h1>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                                <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px"><?= __('about_our_goals_title')?></span>
                                <p><?= __('about_our_goals_content')?></p>
                                <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>

        <?= $sections['page_footer']?>
  
        <?= $sections['cookies']?>
    
        <a id="button"></a>

<?= $sections['footer']?>