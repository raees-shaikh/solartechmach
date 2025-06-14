@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Contact Us</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> /
                Contact Us</h6>
        </div>
    </div>

    <!-- Contact Section  -->
    <div class="contact-section section-padding py-lg-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 order-lg-2 order-1">
                    <div class="contact-form dark-bg p-3 py-lg-5 px-lg-4 mt-lg-0 mt-4">
                        <div class="section-title">
                            <h3 class="text-white text-center">Drop Us a Line</h3>
                        </div>
                        <form class="mt-4" action="{{ route('frontend.contact.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="recaptcha_response" value="" id="recaptchaResponse">
                            <input type="hidden" class="form-control" name="page_name" value="Contact">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Your Name*</label>
                                    <input type="text" placeholder="Name" name="name" minlength="3" maxlength="30"
                                        value="{{ old('name') }}" class="mb-0" required>
                                    @if ($errors->has('name'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email Address*</label>
                                    <input type="email" placeholder="Enter Your Email" name="email" minlength="5"
                                        maxlength="40" value="{{ old('email') }}" class="mb-0" required>
                                    @if ($errors->has('email'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Phone Number*</label>
                                    <input type="text" placeholder="Phone Number" name="phone" minlength="10"
                                        maxlength="10" value="{{ old('phone') }}" class="mb-0" required>
                                    @if ($errors->has('phone'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Subject*</label>
                                    <input type="text" placeholder="Subject" name="subject" minlength="3"
                                        maxlength="100" value="{{ old('subject') }}" class="mb-0" required>
                                    @if ($errors->has('subject'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('subject') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12 mb-3">
                                    <label>Message*</label>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Your Message" name="message"
                                        minlength="5" maxlength="250" class="mb-0" required>{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('recaptcha_response'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('recaptcha_response') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="text-center pt-md-3"><button type="submit"
                                        class="bordered-btn text-capitalize">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Info -->
    <div class="contact-info-wrap section-padding pt-0  pb-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <img src="{{ asset('frontend/assets/img/contact/1.png') }}" alt="">
                        </div>
                        <p>India | USA | China | Turkey | EU | Dubai & S.Africa</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <img src="{{ asset('frontend/assets/img/contact/2.png') }}" alt="">
                        </div>
                        <p><a href="mailto:sales@solartechmach.com ">sales@solartechmach.com </a> </p>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <img src="{{ asset('frontend/assets/img/contact/headset.png') }}" alt="">

                        </div>
                        <p><a href="tel:919326606599">+91-9326606599</a></p>

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
