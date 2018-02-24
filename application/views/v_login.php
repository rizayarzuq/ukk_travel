<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>Masuk/Daftar</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="http//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="assets/js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
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
                <div class="rd-navbar-brand"><a href="index.html" class="reveal-inline-block brand-name"><img src="<?php echo base_url() ?>assets/images/logo-white.png" width="166" height="55" alt="" class="img-responsive center-block"></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li><a href=<?php echo base_url();?>>BERANDA</a></li>
                  <li><a href=<?php echo base_url("#");?>>TENTANG</a>
                  <li><a href=<?php echo base_url("#");?>>KONTAK</a></li>
                  <li class="active"><a href=<?php echo base_url("login");?>>MASUK</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Page Content-->
      <main class="page-content">
              <section class="bg-image-06">
                <div class="breadcrumb-wrapper">
                  <div class="shell context-dark section-30 section-lg-top-120">
 
                    <h1 class="offset-top-20 text-ubold">Masuk/Daftar</h1>
                    <ol class="breadcrumb">
                      <!--li><a href="./">Home</a></li>
                      <li><a href="#">Pages</a></li>
                      <li>Login/Register
                      </li-->
                    </ol>
                  </div>
                </div>
              </section>
        <section class="section-80 section-md-120">
          <div class="shell">
            <ul class="nav-custom">
              <li><a href="login.html" class="active">Masuk</a></li>
              <li><a href=<?php echo base_url("home/register");?>>Daftar</a></li>
            </ul>
            <div class="range range-xs-center">
              <div class="cell-sm-8 cell-md-6 cell-lg-4">
                <!-- RD Mailform-->
                <form data-form-output="form-output-global" method="post" action="<?php echo base_url('login/aksi_login'); ?>"  class="text-left">
                  <div class="form-group">
                    <label for="login" class="form-label form-label-outside">Nama Lengkap</label>
                    <input id="login" type="text" name="username"  class="form-control form-control-gray">
                  </div>
                  <div class="form-group">
                    <label for="password" class="form-label form-label-outside">Password</label>
                    <input id="password" type="password" name="password" class="form-control form-control-gray">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-sm offset-top-22">Masuk</button>
                </form>
              </div>
            </div>
          </div>
        </section>
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