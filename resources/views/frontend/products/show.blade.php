@extends('frontend.layouts.app')
@section('title', ucfirst($product->title) . ' - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white text-capitalize">{{ $product->title }}</h2>
            <h6 class="text-white text-capitalize"><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/products') }}"
                    class="text-white">Products</a> / {{ $product->title }} </h6>
        </div>
    </div>


    <section>
     
        <div id="blog-page" class="blog-section section-padding py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-3 blog-title-fs text-capitalize">{{ $product->title }}</h2>
                        <div class="single-blog-wrap">
                            @if ($product->image)
                                <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="">
                            @endif


                            <h3 class="mb-2">Technical  Description</h3>
                            <p>{!! json_decode($product->description) !!} </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <div class="blog-category px-0 py-0 my-0">
                            <div class="sidebar">
                                <h5 class="my-0 text-white">Latest Products</h5>
                            </div>
                            <div>
                                @foreach ($latestProducts as $latestProduct)
                                    <a href="{{ route('frontend.product.show', $latestProduct->slug) }}"
                                        class="text-capitalize px-2 mb-0 mt-2 pb-2 {{ URL::current() == route('frontend.product.show', $latestProduct->slug) ? 'active' : '' }}">
                                        {{ $latestProduct->title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </section>

@endsection
