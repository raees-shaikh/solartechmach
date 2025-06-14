@extends('frontend.layouts.app')
@section('title', 'Exhibition - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Exhibition</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a class="text-white"> Company</a> / <a
                    href="{{ url('/exhibitions') }}">Exhibitions</a> / Exhibition</h6>
        </div>
    </div>

    <section>
        <div id="blog-page" class="blog-section section-padding py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-3 blog-title-fs text-capitalize">Solar Cell From Ingot-Wafer</h2>
                        <div class="single-blog-wrap">
                            <img src="{{ asset('frontend/assets/img/service/1.jpg') }}" alt="" class="w-100">
                        </div>
                    </div>

                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <h3 class="mb-2"> Description</h3>
                        <p>Offering Technologies Which Provides Production Equipment For Photovoltaics: For Both Crystalline
                            And Thin-Film High-Performance Solar Cell Platforms Including Cigs, Cdte And Perovskite
                            Technology As Well As Perc, Hjt, Ibc, Hbc & Topcon , Techncolgies Mixed With Experiances Will
                            Improves Cell Efficiency And Reduces Manufacturing Costs For High-Performance Solar Cells. </p>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="cont">
                    <div class="page-head">
                        <h2 class="text-center mb-4">Gallery</h2>

                        <div class="demo-gallery text-center">
                            <ul id="lightgallery" class="px-0">

                                @for ($g = 0; $g < 4; $g++)
                                    <li data-responsive="{{ asset('frontend/assets/img/service/adv.jpg') }} 375, {{ asset('frontend/assets/img/service/adv.jpg') }}480, {{ asset('frontend/assets/img/service/adv.jpg') }}800"
                                        data-src="{{ asset('frontend/assets/img/service/adv.jpg') }}">
                                        <a href="">
                                            <img class="img-responsive"
                                                src="{{ asset('frontend/assets/img/service/adv.jpg') }}">
                                            <div class="demo-gallery-poster">
                                                <img src="{{ asset('frontend/assets/img/service/adv.jpg') }}">
                                            </div>
                                        </a>
                                    </li>
                                @endfor

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
