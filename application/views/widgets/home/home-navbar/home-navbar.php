  <!-- start header -->
  <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse header-demo glass-effect" data-header-hover="light">
                <div class="container-lg">   
                    <div class="col-auto me-auto ps-lg-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?= base_url('assets/images/zeybek-white-logo.png')?>" data-at2x="<?= base_url('assets/images/zeybek-white-logo.png')?>" alt="" class="default-logo">
                            <img src="<?= base_url('assets/images/zeybek-logo.png')?>" data-at2x="<?= base_url('assets/images/zeybek-logo.png')?>" alt="" class="alt-logo">
                            <img src="<?= base_url('assets/images/zeybek-logo.png')?>" data-at2x="<?= base_url('assets/images/zeybek-logo.png')?>" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav"> 
                            <ul class="navbar-nav"> 
                                <li class="nav-item">
                                    <a href="<?= lang_url(''); ?>" class="nav-link"><?= __('home'); ?></a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link"><?= __('products'); ?></a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" style="width: 280px;" aria-labelledby="navbarDropdownMenuLink3"> 
                                        <li class="dropdown">
                                            <a href="<?= lang_url('urunler/petra-yemek-odasi'); ?>">Petra <?= __('dining')?> <?= __('room')?></a> 
                                        </li>
                                        <li class="dropdown">
                                            <a href="<?= lang_url('urunler/lotus-yemek-odasi'); ?>">Lotus <?= __('dining')?> <?= __('room')?></a> 
                                        </li>
                                        <li class="dropdown">
                                            <a href="<?= lang_url('urunler/asya-yemek-odasi'); ?>">Asya <?= __('dining')?> <?= __('room')?></a> 
                                        </li>
                                        <li class="dropdown">
                                            <a href="<?= lang_url('urunler/enna-yemek-odasi'); ?>">Enna <?= __('dining')?> <?= __('room')?></a> 
                                        </li>
                                         <li class="dropdown">
                                            <a href="<?= lang_url('urunler/enna-plus-yemek-odasi'); ?>">Enna Plus <?= __('dining')?> <?= __('room')?></a> 
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="<?= lang_url('kurumsal'); ?>" class="nav-link"><?= __('corporate'); ?></a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4"> 
                                        <li class="dropdown">
                                            <a href="<?= lang_url('hakkimizda'); ?>"><?= __('about'); ?></a> 
                                        </li>
                                        <li class="dropdown">
                                            <a href="<?= lang_url('sikca-sorulan-sorular'); ?>"><?= __('faq'); ?></a> 
                                        </li>
                                        <li class="dropdown">
                                            <a href="<?= lang_url('iletisim'); ?>"><?= __('contact'); ?></a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="nav-item">
                                    <a href="<?= lang_url('iletisim'); ?>" class="nav-link"><?= __('contact'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto pe-lg-0">
                        <div class="header-icon"> 
                            <div class="header-search-icon icon ">
                                <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a> 
                                <div class="search-form-wrapper">
                                    <button title="Close" type="button" class="search-close alt-font">×</button>
                                    <form id="search-form" role="search" data-base-url="<?= base_url('search') ?>" class="search-form text-left d-flex flex-column justify-content-center align-items-center">
                                        <div class="search-form-box">
                                            <h2 class="text-dark-gray text-center mb-7 fw-600"><?= __('product_search')?></h2>
                                            <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="<?= __('search_placeholder')?>" name="s" value="" type="text" autocomplete="off">
                                            <button type="submit" class="search-button">
                                                <i class="feather icon-feather-search" aria-hidden="true"></i> 
                                            </button>
                                        </div>
                                        
                                    </form>

                                  

                                        
                                </div>
                            </div>
                            <div class="header-language-icon icon">
                                <div class="header-language dropdown">
                                    <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                                    <ul class="language-dropdown alt-font">
                                        <li><a href="<?= switch_lang_url('english'); ?>" title="English"><span class="icon-country"><img src="<?= base_url('assets/images/country-flag-16X16/usa.png')?>" alt=""></span>English</a></li> 
                                        <li><a href="<?= switch_lang_url('turkish'); ?>" title="Turkish"><span class="icon-country"><img src="<?= base_url('assets/images/country-flag-16X16/Turkey.png')?>" alt=""></span>Türkçe</a></li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div> 
            </nav>
        </header>
        <!-- end header -->