@extends('frontend.layouts.app')
@section('title', 'Offer Show - ')
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Offer Show</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a href="{{ url('latest-opportunities') }}">Latest Opportunities</a>  /
                Offers</h6>
        </div>
    </div>
    <section>
        <div id="blog-page" class="blog-section section-padding py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-3 blog-title-fs text-capitalize">Solar Cell From Ingot-Wafer</h2>
                        <div class="single-blog-wrap">

                                <img src="{{asset('frontend/assets/img/service/1.jpg') }}" alt="">


                            <h3 class="mb-2">Technical Description</h3>
                            <p>Offering Technologies Which Provides Production Equipment For Photovoltaics:  For Both Crystalline And Thin-Film High-Performance Solar Cell Platforms Including Cigs, Cdte And Perovskite Technology As Well As Perc, Hjt, Ibc, Hbc & Topcon , Techncolgies Mixed With Experiances Will Improves Cell Efficiency And Reduces Manufacturing Costs For High-Performance Solar Cells. </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <div class="blog-category px-0 py-0 my-0">
                            <div class="sidebar">
                                <h5 class="my-0 text-white">Related Offers</h5>
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
