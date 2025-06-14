@extends('frontend.layouts.app')
@section('title', 'Solutions - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Solutions</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a class="text-white"> Company</a> / Solutions</h6>
        </div>
    </div>
    <div class="container px-0">
        <!-- Blog Section  -->


        <div class="blog-page blog-area section-padding py-3 px-0">
            <div class="container">
                <div class="row mt-4">


                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/hjt.jpeg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">Solar Panel-PV Topcon-N-Hjt-210 X210
                                        High Speed Production Up To 9000 Cells/Hour</a>
                                </h5>
                            </div>

                        </div>
                    </div>




                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/pva.jpg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">Solar EPE [ EVA + POE ] Encapsulation
                                        Films</a>
                                </h5>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/waste.jfif') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">Solar Waste Panel Recyling</a>
                                </h5>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/inverter.jpg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">Solar Inverter Automatic Assembly
                                        Line</a>
                                </h5>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/backsheet.jpg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">PVDF Coating/Lamination Plant For Solar
                                        Panel PV Backsheet</a>
                                </h5>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/ingot.jpg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">Solar Cell From Ingot-Wafer</a>
                                </h5>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/ribbon.jpg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">Copper Ribbon & Busbar</a>
                                </h5>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/box.jpg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">
                                        Heavy Duty Crad Board Container Box 6 X 3 Feet For Solar PV Packaging

                                    </a>
                                </h5>
                            </div>

                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/pet.jpg') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">
                                        PET Strap Extrusion Production Plants For Packaging The Containers
                                    </a>
                                </h5>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/cable.jfif') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">
                                        Cable Extrsuion Line For Photovoltaic Wire Insulation
                                    </a>
                                </h5>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                        <div class="single-blog-item h-100 mb-0">
                            <div class="blog-bg">
                                <img src="{{ asset('frontend/assets/img/service/roll.webp') }}" alt="">
                            </div>
                            <div class="blog-content pb-2">
                                <h5><a href="{{ url('/products') }}" class="mb-2">
                                        Solar Mounting Roll Forming Machinerys</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="text-center justify-content-center mx-auto mt-4 pb-5">
                        <ul class="pagination  mx-auto d-block">
                            {{ $products->onEachSide(1)->links('pagination::bootstrap-4') }}
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

@endsection
