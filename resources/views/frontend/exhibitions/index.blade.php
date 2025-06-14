@extends('frontend.layouts.app')
@section('title', 'Exhibitions - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Exhibitions</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a class="text-white"> Company</a> / Exhibitions</h6>
        </div>
    </div>

    <section class="pt-5 bg-gray">
        <div class="container">
            <div class="row  p-lg-0 ">

                 @for ($i=0;$i<4; $i++)
                 <div class="col-md-6 col-xl-4  mb-4 products-cards">
                    <div class="business-card-dark p-4 h-100 position-relative">
                        <p class="date">{{date('d-m-y')}} To {{date('d-m-y')}}</p>
                        <img src="{{asset('frontend/assets/img/service/2.jpg')}}" alt="" class="exhi-img">
                        <h5 class="blog-details_title mt-3 mb-md-3 mb-2 text-capitalize">Solar Exhibitions</h5>
                        <div class="mt-5 pt-md-3">
                            <a href="{{url('/exhibition')}}" class="product-btn">Read
                                More</a>
                        </div>
                    </div>
                </div>
                 @endfor

            </div>
        </div>


        <div class="text-center justify-content-center mx-auto mt-4 pb-5">
            <ul class="pagination  mx-auto d-block">
                <li class="page-item"><a class="page-link" href="#"><i class="las la-angle-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="las la-angle-right"></i></a>
                </li>

            </ul>
        </div>
    </section>

@endsection
