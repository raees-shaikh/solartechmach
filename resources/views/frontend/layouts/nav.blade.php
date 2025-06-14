<!-- Mouse Cursor  -->
{{-- <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div> --}}

<!-- Pre-Loader -->
<div id="loader">
 <div class="bg-thin position-relative">
    <div class="d-grid-custom">
        <div class="text-center mt-5">
            <img src="{{asset('frontend/assets/img/solar-logo.jpg')}}" alt="" class="w-50 rounded mt-lg-5">
        </div>
                <h2 class="text-white text-center fonts-sm-24 mt-lg-5"> Rising Sun  & Rising Company, We Are SOLAR TECHMACH  Of Bharat India…</h2>
            </div>
 </div>
</div>

<!-- Header Top Area -->

<!-- Header Area -->

<header class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a class="navbar-brand" href="{{ url('/') }}"><img
                                    src="{{ asset('frontend/assets/img/solar-logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler px-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-end d-lg-block"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav  justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == url('/') ? 'active' : '' }}"
                                                href="{{ url('/') }}">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == url('/about-us') ? 'active' : '' }}"
                                                href="{{ url('/about-us') }}">About Us

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link {{ URL::current() == url('/why-solar') || URL::current() == url('/how-it-works') || URL::current() == url('/environmental-benefits') ? 'active' : '' }}">About
                                                Solar
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu pt-lg-3 pt-0">
                                                <li><a href="{{ url('/why-solar') }}"
                                                        class=" {{ URL::current() == url('/why-solar') ? 'nav-active' : '' }}">Why
                                                        Solar</a></li>
                                                <li><a href="{{ url('/how-it-works') }}"
                                                        class=" {{ URL::current() == url('/how-it-works') ? 'nav-active' : '' }}">How
                                                        It Works</a></li>
                                                <li><a href="{{ url('/environmental-benefits') }}"
                                                        class=" {{ URL::current() == url('/environmental-benefits') ? 'nav-active' : '' }}">Environmental
                                                        Benefits</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == url('/latest-opportunities') ? 'active' : '' }}"
                                                href="{{ url('/latest-opportunities') }}">Latest Opportunities

                                            </a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == url('/products') ? 'active' : '' }}"
                                                href="{{ url('/products') }}">Products

                                            </a>

                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link {{URL::current() == url('/exhibitions') || URL::current() == url('/solutions') || URL::current() == url('/connet-with-us') || URL::current() == url('/busines-process') ? 'active' : '' }}">Company
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu pt-lg-3 pt-0">
                                                <li><a href="{{ url('/solutions') }}"
                                                        class=" {{ URL::current() == url('/solutions') ? 'nav-active' : '' }}">Solutions</a></li>
                                                <li><a href="{{ url('/exhibitions') }}"
                                                        class=" {{ URL::current() == url('/exhibitions') ? 'nav-active' : '' }}">Exhibitions</a></li>
                                                <li><a href="{{ url('/business-process') }}"
                                                        class=" {{ URL::current() == url('/business-process') ? 'nav-active' : '' }}">Business Process</a></li>

                                                        <li><a href="{{ url('/connect-with-us') }}"
                                                            class=" {{ URL::current() == url('/connect-with-us') ? 'nav-active' : '' }}">Connect With Us</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item mx-0">
                                            <a class="nav-link {{ URL::current() == url('/contact-us') ? 'active' : '' }}" href="{{ url('/contact-us') }}">Contact Us

                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Search Dropdown Area -->

<div class="search-popup">
    <span class="search-back-drop"></span>

    <div class="search-inner">
        <div class="container">
            <div class="upper-text">
                <div class="text">Search for anything.</div>
                <button class="close-search"><span class="la la-times"></span></button>
            </div>

            <form method="post" action="">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="la la-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
