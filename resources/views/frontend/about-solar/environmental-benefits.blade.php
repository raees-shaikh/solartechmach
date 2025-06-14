@extends('frontend.layouts.app')
@section('title', 'Environmental Benefits - ')
@section('content')

    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Environmental Benefits</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a class="text-white cursor-auto">About Solar</a> /
                Environmental Benefits</h6>
        </div>
    </div>

    <!-- About Section-->

    <div id="about-3" class="about-area section-padding py-lg-5 py-4">
        <div class="container">
            <div class="row align-items-center mb-lg-5 mb-2 ">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInDown order-lg-1 order-2" data-wow-delay=".2s">
                    <div class="info-content-area mt-0">
                        <div class="section-title mb-2 wow fadeInDown" data-wow-delay=".2s">
                            <h3 class="mt-lg-0 mt-3 text-capitalize">Solar energy produces no CO2 pollution</h3>
                        </div>

                        <p>The continued use of fossil fuels generates high levels of carbon dioxide and air pollution. The
                            air pollution causes harmful health problems and CO2 emissions contribute to climate change. CO2
                            has a harmful impact on our environment by altering weather patterns, rising sea levels and
                            increasing ecological damage. </p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp mt-lg-0 mt-3 order-lg-2 order-1" data-wow-delay=".4s">
                    <div class="about-bg text-lg-end text-center d-block">
                        <img src="{{ asset('frontend/assets/img/service/co2.png') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-lg-5 mb-2">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInDown order-2" data-wow-delay=".2s">
                    <div class="info-content-area mt-0">
                        <div class="section-title mb-2 wow fadeInDown" data-wow-delay=".2s">

                            <h3 class="mt-lg-0 mt-3 text-capitalize">A safe and low-impact energy source</h3>
                        </div>

                        <p>Sunlight is free, infinite and easily accessible, unlike fossil fuels, which need to be mined,
                            extracted and transported. These processes cause serious land and ecological degradation, and
                            carry the risk of disasters such as oil spills.</p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp order-1  mt-lg-0 mt-3" data-wow-delay=".4s">
                    <div class="about-bg text-end text-center d-block">
                        <img src="{{ asset('frontend/assets/img/service/energy.jpg') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>

            {{-- <div class="row align-items-center mb-2">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInDown order-lg-1 order-2" data-wow-delay=".2s">
                    <div class="info-content-area mt-0">
                        <div class="section-title mb-2 wow fadeInDown" data-wow-delay=".2s">

                            <h3 class="mt-lg-0 mt-3 text-capitalize">Solar is carbon-free</h3>
                        </div>

                        <p>As of December 31, 2020, Solar Techmach’s cumulative shipments exceeded 66GW, with an annual power
                            generation capacity of nearly 90 billion kWh, which is equivalent to saving over 29million tons
                            of standard coal and reducing CO2 emissions by about 89 million tons. Reduce SO2 emissions over
                            2 million tons. As more homes and businesses switch to solar, we can collectively help reduce
                            the harmful effects of carbon dioxide emissions and the pollution on the environment.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp mt-lg-0 mt-3 order-lg-2 order-1" data-wow-delay=".4s">
                    <div class="about-bg text-end text-center d-block">
                        <img src="{{ asset('frontend/assets/img/service/free.webp') }}" alt="" class="w-100">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@endsection
