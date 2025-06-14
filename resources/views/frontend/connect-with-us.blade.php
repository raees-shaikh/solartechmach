@extends('frontend.layouts.app')
@section('title', 'Connect With Us - ')
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Connect With Us</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a class="text-white"> Company</a> /
                Connect With Us</h6>
        </div>
    </div>

<section>
    <div class="container">
        <h2 class="text-center mt-3 team-title">Dedicated Team Members</h2>
        <div class="row mt-4">

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="team">
                   <img src="{{asset('frontend/assets/img/team/eagle.png')}}" alt="" class="w-100">
<div class="d-flex align-items-center">
    <div class="share">
        <i class="fa fa-2x fa-share text-white"></i>
    </div>
    <h4 class="my-3 text-white px-3">CEO</h4>
</div>

                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="team">
                   <img src="{{asset('frontend/assets/img/team/tiger.png')}}" alt="" class="w-100">
                   <div class="d-flex align-items-center">
                    <div class="share">
                        <i class="fa fa-2x fa-share text-white"></i>
                    </div>
                    <h4 class="my-3 text-white px-3">Global Sales & Sourcing</h4>
                </div>

                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="team">
                   <img src="{{asset('frontend/assets/img/team/bat.jpeg')}}" alt="" class="w-100">
                   <div class="d-flex align-items-center">
                    <div class="share">
                        <i class="fa fa-2x fa-share text-white"></i>
                    </div>
                    <h4 class="my-3 text-white px-3">Logistics & Exim Department</h4>
                </div>

                </div>
            </div>

        </div>
    </div>
</section>



    <!-- Contact Info -->
    <div class="contact-info-wrap section-padding pt-0  pb-3">
        <div class="container">
            <h2 class="text-center mt-3 team-title">Online Support Team Chat / Whatsup</h2>
            <div class="row mt-4">

                <div class="col-lg-8 mb-4">
                    <img src="{{asset('frontend/assets/img/service/3.jpg')}}" alt="" class="w-100">

                </div>

                <div class="col-lg-4">

                <div class="col-12 mb-4">
                    <div class="single-contact-info connect">
                        <div class="contact-icon">
                            <img src="{{ asset('frontend/assets/img/contact/2.png') }}" alt="">
                        </div>
                        <p><a href="mailto:sales@solartechmach.com ">sales@solartechmach.com </a> </p>

                    </div>
                </div>
                <div class=" col-12">
                    <div class="single-contact-info connect">
                        <div class="contact-icon">
                            <img src="{{ asset('frontend/assets/img/contact/headset.png') }}" alt="">

                        </div>
                        <p><a href="tel:919326606599">+91-9326606599</a></p>

                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script
        src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
        async defer></script>
    <script>
        var onloadCallback = function() {
            // alert('hell')
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                })
            })
        }
    </script>
@endsection
