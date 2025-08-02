<?= $sections['header'] ?>

<?= $sections['navbar'] ?>
<!-- start page title -->
<section class="page-title-center-alignment cover-background top-space-padding" style="background-image: url(<?= base_url('assets/images/demo-decor-store-title-bg.jpg')?>)">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px">S.S.S</h1>
            </div>
            <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                <ul>
                    <li><a href="demo-decor-store.html">Anasayfa</a></li>
                    <li>S.S.S</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="position-relative">
    <div class="container">
        <div class="row">
            <!-- Tab Menu -->
            <div class="col-xl-3 col-lg-4 tab-style-07 md-mb-50px sm-mb-35px" data-anime='{ "translate": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="position-sticky top-50px">
                    <ul class="nav nav-tabs justify-content-center border-0 fw-500 text-left alt-font bg-very-light-gray border-radius-6px overflow-hidden">
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_seven1" class="nav-link active">
                                <span><span class="me-5px"><i class="bi bi-file-text"></i></span><span>Genel</span></span>
                                <span class="bg-hover bg-base-color"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_seven2" class="nav-link">
                                <span><span class="me-5px"><i class="bi bi-bag-plus"></i></span><span>Firmamız Hakkında</span></span>
                                <span class="bg-hover bg-base-color"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_seven3" class="nav-link">
                                <span><span class="me-5px"><i class="fa fa-phone"></i></span><span>İletişim Hakkında</span></span>
                                <span class="bg-hover bg-base-color"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_seven4" class="nav-link">
                                <span><span class="me-5px"><i class="bi bi-box"></i></span><span>Sevkiyat Hakkında</span></span>
                                <span class="bg-hover bg-base-color"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_seven6" class="nav-link">
                                <span><span class="me-5px"><i class="bi bi-info-circle"></i></span><span>Yardım ve Destek</span></span>
                                <span class="bg-hover bg-base-color"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab Content -->
            <div class="col-lg-8 offset-xl-1 lg-ps-50px md-ps-15px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="tab-content h-100">
                    <!-- TAB: GENEL -->
                    <div class="tab-pane fade in active show" id="tab_seven1">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-genel" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <!-- Soru 1 -->
                                    <div class="accordion-item active-accordion">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-genel-01" aria-expanded="true" data-bs-parent="#accordion-genel">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-minus"></i>
                                                    <span class="fw-500 fs-18">Sipariş verebilir miyim?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-genel-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-genel">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Zeybek Home üzerinden online sipariş verebilirsiniz.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 2 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-genel-02" aria-expanded="false" data-bs-parent="#accordion-genel">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Hangi ödeme yöntemleri kabul ediliyor?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-genel-02" class="accordion-collapse collapse" data-bs-parent="#accordion-genel">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Kredi kartı, havale ve kapıda ödeme seçenekleri sunmaktayız.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 3 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-light-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-genel-03" aria-expanded="false" data-bs-parent="#accordion-genel">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Siparişlerim ne kadar sürede teslim edilir?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-genel-03" class="accordion-collapse collapse" data-bs-parent="#accordion-genel">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Onaylandıktan sonra siparişleriniz ortalama 3-5 iş günü içerisinde teslim edilir.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 4 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-transparent">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-genel-04" aria-expanded="false" data-bs-parent="#accordion-genel">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Ürünler garanti kapsamında mı?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-genel-04" class="accordion-collapse collapse" data-bs-parent="#accordion-genel">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                                <p>Tüm ürünlerimiz belirli garanti süreleri ile satışa sunulmaktadır.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TAB: FİRMAMIZ HAKKINDA -->
                    <div class="tab-pane fade in h-100" id="tab_seven2">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-firma" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <!-- Soru 1 -->
                                    <div class="accordion-item active-accordion">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-firma-01" aria-expanded="true" data-bs-parent="#accordion-firma">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-minus"></i>
                                                    <span class="fw-500 fs-17">Zeybek Home'un kuruluş amacı nedir?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-firma-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-firma">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Kuruluşumuzdan bu yana kaliteli mobilya sunarak ev ve yaşam alanlarını güzelleştirmeyi hedefliyoruz.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 2 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-firma-02" aria-expanded="false" data-bs-parent="#accordion-firma">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Firmamızın öne çıkan özellikleri nelerdir?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-firma-02" class="accordion-collapse collapse" data-bs-parent="#accordion-firma">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Özgün tasarım, kaliteli işçilik ve müşteri memnuniyeti en büyük önceliklerimizdendir.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 3 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-light-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-firma-03" aria-expanded="false" data-bs-parent="#accordion-firma">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Zeybek Home'un vizyonu nedir?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-firma-03" class="accordion-collapse collapse" data-bs-parent="#accordion-firma">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Global pazarlarda lider konumda olup yenilikçi mobilya çözümleri üretmeyi amaçlıyoruz.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- TAB: İLETİŞİM HAKKINDA -->
                    <div class="tab-pane fade in h-100" id="tab_seven3">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-iletisim" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <!-- Soru 1 -->
                                    <div class="accordion-item active-accordion">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-iletisim-01" aria-expanded="true" data-bs-parent="#accordion-iletisim">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-minus"></i>
                                                    <span class="fw-500 fs-17">Nasıl iletişim kurabilirim?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-iletisim-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-iletisim">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Telefon, e-posta veya sosyal medya kanallarımız aracılığıyla bize ulaşabilirsiniz.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 2 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-iletisim-02" aria-expanded="false" data-bs-parent="#accordion-iletisim">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Müşteri hizmetleriniz hangi saatlerde aktif?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-iletisim-02" class="accordion-collapse collapse" data-bs-parent="#accordion-iletisim">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Hafta içi 09:00-18:00 arasında hizmet vermekteyiz.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 3 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-light-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-iletisim-03" aria-expanded="false" data-bs-parent="#accordion-iletisim">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">İade ve şikayet süreçleri nasıldır?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-iletisim-03" class="accordion-collapse collapse" data-bs-parent="#accordion-iletisim">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Hızlı ve etkili çözümler sunabilmek için detaylı bilgiyi müşteri hizmetlerimizden alabilirsiniz.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- TAB: SEVKİYAT HAKKINDA -->
                    <div class="tab-pane fade in h-100" id="tab_seven4">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-sevkiyat" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <!-- Soru 1 -->
                                    <div class="accordion-item active-accordion">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-sevkiyat-01" aria-expanded="true" data-bs-parent="#accordion-sevkiyat">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-minus"></i>
                                                    <span class="fw-500 fs-17">Sevkiyat hizmetiniz nasıl işliyor?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-sevkiyat-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-sevkiyat">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Siparişiniz onaylandıktan sonra, güvenilir kargo firmalarıyla adresinize teslim edilmektedir.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 2 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-sevkiyat-02" aria-expanded="false" data-bs-parent="#accordion-sevkiyat">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Kargo ücreti nasıl belirleniyor?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-sevkiyat-02" class="accordion-collapse collapse" data-bs-parent="#accordion-sevkiyat">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Ürün tutarına ve teslimat bölgesine göre değişiklik göstermektedir.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 3 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-light-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-sevkiyat-03" aria-expanded="false" data-bs-parent="#accordion-sevkiyat">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Teslimat süresi ne kadar?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-sevkiyat-03" class="accordion-collapse collapse" data-bs-parent="#accordion-sevkiyat">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Bölgelerinize göre ortalama 3-5 iş günü içerisinde teslim edilmektedir.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- TAB: YARDIM VE DESTEK -->
                    <div class="tab-pane fade in h-100" id="tab_seven6">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-destek" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <!-- Soru 1 -->
                                    <div class="accordion-item active-accordion">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-destek-01" aria-expanded="true" data-bs-parent="#accordion-destek">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-minus"></i>
                                                    <span class="fw-500 fs-17">Sipariş sürecinde destek alabilir miyim?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-destek-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-destek">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Canlı destek ve müşteri hizmetlerimizle her aşamada yanınızdayız.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 2 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-destek-02" aria-expanded="false" data-bs-parent="#accordion-destek">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">S.S.S bölümüne nasıl ulaşabilirim?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-destek-02" class="accordion-collapse collapse" data-bs-parent="#accordion-destek">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Sitemizde yer alan S.S.S bölümünden detaylı bilgi alabilirsiniz.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Soru 3 -->
                                    <div class="accordion-item">
                                        <div class="accordion-header border-bottom border-color-light-medium-gray">
                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-destek-03" aria-expanded="false" data-bs-parent="#accordion-destek">
                                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                    <i class="feather icon-feather-plus"></i>
                                                    <span class="fw-500 fs-17">Teknik destek için nereye başvurmalıyım?</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-destek-03" class="accordion-collapse collapse" data-bs-parent="#accordion-destek">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p>Uzman teknik ekibimiz, her türlü sorununuza en kısa sürede çözüm sunmaktadır.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<?= $sections['page_footer'] ?>
<!-- start cookie message -->
<?= $sections['cookies'] ?>
<!-- end cookie message -->
<!-- start scroll progress -->
<a id="button"></a>
<?= $sections['footer'] ?>
