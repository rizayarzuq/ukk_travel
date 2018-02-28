<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
<head>
  <!-- Site Title-->
  <title>Yara Book | Website booking terbaik</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
  <link rel="stylesheet" href="assets/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <div>
        <header class="page-header">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap bg-gray-dark">
            <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" class="rd-navbar">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="" class="reveal-inline-block brand-name"><img src="assets/images/logo-white.png" width="166" height="55" alt="" class="img-responsive center-block"></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href=<?php echo base_url();?>>Beranda</a></li>
                    <li><a href=<?php echo base_url("about");?>>Tentang</a>
                      <li><a href=<?php echo base_url("contact");?>>Kontak</a></li>
                      <li><a href=<?php echo base_url("login");?>>Masuk</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </header>
          <!-- Swiper-->
          <div class="swiper-slide-wrapper">
            <div data-simulate-touch="false" data-autoplay="3500" data-slide-effect="fade" class="swiper-container swiper-slider">
              <div class="swiper-wrapper">
                <div data-slide-bg="assets/images/background-06.jpg" class="swiper-slide"></div>
                <div data-slide-bg="assets/images/background-08.jpg" class="swiper-slide"></div>
              </div>
            </div>
            <div class="swiper-onSlider">
              <div class="shell shell-wide section-70 section-xl-top-200 section-xl-bottom-220">
                <div class="range range-xs-center">
                  <div class="cell-xl-6 cell-lg-9 cell-md-11">
                    <div data-type="horizontal" class="responsive-tabs text-md-left nav-custom-dark view-animate fadeInUpSmall">
                      <!-- Responsive-tabs-->
                      <ul class="nav-custom-tabs resp-tabs-list">
                        <li class="nav-item"><span class="icon mdi mdi-airplane"></span><span>Pesawat</span></li>
                        <!--li class="nav-item"><span class="icon mdi mdi-hotel"></span><span>Hotels</span></li-->
                        <!--li class="nav-item"><span class="icon mdi mdi-car"></span><span>Car Hire</span></li-->
                      </ul>
                      <div class="resp-tabs-container nav-custom-tab nav-custom-wide">
                        <div>
                          <form method="post" action="<?php echo base_url('crud/tambah_aksi'); ?>" class="small">
                            <div class="range">
                              <div class="cell-md-8">
                                <!--div class="form-group radio-inline-wrapper"-->
                                  <!--label class="radio-inline"-->
                                    <!--input name="input-group-radio" value="radio-1" type="radio" checked>Round Trip
                                  </label-->
                                  <!--label class="radio-inline">
                                    <input name="input-group-radio" value="radio-2" type="radio">One Way
                                  </label-->
                                  <!--label class="radio-inline">
                                    <input name="input-group-radio" value="radio-3" type="radio">Multi-city
                                  </label-->
                                <!--/div-->
                              </div>
                              <div class="offset-top-6 offset-md-top-0 cell-md-4 text-md-right">
                                <div class="form-group">
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">Dari</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" name="rute_from" class="form-control select-filter">
                                      <option value="Jakarta">Jakarta (JKT)</option>
                                      <option value="Bandung">Bandung (BDG)</option>
                                      <option value="Yogyakarta">Yogyakarta (YGY)</option>
                                      <option value="Semarang">Semarang (SMG)</option>
                                      <option value="Bali">Bali (BLI)</option>
                                      <option value="Medan">Medan (MDN)</option>
                                      <option value="Aceh">Aceh (NAD)</option>
                                      <option value="Makassar">Makassar (MKS)</option>
                                    </select>
                                  </div>

                                </div>
                                <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Ke</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" name="rute_to" class="form-control select-filter">
                                      <option value="Bali">Bali (BLI)</option>
                                      <option value="Bandung">Bandung (BDG)</option>
                                      <option value="Yogyakarta">Yogyakarta (YGY)</option>
                                      <option value="Semarang">Semarang (SMG)</option>
                                      <option value="Jakarta">Jakarta (JKT)</option>
                                      <option value="Medan">Medan (MDN)</option>
                                      <option value="Aceh">Aceh (NAD)</option>
                                      <option value="Makassar">Makassar (MKS)</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="cell-md-1-5 offset-top-10 offset-md-top-0">
                                  <div class="form-group">

                                  </div>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">Tanggal</label>
                                    <input type="text" data-time-picker="date" name="date" data-constraints="@Required" name="departure" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-sm-6 cell-lg-4 offset-top-15 offset-sm-top-0">
                                  <div class="range">
                                    <div class="cell-xs-6">
                                      <div class="form-group">
                                        <label class="form-group-label">Dewasa</label>
                                        <input type="number" name="adult" min="0" value="1" class="form-control">
                                      </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-15 offset-xs-top-0">
                                      <div class="form-group">
                                        <label class="form-group-label">Anak-Anak</label>
                                        <input type="number" name="child" min="0" value="0" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="cell-lg-clear-flex cell-sm-bottom cell-lg text-center text-lg-right offset-top-15 offset-lg-top-0">
                                <input type="submit" class="btn btn-primary btn-sm btn-naira btn-naira-up" value="KIRIM">
                                <!--  <button class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-search"></span><span>Search Flight</span></button> -->
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Content-->
        <main class="page-content">
          <section class="section-60 section-lg-top-90 section-lg-bottom-80 bg-gray-lighter">
            <div class="shell shell-wide">
              <div data-wow-delay="0.1s" class="wow fadeInUp">
                <!-- Owl Carousel-->
                <div data-dots="true" data-nav="true" data-items="3" data-xs-items="4" data-sm-items="5" data-md-items="5" data-lg-items="6" data-margin="30" data-mouse-drag="false" class="owl-nav-variant-3 owl-dots-lg owl-carousel owl-carousel-middle owl-dots-primary"><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-14.png" width="107" height="74" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-15.png" width="190" height="17" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-16.png" width="151" height="71" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-17.png" width="163" height="46" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-18.png" width="183" height="68" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-19.png" width="178" height="53" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-14.png" width="107" height="74" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-15.png" width="190" height="17" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-16.png" width="151" height="71" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-17.png" width="163" height="46" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-18.png" width="183" height="68" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-19.png" width="178" height="53" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-15.png" width="190" height="17" alt="" class="img-responsive"></a></div>
              </div>
            </div>
          </section>
          <section class="section-80 section-md-120">
            <div class="shell shell-wide">
              <h5 class="view-animate fadeInUpBigger delay-04 text-info-dr"></h5>
              <h2 class="view-animate fadeInUpBigger delay-04 offset-top-20 text-ubold">Kelebihan dari Website kita</h2>
              <hr class="view-animate fadeInUpBigger delay-06 divider divider-primary divider-80">
              <div class="range offset-md-top-90 offset-top-50">
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-airplane"></span>
                  <h5 class="text-bold offset-top-30">Penerbangan terbaik yang<br class="veil reveal-md-block">akan anda rasakan</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">Kami memilih maskapai penerbangan dengan pelayanan terbaik.</p>
                </div>
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-account-multiple"></span>
                  <h5 class="text-bold offset-top-30">Menjadi Website yang<br class="veil reveal-md-block">paling sering dikunjungi</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">Menjadi Website yang paling sering dikunjungi untuk booking tiket pesawat.</p>
                </div>
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle fa-search"></span>
                  <h5 class="text-bold offset-top-30">Mencari penerbangan anda<br class="veil reveal-md-block">dengan mudah</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">Memudahkan anda dalam mencari penerbangan yang anda idamkan.</p>
                </div>
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span style="font-size: 52px;" class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-calendar-multiple-check"></span>
                  <h5 class="text-bold offset-top-30">Lebih mudah dan lebih cepat<br class="veil reveal-md-block">untuk booking tiket</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">Memudahkan para traveler dalam proses booking.</p>
                </div>
              </div>
            </div>
          </section>
          <section class="bg-image-05 context-dark section-70 section-lg-120">
            <div class="shell parallax-scene-wrapper">
              <div class="offset-top-0 range range-xs-center">
                <div data-wow-delay="0.1s" class="cell-lg-6 cell-md-8 wow fadeInUp">
                  <h1 class="text-spacing-60 text-uppercase text-ubold p">Sistem Online 24 Jam</h1>
                  <p class="offset-top-20 offset-md-top-30 big">Website yang selalu online untuk memanjakan anda dalam proses booking tiket pesawat.</p><a href="" class="offset-top-30 btn btn-primary">Pesan sekarang</a>
                </div>
              </div>
            </div>
          </section>
         
          <section class="section-top-80 section-md-top-120">
            <div class="shell shell-wide">
              <h5 class="text-info-dr"></h5>
              <h2 class="offset-top-20 text-ubold">Destinasi Wisata Populer</h2>
              <hr class="divider divider-primary divider-80">
            </div>
          </section>
          <div class="row offset-top-50 offset-lg-top-90 isotope-wrap">
            <!-- Isotope Filters-->
            <div class="col-lg-12">
              <div class="isotope-filters isotope-filters-horizontal">
                <ul class="nav-custom">
                  <li><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="active">Indonesia</a></li>
                  <li><a data-isotope-filter="Type 1" data-isotope-group="gallery" href="#">Jakarta</a></li>
                  <li><a data-isotope-filter="Type 2" data-isotope-group="gallery" href="#">Bali</a></li>
                  <li><a data-isotope-filter="Type 3" data-isotope-group="gallery" href="#">Bandung</a></li>
                  <li><a data-isotope-filter="Type 4" data-isotope-group="gallery" href="#">Yogyakarta</a></li>
                </ul>
              </div>
            </div>
            <!-- Isotope Content-->
            <div class="col-lg-12 offset-top-60">
              <div data-isotope-layout="masonry" data-isotope-group="gallery" class="row row-no-gutter isotope isotope-no-padding">
                <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-35.jpg" alt="" class="img-responsive center-block thumbnail-image">
                  <div class="caption">
                    <h3 class="text-ubold">Monumen Nasional</h3>
                    <p>Wisata sejarah yang wajib anda kunjungi di Jakarta.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
                  <div data-filter="Type 2" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-36.jpg" alt="" class="img-responsive center-block thumbnail-image">
                    <div class="caption">
                      <h3 class="text-ubold">Bedugul</h3>
                      <p>Kawasan wisata dengan danau dan gunung.</p>
                      <div class="thumbnail-link"></div>
                    </div></a></div>
                    <div data-filter="Type 3" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-37.jpg" alt="" class="img-responsive center-block thumbnail-image">
                      <div class="caption">
                        <h3 class="text-ubold">Gedung sate</h3>
                        <p>Salah satudestinasi wisata iconic dari Bandung.</p>
                        <div class="thumbnail-link"></div>
                      </div></a></div>
                      <div data-filter="Type 4" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-38.jpg" alt="" class="img-responsive center-block thumbnail-image">
                        <div class="caption">
                          <h3 class="text-ubold">Mallioboro</h3>
                          <p>Kawasan pasar yang sangat terkenal dengan rasa.</p>
                          <div class="thumbnail-link"></div>
                        </div></a></div>
                        <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-39.jpg" alt="" class="img-responsive center-block thumbnail-image">
                          <div class="caption">
                            <h3 class="text-ubold">Taman Mini <br>Indonesia Indah</h3>
                            <p>Taman yang memamerkan keindahan di Indonesia.</p>
                            <div class="thumbnail-link"></div>
                          </div></a></div>
                          <div data-filter="Type 3" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-40.jpg" alt="" class="img-responsive center-block thumbnail-image">
                            <div class="caption">
                              <h3 class="text-ubold">Tangkuban Perahu</h3>
                              <p>Daerah wisata yang terkenal dengan keindahan dan legenda nya.</p>
                              <div class="thumbnail-link"></div>
                            </div></a></div>
                            <div data-filter="Type 4" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-42.jpg" alt="" class="img-responsive center-block thumbnail-image">
                              <div class="caption">
                                <h3 class="text-ubold">Pantai Parangtritis</h3>
                                <p>Jogja juga terkenal dengan pantainya yang indah.</p>
                                <div class="thumbnail-link"></div>
                              </div></a></div>
                              <div data-filter="Type 2" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-43.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                <div class="caption">
                                  <h3 class="text-ubold">Pantai Kuta</h3>
                                  <p>Pantai yang sangat terkenal di Mancanegara.</p>
                                  <div class="thumbnail-link"></div>
                                </div></a></div>
                                <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-41.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                  <div class="caption">
                                    <h3 class="text-ubold">Museum Fatahillah</h3>
                                    <p>Pameran tentang sejarah Kota Jakarta.</p>
                                    <div class="thumbnail-link"></div>
                                  </div></a></div>
                                  <div data-filter="Type 4" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-44.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                    <div class="caption">
                                      <h3 class="text-ubold">Tugu Jogja</h3>
                                      <p>Tugu yang sangat iconic di Jogja.</p>
                                      <div class="thumbnail-link"></div>
                                    </div></a></div>
                                    <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-45.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                      <div class="caption">
                                           <h3 class="text-ubold">Monumen Nasional</h3>
                                        <p>Tempat bersejarah yang sangat dikenal.</p>
                                        <div class="thumbnail-link"></div>
                                      </div></a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="section-bottom-80 section-md-bottom-120">
                                  <div class="offset-top-50 offset-lg-top-90"><a href="tickets.html" class="btn btn-primary btn-naira btn-naira-up">
                                    <div class="icon fa-search"></div><span>Booking sekarang juga</span></a></div>
                                  </div>
                                </main>
                                <!-- Page Footer-->
                                <footer class="page-footer">
                                  <div class="shell shell-wide text-sm-left">
                                    <div class="range section-60 section-md-90">
                                      <div class="cell-sm-6 cell-lg-3"><a href="./" class="reveal-inline-block"><img src="assets/images/logo-white.png" width="166" height="55" alt="" class="img-responsive center-block"></a>
                                        <p class="offset-top-24">SkyBooking adalah Website booking perjalanan yang secara instan mencari semua penerbangan yang tersedia dengan jumlah perjalanan yang lengkap seperti agen perjalanan online, maskapai penerbangan besar dan murah. Anda dapat dengan mudah mempersempit pencarian Anda sebanyak yang Anda inginkan. Itu berarti bahwa jika perjalanan yang Anda inginkan ada di mana pun di luar sana, Anda akan menemukannya dengan segera.</p>
                                      </div>
                                      <div class="cell-sm-6 cell-lg-3">
                                        <h5 class="text-bold">Berita Terdahulu</h5>
                                        <hr class="divider divider-50 divider-info divider-sm-left">
                                        <div class="offset-top-40">
                                          <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                                            <div class="unit-left"><img src="assets/images/footer-01.jpg" width="100" height="10" alt="" class="img-responsive center-block"></div>
                                            <div class="unit-body"><span class="extra-small">21 Februari 2018</span>
                                              <p class="offset-top-6 offset-sm-top-10 text-bold"><a href="blog-single-post.html">Gimana sih caranya jalan-jalan biar murah</a></p>
                                            </div>
                                          </div>
                                          <div class="offset-top-30 unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                                            <div class="unit-left"><img src="assets/images/footer-02.jpg" width="100" height="10" alt="" class="img-responsive center-block"></div>
                                            <div class="unit-body"><span class="extra-small">15 Februari 2018</span>
                                              <p class="offset-top-6 offset-sm-top-10 text-bold"><a href="blog-single-post.html">5 hal yang harus di bawa saat Traveller</a></p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="cell-sm-6 cell-lg-3 offset-top-40 offset-lg-top-0">
                                        <div class="inset-xl-left-50">
                                          <h5 class="text-bold">Testimoni Pengguna</h5>
                                          <hr class="divider divider-50 divider-info divider-sm-left">
                                          <!-- Owl Carousel-->
                                          <div data-dots="true" data-items="1" data-margin="30" data-mouse-drag="false" class="offset-top-20 offset-md-top-40 owl-dots-left owl-dots-white owl-carousel">
                                            <blockquote class="quote quote-sm">
                                              <p>
                                                <q>“Karya anak bangsa yang patut dikembangkan dan di banggakan.”</q>
                                              </p>
                                              <p>
                                                <cite>Ir.Joko Widodo</cite>
                                              </p>
                                            </blockquote>
                                            <blockquote class="quote quote-sm">
                                              <p>
                                                <q>“Saya pikir website ini sangatlah membantu bagi para traveller.”</q>
                                              </p>
                                              <p>
                                                <cite>Reza Rahardian</cite>
                                              </p>
                                            </blockquote>
                                            <blockquote class="quote quote-sm">
                                              <p>
                                                <q>“Website yang sangat mengagumkan bagi saya karena saya dapat mudah booking tiket dengan cepat dan murah meriah”</q>
                                              </p>
                                              <p>
                                                <cite>Anies Baswedan</cite>
                                              </p>
                                            </blockquote>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="cell-sm-6 cell-lg-3 offset-top-40 offset-lg-top-0">
                                        <div class="inset-xl-left-50">
                                          <h5 class="text-bold">Kontak Kami</h5>
                                          <hr class="divider divider-50 divider-info divider-sm-left">
                                          <!-- RD Mailform-->
                                          <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="offset-top-40 rd-mailform text-sm-left">
                                            <div class="form-group form-group-sm">
                                              <label for="footer-name" class="text-gray-light form-label">Nama</label>
                                              <input id="footer-name" type="text" name="name" data-constraints="@Required" class="form-control form-control-dark">
                                            </div>
                                            <div class="form-group form-group-sm">
                                              <label for="footer-email" class="text-gray-light form-label">E-mail</label>
                                              <input id="footer-email" type="email" name="email" data-constraints="@Email @Required" class="form-control form-control-dark">
                                            </div>
                                            <div class="form-group form-group-sm">
                                              <label for="footer-message" class="text-gray-light form-label">Kritik dan Saran</label>
                                              <textarea id="footer-message" style="height: 90px;" name="message" data-constraints="@Required" class="form-control form-control-dark"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-xs btn-naira btn-naira-up"><span class="icon fa-envelope-o"></span><span>Kirim</span></button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                  <div class="shell shell-wide page-footer-min small">
                                    <div class="range range-xs-middle">
                                      <div class="cell-sm-6 text-sm-left">
                                        <ul class="list-inline">
                                          <li><a href="#" class="icon fa-facebook"></a></li>
                                          <li><a href="#" class="icon fa-twitter"></a></li>
                                          <li><a href="#" class="icon fa-pinterest-p"></a></li>
                                          <li><a href="#" class="icon fa-vimeo"></a></li>
                                          <li><a href="#" class="icon fa-google-plus"></a></li>
                                          <li><a href="#" class="icon fa-rss"></a></li>
                                        </ul>
                                      </div>
                                      <div class="cell-sm-6 text-sm-right offset-top-20 offset-sm-top-0">
                                        <p>&#169; <span id="copyright-year"></span> All rights reserved. <a href="privacy.html">Made With Love</a>
                                          <!-- {%FOOTER_LINK}-->
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </footer>
                              </div>

                              <!-- Java script-->
                              <script src="assets/js/core.min.js"></script>
                              <script src="assets/js/script.js"></script>

                              </html>