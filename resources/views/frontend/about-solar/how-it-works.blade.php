@extends('frontend.layouts.app')
@section('title', 'How It Works - ')
@section('content')

    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">How It Works</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a class="text-white cursor-auto">About Solar</a> /
                How It
                Works</h6>
        </div>
    </div>

    <!-- About Section -->

    <div class="about-area about-two section-padding py-lg-5 pt-4 pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="info-img">
                        <img src="{{ asset('frontend/assets/img/service/types.webp') }}" alt="">

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-delay=".3s">
                    <div class="about-content-area mt-0">
                        <div class="section-title">
                            <h2>Types Of Solar Panels</h2>
                        </div>

                        <p>Since each solar installation must address numerous space and shading limitations, no
                            one-size-fits-all solar solution exists. Solar Techmach provides a range of different solar
                            panels
                            and solutions to cater to the various needs of residential, commercial and large-scale utility
                            projects</p>

                        <p>There are two main types of PV solar panels used in solar systems: <b>Monocrystalline</b> and
                            <b>Multicrystalline</b> .
                        </p>

                        <div class="about-contact">
                            <div class="container">
                                <div class="row text-center d-flex align-items-center">
                                    <div
                                        class=" col-md-6 d-flex justify-content-lg-start justify-content-center align-items-center">
                                        <div class="call-us d-flex mt-xl-0 mt-lg-4 mt-md-0 mt-4">
                                            <div class="icon"><a href="tel:919326606599"><i class="fa-solid fa-headset text-white "></i></a>
                                            </div>
                                            <div class="mobile-number">
                                                <h5 class="mt-1 mb-2">Call Us Anytime</h5>
                                                <p><a href="tel:919326606599" class="number-link">+91-9326606599</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6">
                                        <a href="{{ url('/contact-us') }}" class="main-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->

    <div class="services-area service-two gray-bg section-padding py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-4 col-md-6 col-12">
                    <div class="single-service-area ">
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/nera.jpg') }}" alt="">
                        </div>
                        <div class="service-content white-bg p-3 ">
                            <h5 class="mt-1 mb-2 text-capitalize">Monocrystalline solar panels </h5>
                            <p class="pb-3">Monocrystalline solar panel is with 72mm half cut cells. The efficient cells
                                produce more power over a long period of time, and high-efficiency modules have better
                                performance and less degradation.</p>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 mb-4 col-md-6 col-12">
                    <div class="single-service-area ">
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/p-blue.png') }}" alt="">
                        </div>
                        <div class="service-content white-bg p-3">
                            <h5 class="mt-1 mb-2 text-capitalize">Polycrystalline solar panels</h5>
                            <p class="pb-3">A polycrystalline solar panel is made up of several photovoltaic cells, each
                                of which contains silicon crystals that serve as semiconductors. These types of solar cells
                                are exposed to sunlight.</p>
                            {{-- <hr>
                            <a href="#" class="read-more"><i class="las la-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 mb-4 col-md-6 col-12">
                    <div class="single-service-area ">
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/msc.webp') }}" alt="">
                        </div>
                        <div class="service-content white-bg p-3">
                            <h5 class="mt-1 mb-2 text-capitalize">Thin-film solar panels</h5>
                            <p class="pb-3">Thin-Film is the future of the solar industry. They are very economical,
                                require less material, contain no toxic components, generate less waste, and very easy to
                                fabricate.</p>
                            {{-- <hr>
                            <a href="#" class="read-more"><i class="las la-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
