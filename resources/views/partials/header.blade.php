<header id="header" class="border-bottom header-size-custom" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-lg-between">

                <!-- Logo -->
                <div id="logo" class="me-lg-0">
                    <a href="{{ route('home') }}">
                        <img class="logo-default py-3" srcset="{{ asset('buf.png') }}, {{ asset('buf.png') }} 2x"
                            src="{{ asset('buf.png') }}" alt="BU Pixel Future Logo">
                        <img class="logo-dark py-3" srcset="{{ asset('buf.png') }}, {{ asset('buf.png') }} 2x"
                            src="{{ asset('buf.png') }}" alt="BU Pixel Future Logo">
                    </a>
                </div>

                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                <nav class="primary-menu">
                    <ul class="menu-container not-dark one-page-menu">
                        <li class="menu-item">
                            <a class="menu-link ls-1 text-uppercase" href="#" data-href="#section-services">
                                <div>Services</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link ls-1 text-uppercase" href="#" data-href="#section-pricing">
                                <div>Pricing</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link ls-1 text-uppercase" href="#" data-href="#section-about">
                                <div>About</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link ls-1 text-uppercase" href="#" data-href="#section-contact">
                                <div>Contact</div>
                            </a>
                        </li>
                    </ul>
                </nav>

                <nav class="primary-menu">
                    <ul class="menu-container not-dark">
                        <li class="menu-item">
                            <a class="menu-link color ls-1 text-uppercase" href="#modal-contact" data-lightbox="inline">
                                <div><i class="bi-envelope"></i>Get Quote</div>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
