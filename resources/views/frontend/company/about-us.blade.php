@extends('frontend.layouts.app')
@section('title', 'About Us - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">About Us</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> /
                About Us
            </h6>
        </div>
    </div>

    <!-- About Section-->

    <div class="about-area section-padding py-lg-5 py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft mt-0" data-wow-delay=".6s">
                    <div class="about-img w-100">
                        <img src="{{ asset('frontend/assets/img/team/group-2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".2s">
                    <div class="info-content-area px-0">
                        <div class="section-title mb-3">
                            <h6>Welcome To Solar Techmach</h6>
                            <h2>Great Experience For Industrial Solutions</h2>
                        </div>
                        {{-- <p class="mb-2">We produce solar panel production line, solar panel production Assembly and
                            Turkney Lines, solar panel making machines, solar panel laminator, manufacturing machines, framing
                            machine and tester, with free installation and training.</p> --}}
                        <p class="mb-2">Solar Techmach is company who sells only production plant and machinerys related
                            to solar energy and also renewable energy like hydrogen gas oxygen gas from waster by using
                            electrolysis.</p>
                        <p class="mb-2"> We are only sellers of imported Solar & Renewable energies related production,
                            equipments, machines, plants, spare parts machienrys.</p>
                        <p class="mb-2">
                            All fully automatic, robotic, high performance, advance technology & machinery’s.</p>
                        <p>Solar Techmach is one of the earliest companies  to commit to the photovoltaic industry.
                            It is an integrated photovoltaic smart energy solution provider that encompasses technology
                            research and development, and power station business. In 2023, its
                            photovoltaic module bid volume and shipment volume ranked in the top ten of the industry.
                            The company has an industrial layout across multiple
                             locations. With outstanding technology, it explores the
                            large-scale development and utilization of green solar energy, contributing photovoltaic wisdom
                            and strength to achieving the “dual carbon” goals.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-lg-5 mt-3">
            <h3 class="blog-details_title mb-4 d-lg-none d-block mt-4">The Enterprise Culture
            </h3>
            <div class="row d-flex align-items-center business-card box-shadow-none p-0 " id="guidance">
                <div class="col-lg-6 px-0 order-lg-2 order-1">
                    <img src="{{ asset('frontend/assets/img/team/group.png') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 pt-lg-0 pt-4  order-lg-1 order-2 px-sm-2 px-0">
                    <h3 class="blog-details_title mb-md-3 mb-2 d-lg-block d-none">The Enterprise Culture
                    </h3>
                    <ul class="about-key mt-lg-4 mt-0">
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>
                                Build a Green and Beautiful Homeland for All</p>
                        </li>
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>To be a global leader in green and intelligent </p>
                        </li>
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>Responsibility, Tenacity, Innovation</p>
                        </li>
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>
                                Trust, Delivery, Growth, Sharing</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection