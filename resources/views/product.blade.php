@php

$sitename = get_setting_value('_site_name');
$sitecomp = get_setting_value('_site_company');
$applist = get_section_arr('PRODUCT App'); //'HOME Left','HOME Right','HOME Normal','SERVICE Left','SERVICE Right','SERVICE Left Background','Service','PRODUCT App','PRODUCT Normal','MEDIA PARTNER','MEDIA PARTNER Footer','CONTACT'
$prodlist = get_section_arr('PRODUCT Normal');

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
    <title>Our Product - {{ $sitename }}</title>
    <style>

      .row{
        /* margin-right:calc(-.5* var(--bs-gutter-x)); */
        /* margin-left:calc(-.5* var(--bs-gutter-x)); */
        margin-right:0 !important;
        margin-left:0 !important;
      }

      .background-prim{
        background-color:#1C9BAB;
      }
      .background-prim:hover{
        background-color:#115861;
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

.cobainn{
  background: url('data:image/svg+xml,<svg width="475" height="77" viewBox="0 0 475 77" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M474.081 76.1921H44.5967V0.77356H413.003L474.081 76.1921Z" fill="%2367C4CF"/><path d="M429.484 76.1921H0V0.77356H368.406L429.484 76.1921Z" fill="%231C9BAB"/></svg>');
  background-repeat: no-repeat;
  /* width: 500px; */
  /* height: 50px; */
  padding: 10px 40px;
  color: #fff;
  margin:0;
  /* position: absolute; */
}

.cobainn2{
  background: #1C9BAB;
  background-repeat: no-repeat;
  /* width: 500px; */
  /* height: 50px; */
  text-align:center;
  padding: 10px 40px;
  color: #fff;
  margin:0;
  /* position: absolute; */
}


.subteks{
  background: url('data:image/svg+xml,<svg width="553" height="550" viewBox="0 0 553 550" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22.4194" y="0.248047" width="529.801" height="529.801" fill="%231C9BAB"/><rect x="2.9707" y="21.9304" width="524.801" height="524.801" fill="white" stroke="%231C9BAB" stroke-width="5"/></svg>');
  padding: 50px 50px 30px 30px;
  width:60%;
  float: left;
  min-height: 300px;
  text-align: justify;
  border-bottom: 5px solid #1C9BAB;
  margin: 20px;
  background-size:     cover;
    background-position: top center;
  background-repeat: no-repeat;
}

.subimg{
  width:20%;
  margin: 20px 50px;
  float:right;
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

.kotakbawah{
  border: 7px solid #1C9BAB; 
  background:white;
  padding:40px;
  text-align:justify
}
.kotakbawahbg{
  padding: 50px 300px;
}

@media screen and (max-width: 992px) {

.subteks{
width:100%;
min-height:0;
margin: 10px 0;
background: none;
padding:0;
border: none;
}

.subimg{
  width: 100%;
  float: left;
  padding: 20%;
  margin: 0;
}

.kotakbawahbg{
    padding:0px;
  }
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



  /* .subteks{
  width:100%;
  margin: 10px 0;
} */
}

/* @media screen and (max-width: 520px) {

  .subteks{
  width:100%;
  margin: 10px 0;
  background: none;
  padding:0;
  border: none;
}
} */

.bg-andalus {
  --bs-bg-opacity: 1;
  background-color: rgba(28, 155, 171,1) !important;
}

.mastsec {
  padding-top: 30px;
  padding-bottom:30px;
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
                            <!-- <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @php

        $i = 1;

        @endphp

        @foreach($applist as $app)

        <section class="mastsec">
            <div class="container px-2">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                  <!-- <div style="background:url('data:image/svg+xml,<svg width='475' height='77' viewBox='0 0 475 77' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M474.081 76.1921H44.5967V0.77356H413.003L474.081 76.1921Z' fill='%2367C4CF'/><path d='M429.484 76.1921H0V0.77356H368.406L429.484 76.1921Z' fill='%231C9BAB'/></svg>')"> -->
                  <h3 class="cobainn">
                  {{  $app->title }}
                  </h3>
                  <div style="border: 7px solid #1C9BAB;">
                  <div class="subteks">
                    {!! $app->content !!}
                  </div>
                  <img class="subimg" src="{{ Storage::url($app->thumbnail) }}" alt="{{ $app->title }}"/>

                  </div>
                </div>
            </div>
        </section>

        @php
          $i++;
        @endphp
        @endforeach

        @php

        $i = 1;

        @endphp

        @foreach($prodlist as $prod)

        <section class="mastsec">
          <div class="container px-2">
            <div style="background:url('{{ Storage::url($prod->thumbnail) }}') no-repeat center;">
            <div class="kotakbawahbg">
              <div class="row gx-5 align-items-center">
                <!-- <div style="background:url('data:image/svg+xml,<svg width='475' height='77' viewBox='0 0 475 77' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M474.081 76.1921H44.5967V0.77356H413.003L474.081 76.1921Z' fill='%2367C4CF'/><path d='M429.484 76.1921H0V0.77356H368.406L429.484 76.1921Z' fill='%231C9BAB'/></svg>')"> -->
                <h3 class="cobainn2">
                  {{ $prod->title }}
                </h3>
                <div class="kotakbawah">
                  {!! $prod->content !!}
                </div>
              </div>
            </div>
            </div>
          </div>
      </section>

        @php
          $i++;
        @endphp
        @endforeach

 

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