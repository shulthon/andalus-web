<style>
  li.nav-item.active {
    font-weight: bold;
    /* background-color: red !important; */
}
  </style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-2">
                <a class="navbar-brand" href="#">
                  <img src="{{ asset('img/logo-square.png') }}" alt="Andalus Logo" height="90px"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
                            <a class="nav-link me-lg-3" href="/">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('our-service') ? 'active' : ''}}">
                            <a class="nav-link me-lg-3" href="our-service">Our Service</a>
                        </li>
                        <li class="nav-item {{ request()->is('our-product') ? 'active' : ''}}">
                            <a class="nav-link me-lg-3" href="our-product">Our Product</a>
                        </li>
                        <li class="nav-item {{ request()->is('media-partner') ? 'active' : ''}}">
                            <a class="nav-link me-lg-3" href="media-partner">Media & Partner</a>
                        </li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Contact Us</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>