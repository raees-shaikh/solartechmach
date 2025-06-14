@extends('frontend.layouts.app')
@section('title', 'Latest Opportunities - ')
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Latest Opportunities</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a href="{{ url('latest-opportunities') }}">Latest Opportunities</a>  /
                Offers</h6>
        </div>
    </div>
    <section>
        <div id="blog-page" class="blog-section section-padding py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row offers">
                            <div class="col-xl-4 col-lg-6 mb-4">

                                <div class="single-blog-item h-100 mb-0">

                                    <div class="blog-content pb-2">
                                        <h5><a href="{{ url('/offers-show') }}" class="mb-2">Solar Panel-PV Topcon-N-Hjt-210 X210
                                                High Speed Production Up To 9000 Cells/Hour</a>
                                        </h5>
                                        <div class="mt-2">
                                            <a href="{{ url('/offers-show') }}" class="main-btn-custom-2">Read More</a>
                                        </div>
                                    </div>

                                </div>

                            </div>


                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="single-blog-item h-100 mb-0">

                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/offers-show') }}" class="mb-2">Solar EPE [ EVA + POE ] Encapsulation
                                        Films</a>
                                </h5>
                                <div class="mt-2">
                                    <a href="{{ url('/offers-show') }}" class="main-btn-custom-2">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <div class="blog-category px-0 py-0 my-0">
                            <div class="sidebar">
                                <h5 class="my-0 text-white">Other Categories</h5>
                            </div>
                            <div>
                                    <a href="#" class="text-capitalize px-2 mb-0 mt-2 pb-2">Solar Cell From Ingot-Wafer</a>
                                    <a href="#" class="text-capitalize px-2 mb-0 mt-2 pb-2">Copper Ribbon & Busbar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </section>






@endsection
