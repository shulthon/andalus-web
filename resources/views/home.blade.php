@php

$sitename = get_setting_value('_site_name');
$sitecomp = get_setting_value('_site_company');
$mail = get_setting_value('_mail');
$location = get_setting_value('_location');
$phone = get_setting_value('_phone');
$homeleft = get_section_data('HOME Left');

$homeright = get_section_data('HOME Right');
$homenormal = get_section_data('HOME Normal');

@endphp

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <title>{{ $sitename }} | {{ $sitecomp }}</title>
    <style>

      .row{
        /* margin-right:calc(-.5* var(--bs-gutter-x)); */
        /* margin-left:calc(-.5* var(--bs-gutter-x)); */
        margin-right:0 !important;
        margin-left:0 !important;
      }
    .masthead {
  background-color: #d9d9d9;
  padding-top: 15.5rem;
  padding-bottom: 6rem;
}
.masthead .masthead-device-mockup {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}
.masthead .masthead-device-mockup .circle {
  position: absolute;
  fill: url(#circleGradient);
  width: 70%;
  display: none;
}
.masthead .masthead-device-mockup .circle .gradient-start-color {
  stop-color: #2937f0;
}
.masthead .masthead-device-mockup .circle .gradient-end-color {
  stop-color: #9f1ae2;
}
.masthead .masthead-device-mockup .shape-1 {
  position: absolute;
  height: 1rem;
  width: 1rem;
  transform: rotate(-10deg);
  fill: #2937f0;
  bottom: 15%;
  left: 10%;
}
.masthead .masthead-device-mockup .shape-2 {
  position: absolute;
  height: 0.75rem;
  width: 0.75rem;
  fill: #2937f0;
  top: 15%;
  right: 10%;
}
.masthead .masthead-device-mockup .device-wrapper {
  max-width: 10rem;
}

#mainNav {
  padding-top: 0.1rem;
  padding-bottom: 0.1rem;
  background-color: #fff;
}
#mainNav .navbar-brand {
  font-family: "Kanit", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
#mainNav .navbar-brand:hover, #mainNav .navbar-brand:active {
  color: #2937f0;
}
#mainNav .navbar-toggler {
  font-size: 0.875rem;
  padding: 0.75rem 1rem;
  color: #212529;
}
#mainNav .navbar-nav .nav-item .nav-link {
  color: #212529;
}
#mainNav .navbar-nav .nav-item .nav-link:hover {
  color: #6c757d;
}
#mainNav .navbar-nav .nav-item .nav-link.active {
  color: #2937f0;
}

.bg-section-left{
  background-color: blue;
  float:left;
  width:50%:
}

.bg-section-right{
  background-color: blue;
  float:right;
  width:50%:
}

.bg-sec-left{
  /* min-height:790px; */
  background:url('data:image/svg+xml,<svg width="830" height="790" viewBox="0 0 830 790" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M46 0H644.557L830 790H46V0Z" fill="%2367C4CF"/><path d="M0 0H598.557L784 790H0V0Z" fill="%231C9BAB"/></svg>');
  background-repeat: no-repeat;
  background-position:left;
  background-size: 59.4%;
  color:white !important;
  height:790;
}

.bg-sec-right{
  /* min-height:790px; */
  background:url('data:image/svg+xml,<svg width="852" height="790" viewBox="0 0 852 790" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M830 0H196.323L0 790H830V0Z" fill="%2367C4CF"/><path d="M878 0H244.323L48 790H878V0Z" fill="%231C9BAB"/></svg>');
  background-repeat: no-repeat;
  background-position:right;
  background-size: 59.4%;
  color:white !important;
  height:790;
}

.baris{
  /* background: black; */
}

.baris:after {
  content: "";
  display: table;
  clear: both;
}

.kolom {
  /* background: green; */
  float: left;
  width: 50%;
  /* padding-left: 10px; */
  padding-right: 30px;
  border-right: 1px solid black;
}

/* .kolom:first-child{
  padding-left: 0px;
  padding-right: 10px;
  border-right: none;
}*/

.kolom:last-child {
  padding-right: 0px;
  padding-left: 30px;
  border-right: none;
}

@media screen and (max-width: 600px) {
  .kolom {
    width: 100%;
  padding: 0px;
    border: none;
  }
  .kolom:last-child{
    padding: 0px;
  }
}

.bg-andalus {
  --bs-bg-opacity: 1;
  background-color: rgba(28, 155, 171,1) !important;
}

.mastsec {
  padding-top: 7%;
  padding-bottom:7%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

@media (max-width: 991.98px) {
  .bg-sec-right{
    background:white;
    color:black !important;
  }
  .bg-sec-left{
    background:white;
    color:black !important;
  }
  .order-lg-0{

  }
  .order-lg-1{

  }

}

.shape-one {
  
  /* -webkit-shape-outside: polygon(100% 100%, 0 100%, 0 0); */
  clip-path: polygon(100% 0, 100% 100%, 0 100%);
  padding-right:300px;
  shape-outside: polygon(100% 0, 100% 100%, 0 100%);
  /* shape-outside: polygon(0 0, 27% 0, 28% 19%, 24% 38%, 28% 62%, 0 99%); */
  /* background-color: rgba(221, 221, 221, 0.378); */
  /* clip-path: inset(0 0 10px 0); */
  /* background-color: red; */
  width: 15vw;
  height: 30vw;
  float: right;
}
    </style>
  </head>
  <body id="page-top">
        <!-- Navigation-->
        @include('nav')
    <!-- <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo-square.png') }}" alt="Andalus Logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Media & Partner</a>
            </li>
          </ul>
        </div>
        <form class="d-flex">
          <button class="btn btn-outline-primary me-2 d-flex" type="button">Contact Us</button>
        </form>
      </div>
    </nav> -->
  <!-- ======= Header =======   
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container align-items-center justify-content-between">









    </div>
  </header> End Header

  <div class="container">

      <div style="height:820px;background:#d9d9d9">
        
      </div>


  </div> -->
        <header class="masthead">
            <div class="container px-2">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            {{-- <h1 class="display-1 lh-1 mb-3">Showcase your app beautifully.</h1>
                            <p class="lead fw-normal text-muted mb-5">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p> --}}
                            <!-- <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->

                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <!-- <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"An intuitive solution to a common problem that we all face, wrapped up in a single app!"</div>
                        <img src="assets/img/tnw-logo.svg" alt="..." style="height: 3rem" />
                    </div>
                </div>
            </div>
        </aside> -->
        <!-- Basic features section-->

        @if ($homeleft)

        
        <section class="mastsec bg-sec-left">
            <div class="container px-2">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <!-- <div class="shape-one"></div>
                  <p>Lollipop lollipop powder cookie chocolate bar macaroon topping
        gingerbread sweet. Tiramisu tootsie roll toffee candy canes cake. Cookie
        fruitcake dessert gummies cake bear claw lemon drops gummies. Jelly-o
        muffin cupcake candy icing toffee jelly. Apple pie lollipop cake pastry
        pie jelly-o. Bonbon powder gingerbread dessert dragée tiramisu. Candy
        canes lemon drops sweet roll brownie muffin bear claw macaroon cake
        jujubes. Pudding lollipop bonbon macaroon cupcake. Jujubes bonbon
        croissant jujubes chupa chups. Gummies donut cake sweet apple pie
        tiramisu sweet powder. Pudding soufflé bonbon muffin oat cake chocolate
        cake croissant. Soufflé lollipop topping pie jelly beans biscuit toffee.
        Lollipop shortbread shortbread topping tootsie roll jujubes cake bear
        claw icing. Carrot cake cake oat cake cookie sesame snaps.</p> -->


                    <div class="col-12 col-lg-5 order-lg-0">
                        <!-- <div class="shape-one"></div> -->
                        <h2 class="display-4 lh-1 mb-4">{{ $homeleft->title }}</h2>
                        <p class="fw-normal mb-5 mb-lg-0">{!! $homeleft->content !!}</p>
                    </div>
                    <div class="col-sm-8 col-md-5 order-lg-1">
                        <div class="px-5 px-sm-0"><img class="img-fluid" src="{{ Storage::url($homeleft->thumbnail) }}" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>

        @endif

        @if ($homeright)
        <section class="mastsec bg-sec-right text-lg-end">
            <div class="container px-2">

                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">

                    <div class="col-12 col-lg-5 order-lg-1">
                        {{-- <h2 class="display-6 lh-1 mb-4">Visi</h2>
                        <p class="lead fw-semibold mb-5 mb-lg-0">Menjadi pusat teknologi yang unggul dalam berbagai bidang dengan mengharapkan rahmat dan ridho Allah ﷻ</p>
                        <br/>
                        <br/>
                        <h2 class="display-6 lh-1 mb-4">Misi</h2>
                        <p class="fw-normal mb-5 mb-lg-0">Mengembangkan perusahaan guna mewujudkan penggunaan teknologi sesuai dengan nilai nilai al quran dan hadist; Meniadakan transaksi yang mengandung Riba, Gharar dan Maysir di dalamnya; Memberikan solusi yang efektif kepada pelanggan dalam mengatasi berbagai permasalahan pada bidang teknologi.</p> --}}
                        {!! $homeright->content !!}
                      </div>
                    <div class="col-sm-8 col-md-5 order-lg-0">
                        <div class="px-5 px-sm-0"><img class="img-fluid" src="{{ Storage::url($homeright->thumbnail) }}" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if($homenormal)
        <section class="mastsec">
            <div class="container px-2">

                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <h2 style="margin-bottom:50px; font-size:50px;font-family:Keania One">{{ $homenormal->title }}</h2>

                {!! $homenormal->content !!}

                </div>
            </div>
        </section>
        @endif
        
        <!-- Call to action section-->
        <!-- <section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Stop waiting.
                        <br />
                        Start building.
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
                </div>
            </div>
        </section> -->
        <!-- App badge section-->
        <!-- <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                </div>
            </div>
        </section> -->
        <!-- Footer-->
        @include('foot')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>