@extends('frontend.layouts.app')
@section('title', '')
@section('content')
    <!-- Hero Area -->

    <div id="home-1" class="homepage-slides owl-carousel">
        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/1.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">
                                {{-- <h6>We provide best satisfied work</h6>

                                <h1>A leading global provider of<br> smart <span class="rotate-text"> PV energy</span> <span
                                        class=" active-clr"> solutions
                                    </span> </h1>

                                <p><span>Solar Techmach is striving for massive exploitation and utilization of <br>green
                                        solar energy through the state-of-the-art technologies.</span>
                                </p> --}}
                                <h6>® Since 1989 part of HR Group of companies</h6>
                                <h1 class="banner-title-fs"> <span class="active-clr"> SOLAR TECHMACH </span> Offers
                                    Machinery’s From Mainland China & Other Countries</h1>
                                <p>Turnkey Plant & Machinery Based on TECHNOLOGIES Economical costs, High Tech. Fully
                                    Automated Robotic & High Tech Advance For Solar Module, Catering To The
                                    Needs For Ever Changing & Their Diversified Requirements Such As Conventional Glass-Back
                                    Sheet, G2g, Half-Cell, MBB, 0BB, XBC, SPV Modules Production</p>
                            </div>
                            <a href="{{ url('/about-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-item ">
            <div class="image-layer" style="background-image: url(frontend/assets/img/slider/4.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">
                                <h6>Service Since 1989</h6>
                                {{-- <h1>EVA POE Solar <br> PV <span class="active-clr"> Encapsulation </span></h1> --}}
                                {{-- <p>In scientific terms, EVA or Ethylene Vinyl Acetate Sheet is a thermoplastic<br> polymer
                                    sheet
                                    that encapsulates solar cells or PV. </p> --}}
                                <h1 class="banner-title-fs">A turnkey solution for <span class="active-clr">PV solar
                                        cell</span><br> and silicon wafer </h1>
                                <p>Complete Turnkey for Provides Advance & Intelligent Production Equipment’s In PV Solar
                                    Cells, Silicon Wafer </p>
                            </div>
                            <a href="{{ url('/contact-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-1.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>We Provide Best Products</h6>
                                <h1 class="banner-title-fs">Advancements In <span class="active-clr">Photovoltaic</span>
                                    (PV) Technology for Solar Energy Generation</h1>
                                <p>Complete Production Plants For Photovoltaic (PV) Glass Energy-Efficient
                                    Technologies To Reduce Coil Usage And Increase Renewable Energy Sources. From Annealing
                                    Lehrs and Rolling Machines</p>

                            </div>
                            <a href="{{ url('/about-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-2.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>We have best Technology Machineries</h6>
                                <h1 class="banner-title-fs">Solar Inverter Automatic <span class="active-clr">Assembly
                                        Line</span></h1>
                                <p class="text-capitalize">The equipment is used for the automatic assembly line of solar
                                    inverter<br> The equipment consists of 50 modules, including 22 working stations</p>

                            </div>
                            <a href="{{ url('/about-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-4.png);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>We are the best in industrial field</h6>
                                <h1 class="banner-title-fs"><span class="active-clr">Solar Glass</span> Plant
                                </h1>
                                <p class="text-capitalize">Solar Glass Plant Toughened Heat Strengthened Solar
                                    Glass Back<br> 2272 X 1128 X 2mm Solar Back glass With Holes Printing Use in Mfg. Of
                                    Solar Module</p>

                            </div>
                            <a href="{{ url('/contact-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-6.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>We Provide High Performance Solar Encapsulated Films </h6>
                                <h1 class="banner-title-fs"> High Performance Solar<br> <span
                                        class="active-clr">Encapsulated</span> Films </h1>
                                <p class="text-capitalize">Complete High Performance Solar Encapsulated Films Made From POE
                                    & EPE Resins/Polymers,<br> Formulated To Also Make EPE In One Giga Watt [ 1 Gigawatt =
                                    10 Million Meters/Year Production ]</p>

                            </div>
                            <a href="{{ url('/about-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-7.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6> smart robot created to transform the recycling industry </h6>
                                <h1 class="banner-title-fs"><span class="active-clr">Robotic</span> Waste Recycling Plants
                                </h1>
                                <p class="text-capitalize">Complete Robotic Waste Recycling Plants For Rejected, Wasted
                                    Solar PV Panels in 3000 To 10,000 Tons/Year</p>

                            </div>
                            <a href="{{ url('/contact-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-8.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>Robotic Automated Billet to Aluminium Extruded Products </h6>
                                <h1 class="banner-title-fs"><span class="active-clr">Aluminium</span> Billet Extruder
                                    Press Production Line</h1>
                                <p class="text-capitalize">Complete Robotic Automated Billet to Aluminium Extruded Products
                                    Used for Solar Panel 750-1850 Tons Press Capacity’s</p>

                            </div>
                            <a href="{{ url('/about-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-9.jfif);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>PVDF Coating/Lamination</h6>
                                <h1 class="banner-title-fs"><span class="active-clr">PVDF</span> Coating/Lamination Plant
                                </h1>
                                <p class="text-capitalize">PVDF Coating/Lamination Plant for PV Back sheet</p>

                            </div>
                            <a href="{{ url('/contact-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-10.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>Copper Ribbon & Busbar Machinery’s</h6>
                                <h1 class="banner-title-fs"><span class="active-clr">Copper Ribbon </span> & Busbar
                                    Machinery’s</h1>
                                <p class="text-capitalize">Solar panel technology has made significant advancements in
                                    terms of efficiency and cost-effectiveness, becoming increasingly accessible for both
                                    residential and commercial use. Among the essential components in panel production are
                                    solar ribbons and tabbing wires made of copper, which play a crucial role in the
                                    transmission of electrical energy.</p>

                            </div>
                            <a href="{{ url('/about-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-11.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>Packaging </h6>
                                <h1 class="banner-title-fs">Solar PV <span class="active-clr"> Packaging</span> </h1>
                                <p class="text-capitalize">5/7 PLY, Complete Heavy Duty Card Board Container Box 6 X 3 Feet
                                    for Solar PV Packaging</p>

                            </div>
                            <a href="{{ url('/contact-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-12.webp);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>PET Strap Extrusion</h6>
                                <h1 class="banner-title-fs"><span class="active-clr">PET</span> Strap Extrusion Production
                                    Plant</span> </h1>
                                <p class="text-capitalize">PET Strap Extrusion Production Plants for Packaging the
                                    Containers</p>

                            </div>
                            <a href="{{ url('/about-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="single-slide-item">
            <div class="image-layer " style="background-image: url(frontend/assets/img/slider/bg-13.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center text-lg-start text-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">

                                <h6>Cable Extrusion Line </h6>
                                <h1 class="banner-title-fs"><span class="active-clr">Cable Extrusion Line</span> for
                                    Photovoltaic Wire Insulation</span> </h1>
                                <p class="text-capitalize">A cable extrusion line for photovoltaic (PV) wire insulation is
                                    a specialized industrial machine that coats electrical wires with a protective layer of
                                    plastic insulation, commonly used in solar panel wiring.</p>

                            </div>
                            <a href="{{ url('/contact-us') }}" class="main-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Promo Section -->

    {{-- <!-- About Section-->

    <div class="about-area section-padding py-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight mt-lg-0 mt-4" data-wow-delay=".6s">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/service/about-index.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="info-content-area">
                        <div class="section-title">
                            <h6>Welcome To Solar Techmach</h6>
                            <h2>Great Experience for Industrial Solutions</h2>
                        </div>
                        <p class="mb-2">We produce solar panel production line, solar panel production Assembly and
                            Turkney Lines, solar panel making machines, solar panel laminator, manufacturing machines, framing
                            machine and tester, with free installation and training.</p>

                        <p>
                            Solar Techmach is one of the earliest companies in China to commit to the photovoltaic industry.
                            It is an integrated photovoltaic smart energy solution provider that encompasses technology
                            research and development, smart manufacturing, and power station business. In 2023, its
                            photovoltaic module bid volume and shipment volume ranked in the top ten of the industry.

                        </p>
                        <div class="about-btn mt-40 text-lg-start text-center mb-lg-0 mb-4 ">
                            <a href="{{ url('/about-us') }}"class="main-btn">Read More</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Service Section  -->
    <div class="service-section gray-bg section-padding py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="section-title">
                        <h6>What We Do</h6>
                        <h2>What We Offer</h2>
                    </div>
                </div>
                <div class="col-xl-8">
                    <p>The company has successively been honored with awards such as the “Top Performer” module manufacturer
                        by PVEL, the “Overall Best Performance” award by RETC, and the “Photovoltaic Consumer Choice Award”
                        by EUPD.</p>
                </div>
            </div>

            <div class="promo-area">
                <div class="container px-0">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-promo-item mb-3">
                                <div class="promo-icon">
                                    <img src="{{ asset('frontend/assets/img/icons/home.png') }}" alt="">
                                </div>
                                <h5>Residential Power Plants</h5>
                                <p> Save on your electricity bills, reduce your carbon footprint and increase the value of
                                    your
                                    home. </p>
                                <a href="{{ url('/residential') }}" class="blog-details-link">
                                    <i class="las la-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                        <div class="col-lg-4 col-12 col-md-6">
                            <div class="single-promo-item mb-3 spro">
                                <div class="promo-icon">
                                    <img src="{{ asset('frontend/assets/img/icons/utility.png') }}" alt="">
                                </div>
                                <h5>Utility Power Plants</h5>
                                <p>Own a solar power plant, procure solar contracts or offer solar directly to your
                                    customers with a
                                    solid business partner.</p>

                                <a href="{{ url('/utility') }}" class="blog-details-link">
                                    <i class="las la-arrow-right"></i>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-12 col-md-6">
                            <div class="single-promo-item mb-3">
                                <div class="promo-icon">
                                    <img src="{{ asset('frontend/assets/img/icons/commercial.png') }}" alt="">
                                </div>
                                <h5>Commercial Power Plants </h5>
                                <p> Make the smart investment and choose solar for your business. Lock in energy rates,
                                    demonstrate corporate.
                                </p>

                                <a href="{{ url('/commercial') }}" class="blog-details-link">
                                    <i class="las la-arrow-right"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Project Section  -->
    <div class="project-area mt-5 mb-3 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h6>Some Of Our Productions</h6>
                        <h2>Equipments & Machineries</h2>
                    </div>
                </div>
                <div class="col-lg-5 mb-lg-0 mb-4">
                    <p>Automatic solar cell tabber stringer machine is used to weld the solar cells one by one through
                        copper ribbon, and the cells are connected in series to form a string. The entire welding process is
                        fully automated.</p>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="single-project-item bg-cover project-bg">
                        <div class="project-inner">
                            <a href="{{ url('/contact-us') }}" class="project-icon">
                                <i class="las la-arrow-right"></i>
                            </a>
                            <div class="hover-info">
                                <h4>Solar Cell Welding Machine</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="single-project-item bg-cover project-bg-2">
                        <div class="project-inner">
                            <a href="{{ url('/contact-us') }}" class="project-icon">
                                <i class="las la-arrow-right"></i>
                            </a>
                            <div class="hover-info">
                                <h4>300MVH-500MVH Full Automatic</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="single-project-item bg-cover project-bg-3">
                        <div class="project-inner">
                            <a href="{{ url('/contact-us') }}" class="project-icon">
                                <i class="las la-arrow-right"></i>
                            </a>
                            <div class="hover-info">
                                <h4>5MV-30MV Semi-Automatic Machine </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="single-project-item bg-cover project-bg-4">
                        <div class="project-inner">
                            <a href="{{ url('/contact-us') }}" class="project-icon">
                                <i class="las la-arrow-right"></i>
                            </a>
                            <div class="hover-info">
                                <h4>PV Solar Production Line</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section --> --}}
    <section class="bg-ponds p-lg-5 p-3 pb-2 wow fadeInUp box">
        <div class="conatiner">

            <div class="row ">
                <h2 class="text-capitalize mb-md-5 mb-3 text-center energy">We Provide Best Products
                </h2>
                <div class=" mb-lg-1 mb-3 fade-up">
                    <div class="row  p-lg-0 ">
                        @foreach ($products as $product)
                            <div class="col-md-6 col-xl-4  mb-4 products-cards">
                                <div class="business-card-dark p-4 h-100 position-relative">
                                    <h5 class="blog-details_title mb-md-3 mb-2 text-capitalize">{{ $product['title'] }}
                                    </h5>
                                    <div class="mt-5 pt-md-3">
                                        <a href="{{ route('frontend.product.show', $product->slug) }}"
                                            class="product-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- @if ($prodctCounts > 9)
                        <div class="text-center mt-3">
                            <a href="{{ route('frontend.product.index') }}" class="main-btn">View All</a>
                        </div>
                    @endif --}}


                </div>
            </div>
        </div>
    </section>

    <section class="bg-gold p-md-5 p-4 mt-0 wow fadeInUp box">
        <div class="conatiner">
            <div class="row text-center">
                <div class=" px-0 banner_media">
                    <h2 class="pb-4 pt-3 energy">About Solar Techmach</h2>
                    <div class="px-0 text-center">
                        <img src="{{ asset('frontend/assets/img/about/dark.jpg') }}" alt=""
                            class="w-100 about-sec">

                    </div>

                    <div
                        class="text-start px-lg-5 px-md-4 px-2 pt-md-4 pt-3 row d-flex align-items-lg-end  align-items-center">
                        <div class="col-xl-12 col-lg-9">
<p class="mb-2">Our HR Group idea was born in 1989 with the inception of serving the Industry of India just when India  in 1990s , opened up the economy’s & bold reforms included reducing import tariffs, deregulating markets, and lowering taxes, which led to an increase in investment and high economic growth.</p>
<p class="mb-2">
    Our Aim not just Dream is to  serve the mankind & Indian Investors , Companies interested to enter in SOLAR POWER GENERATIONS, by selling  Complete Production Plants from Overseas  in TEXTILE | STEEL | POWER | FORGING | PLASTICS | PACKAGING | POLYMER | HEAVY ENG & MT | CONSTRUCTIONS |  & other industries.. that time starter company’s, today's large corporates.</p>
<p class="mb-2">At SOLAR Tech MACH our company part of HR Group , with Blessings & Almighty SUN power, offer Complete Technology Based  Production Plant ,Equipment’s, Machinery’s  covering the SOLAR  & HYDROGEN GAS Industry’s which generate produce & distribute energy’s……………when Bharat-India, is aiming to be the SOLAR Generation Hub of the world, not just sufficient for our mother land but also to export worldwide to country’s who can take the advantage of Low Cost Energies, brining happiness in every one’s life, as said Light is Life…. After darkness.</p>
<p>
    As also… Renewable Energy… Hydrogen & Oxygen.. Gas from Water using Different types of Technologies like Alkaline Electrolysis & others.</p>
                            {{-- <p class="mb-2">We try to offer & cover entire solar industry & hydrogen gas renewable green
                                energies, derived from mother nature.</p>
                            <p class="mb-2">Complete solar & hydrogen gas alkaline electrolyser technology based for
                                hydrogen & oxygen production-storage-transportation

                                related tech based production, complete plants, equipments, machinerys. </p>

                            <p class="mb-2">We are only sellers of imported solar & renewable energies related
                                production,
                                equipments, machines, plants, spare parts machienrys.

                            </p>
                            <p class="">All fully automatic, robotic, high performance, advance technology &
                                machinery’s.

                            </p> --}}
                            <div class="mt-3 text-lg-start text-center">
                                <a href="{{ url('/about-us') }}" class="main-btn">Read More</a>
                            </div>
                        </div>
                        {{-- <div class="col-xl-2 col-lg-3 mt-lg-0 mt-4 text-center">
                            <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                class="mb-3 rotating d-lg-block d-none">
                            <a href="{{ url('/about-us') }}" class="main-btn">Read More</a>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>

    </section>


    {{-- <section class="mt-5 wow fadeInUp box">
        <div class=" bg-blue p-md-5 p-4">
            <div class="row ">
                <h5 class="quote text-white h4">
                    We have a 15-year vision to build Solar Techmach as one of the world's leading New Energy and New
                    Materials company.
                    The New Energy business based on the principle of Carbon Recycle and Circular Economy is a
                    multi-trillion opportunity for India and the world.
                    It is also an opportunity to make clean and green energy abundantly available at an affordable price to
                    every Indian, every Indian enterprise, and every Indian utility.
                    More than a business, this is our seva to save Planet Earth from the ravages of climate change.
                </h5>
            </div>
        </div>
    </section> --}}
    <section class="px-md-3 pb-lg-5 pb-3 wow fadeInUp box">

        <div class="container-fluid px-md-4 px-3">
            <div class="row d-flex align-items-center mb-3 mt-5">
                <div class="col-lg-6 orderlg-1 order-2">
                    <h3 class="text-capitalize mb-3">Become A World-class Leader In PV Automation Equipment </h3>
                    <p>We specialize in production, and sales in four major areas photovoltaic production
                        line equipment, turnkey projects for photovoltaic production lines, investment and operation of
                        photovoltaic power stations, and intelligent of lithium battery equipment. We are a
                        rising star in the new energy equipment industry.

                        Through technological breakthroughs, improved production efficiency, and cost reduction, we are
                        committed to creating higher value for customers through intelligent operations, precise control,
                        and efficient output. With over a decade of experience in the photovoltaic industry, our company has
                        a complete production base and sales service network.

                    </p>

                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 order-lg-2 order-1">
                    <img src="{{ asset('frontend/assets/img/about/automation.webp') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    {{--
    <section class="bg-blue-2 p-md-5 p-4 wow fadeInUp box">
        <div class="conatiner">
            <h2 class="pb-4 energy text-white text-center">Solar Cell / Wafer / Products
            </h2>
            <div class="row ">
                <div class=" px-0 banner_media">
                    <div class="text-start px-lg-5 px-2 px-md-3  ">


                        <div class="row">

                            <div class="col-lg-6">
                                <h3>Solar Cell</h3>
                                <div class="d-flex align-items-center mb-3 mt-4">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">N Type Mono Bifacial HJT Solar Cell
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">N Type 210mm M12 HJT Solar Cell
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">N Type 166mm M6 HJT Solar Cell
                                    </span>
                                </div>



                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">N Type 210mm M12 Bifacial TOPCon Solar Cell
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-lg-0 mt-3">
                                <h3>Solar Wafer</h3>
                                <div class="d-flex align-items-center mb-3 mt-4">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">P Type M10 Monocrystalline Solar Wafer
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">P Type 182mm Monocrystalline Solar Wafer
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">P Type M4 Monocrystalline Solar Wafer
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">P Type 161.7mm Monocrystalline Solar Wafer
                                    </span>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <section class="bg-blue-2 p-md-5 p-4 wow fadeInUp box">
        <div class="conatiner">
            <p class=" energy text-white">Offering Technologies Which Provides Production Equipment For Photovoltaics: For
                Both Crystalline And Thin-Film High-Performance Solar Cell Platforms Including CIGS, CDTE And Perovskite
                Technology As Well As Perc, HJT, IBC, HBC & Topcon , Techncolgies Mixed With Experiances Will Improves Cell
                Efficiency And Reduces Costs For High-Performance Solar Cells. </p>
            <p class="pb-4 energy text-white">Monocrystalline, Polycrystalline, Perc, Bifacial, Topcon, BIPV, HJT, Roof
                Tiles And Shingles, Transparent Solar Cell.</p>
            <div class="row ">
                <div class=" px-0 banner_media">
                    <div class="text-start px-lg-5 px-2 px-md-3  ">


                        <div class="row">

                            <div class="col-lg-4 col-md-6">

                                <h3>Solar Cell</h3>
                                <div class="d-flex align-items-center mb-3 mt-4">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">Solar Panel Monocrystalline
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-3 mt-4">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">Solar Panel Polycrystalline
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">Solar Panel Thin Film
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">Solar Panel Technology
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">Solar Panel Bipv

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Flexible

                                    </span>
                                </div>




                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Hjt
                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Back Contact


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Topcon


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Perc
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Bifacial


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel N-Type


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Cell Size
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        125×125 mm


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        156.75×156.75 mm


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        156×156 mm


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        158.75×158.75 mm


                                    </span>
                                </div>



                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        161.7x161.7 mm
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        125×125 mm


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        156.75×156.75 mm


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        156×156 mm


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">


                                        158.75×158.75 mm


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">


                                        161.7x161.7 mm


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        166×166 mm
                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        182x182 mm

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        182x183.75 mm

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        182x210 mm


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        210x210 mm


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Backsheet

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Encapsulant

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Aluminium Frame
                                    </span>
                                </div>

                            </div>

                            <div class="col-lg-4 my-lg-0 my-3 col-md-6">

                                <h3>Solar Wafer</h3>
                                <div class="d-flex align-items-center mb-3 mt-4">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">Solar Panel Adhesive
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Sealant

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Copper Silver Ribbon


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Glass
                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Hdpe Plastic Junction Box

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Glass Tinted 2 Mm


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Monitors

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Sun Radiation Uv Trackers
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Cables


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Connectors


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Fuses

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Switches
                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Mounting Rails

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Roof Attachments

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Module Clamps

                                    </span>
                                </div>




                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Ground Screws


                                    </span>
                                </div>




                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Power Optimizers

                                    </span>
                                </div>




                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Transformers

                                    </span>
                                </div>



                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Charge Controllers


                                    </span>
                                </div>



                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Tempered Anti-Reflection Coating

                                    </span>
                                </div>



                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Frame Type
                                    </span>
                                </div>


                                <h3 class="mt-md-0 mt-4">Aluminium</h3>
                                <div class="d-flex align-items-center mb-3 mt-2">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Anodized Aluminium

                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-3 mt-4">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Frameless

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Connector Type

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mc3

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mc4

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Tyco Solarlock

                                    </span>
                                </div>




                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Radox Junction Box Protection Class

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Junction Box Diodes
                                    </span>
                                </div>


                            </div>


                            <div class="col-lg-4 col-md-6">

                                <h3 class="mb-3">Solar Panel Technology </h3>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Lithium-Ion

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Lfp (Lifepo4)

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Nmc

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Lead-Acid

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Flooded (Fla)

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Sealed (Sla)

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Agm

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Gel

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Lead Carbon Flow

                                    </span>
                                </div>



                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Graphene
                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Ni-Cd

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Ni-Mh


                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Sodium-Ion (Na-Ion)

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Cycle Life


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel At Least 200 Cycles

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        At Least 1500 Cycles

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel At Least 2000 Cycles


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Mounting System Arrangement

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Rows

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Columns

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Supporting Structure Materials

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Aluminium

                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">
                                        Solar Panel Mounting Structres Stainless Steel


                                    </span>
                                </div>


                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Galvanized Steel

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Polyethylene

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Small Parts Materials

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Aluminium

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Stainless Steel

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Galvanized Steel

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle">
                                    <span class="mt-custom-2 mx-2">

                                        Solar Panel Mounting Structres Polyethylene
                                    </span>
                                </div>

                            </div>


                            <div class="row">
                                <h3 class="text-lg-center py-4 text-start">
                                    Solar Panel Inverter Transformer Protection Features</h3>
                                <div class="col-lg-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Anti Island Protection

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Short Circuit Protection

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Overload Protection

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Overvoltage Protection


                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Overcurrent Protection

                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Ip20

                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Ip21

                                        </span>
                                    </div>



                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Ip41
                                        </span>
                                    </div>



                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">


                                            Ip43

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Ip44

                                        </span>
                                    </div>



                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Ip54

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Ip55

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Ip65

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Ip66
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Junction Box Diodes

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            At Least 2

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            At Least 3


                                        </span>
                                    </div>





                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Overtemperature Protection

                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Residual Current Device

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Reverse Polarity Protection

                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Surge Protection

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Dc Load Disconnector

                                        </span>
                                    </div>





                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Operating Temperature
                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Transformer

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Has Transformer

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Transformerless
                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Solar Cell Type Panels

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Glass Type

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Tempered

                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Anti-Reflection Coating

                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Frame Type Aluminium
                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            At Least 4

                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            At Least 6

                                        </span>
                                    </div>


                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Ground Fault Monitoring

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Isolation Monitoring

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Grid Monitoring
                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Protection Class

                                        </span>

                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Nema 4

                                        </span>

                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Nema 4r


                                        </span>

                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">


                                            Nema 4x


                                        </span>

                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">


                                            Nema 6

                                        </span>

                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Anodized Aluminium

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Frameless

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">
                                            Connector Type

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Mc4

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            Junction Box Protection Class

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            At Least Ip65

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            At Least Ip67

                                        </span>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                            class="circle">
                                        <span class="mt-custom-2 mx-2">

                                            At Least Ip68

                                        </span>
                                    </div>



                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="bg-gold p-md-5 p-4 wow fadeInUp box">
        <div class="conatiner">
            <div class="row ">
                <div class=" px-0 banner_media">

                    <div class="row px-3">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <h3 class="mb-3">Solar Panel Recycling Plant</h3>
                            <div>

                                <p> Solar panel recycling plant extracts glass, aluminum, silicon, copper, silver and
                                    plastics with higher market value through physical crushing and sorting process and
                                    cracking process. The separation can reach 99% purity.

                                </p>


                                <div class="d-flex align-items-center mb-3 mt-4">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle"> <span class="mt-custom-2 mx-2"><b>Capacity:</b>
                                        500-1000kg/h (Support for custom)

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle"> <span class="mt-custom-2 mx-2"><b>Raw Materials:</b> Waste solar
                                        PV panels and PV modules

                                    </span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/assets/img/circle.jpg') }}" alt=""
                                        class="circle"> <span class="mt-custom-2 mx-2"><b>Final Products:</b> Aluminum
                                        frame, glass, copper, silicon powder, plastic, silver, etc.

                                    </span>
                                </div>


                                <p class="mb-2">We will also invest in Glass and Polyolefin Encapsulant (POE) film
                                    , both of which have natural synergies with our Chemical and Materials
                                    business.

                                </p>

                                <p class="mb-2">We know that early stage solar power systems or solar photovoltaic
                                    systems quickly reach the end of their life cycle.

                                </p>
                                <p class="mb-2">In response to the current problems in the recycling of solar panel
                                    materials, we have developed an energy-saving, environmentally friendly, efficient and
                                    low-cost solar photovoltaic panel recycling production line.



                                </p>

                                <p class="mb-2">We provide industry-leading recycling solutions. The waste photovoltaic
                                    panel processing equipment extracts glass, aluminum, silicon, copper, silver and
                                    plastics with higher market value through physical crushing and sorting process and
                                    cracking process.

                                </p>

                            </div>

                        </div>
                        <div class="col-lg-6 mb-lg-0 mb-4 order-lg-2 order-1">
                            <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="image-slider">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img alt="Image 1" class="d-block w-100"
                                            src="{{ asset('frontend/assets/img/carousel/1.png') }}"></div>

                                    <div class="carousel-item"><img alt="Image 2" class="d-block w-100"
                                            src="{{ asset('frontend/assets/img/carousel/2.png') }}"></div>

                                    <div class="carousel-item"><img alt="Image 3" class="d-block w-100"
                                            src="{{ asset('frontend/assets/img/carousel/3.png') }}"></div>

                                    <div class="carousel-item"><img alt="Image 4" class="d-block w-100"
                                            src="{{ asset('frontend/assets/img/carousel/4.png') }}"></div>

                                    <div class="carousel-item"><img alt="Image 5" class="d-block w-100"
                                            src="{{ asset('frontend/assets/img/carousel/4.jpg') }}"></div>

                                    <div class="carousel-item"><img alt="Image 6" class="d-block w-100"
                                            src="{{ asset('frontend/assets/img/carousel/6.png') }}"></div>

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-blue-2 p-md-5 p-4 wow fadeInUp box strip">
        <div class="conatiner">

            <div class="row ">

                <div class=" banner_media mb-4 fade-up">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h3 class="text-capitalize mb-3">EVA POE Solar Encapsulation Film Extrusion Line
                            </h3>
                            <p class="mb-2">
                                EVA POE EPE encapsulation film has excellent durability such as weather
                                resistance, high-temperature resistance, humidity resistance, and ultraviolet resistance. It
                                has excellent additional force on glass, metal, plastic PET, and TPT, and maintains
                                long-term additional force. Excellent light-absorbing rate and transparency. Solar cells are
                                deactivated and harmless during processing. High cross-linking rate after lamination. Good
                                encapsulation performance.
                            </p>
                        </div>

                        <div class="col-lg-4 mt-0 mb-lg-0 mb-4 order-lg-2 order-1">
                            <img src="{{ asset('frontend/assets/img/carousel/encapsulation.jpg') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>


                <div class=" banner_media fade-up mb-4">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-2">
                            <h3 class="text-capitalize mb-3"> PVDF Film For Photovoltaic Backsheet


                            </h3>
                            <p>The solar back film is produced by the combination of three layers of molecular film, the
                                middle layer is the thickness of 150-350μm PET film, the outside two layers of 25μm fluorine
                                film, PET film is not easy to expand, with good high temperature resistance and excellent
                                electrical insulation properties. The fluorine film layer has stable structure and good
                                anti-ultraviolet, anti-moisture and anti-aging properties.

                            </p>
                        </div>

                        <div class="col-lg-4 mb-lg-0 mb-4 order-1">
                            <img src="{{ asset('frontend/assets/img/carousel/backsheet.jpg') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>



                <div class=" banner_media fade-up mb-4">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h3 class="text-capitalize mb-3">Aluminum extrusion solar panel dimensions and sizes

                            </h3>
                            <p>Our solar panel aluminum frame usually made of 6063 aluminum alloy with anodized surface in
                                order to increases the corrosion resistance in the outdoor environment. solar panel aluminum
                                frame has light weight which makes it easier to transport and install.

                            </p>
                            <p>The aluminum frames are connected by corner bracket without screws, which is
                                aesthetic and convenient. The standard frame sectional size for solar panel
                                aluminum frame, Such as 25x25mm, 25x30mm, 30x35mm, 35x35mm, 35x40mm, 35x50mm and etc for you
                                options.</p>
                        </div>

                        <div class="col-lg-4 mb-lg-0 mb-4 order-lg-2 order-1">
                            <img src="{{ asset('frontend/assets/img/carousel/frame.jfif') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>



                <div class=" banner_media fade-up mb-4">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-2">
                            <h3 class="text-capitalize mb-3">PP PET Strap Strapping Band Extrusion Production Line
                            </h3>
                            <p class="mb-2">This production line can produce different with and thickness of PP PET
                                strap
                                according to client's requirement. This extrusion line is mainly for producing PP PET strap.
                                The raw material can be 100% recycled material, which can reduce the produce cost and get a
                                good profit. And the PP PET belt is the substitution of the steel strap and has lots of
                                advantages such as good extension, high temperature resistance, easy use, etc
                            </p>
                            <p>The PET / PP packing belt has the characteristic of high stretch-resistant, low extend rate,
                                impact-resistant, good flexible, easy for operate, cheap and safe.

                            </p>
                        </div>

                        <div class="col-lg-4 mb-lg-0 mb-4 order-1">
                            <img src="{{ asset('frontend/assets/img/carousel/strapping.webp') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>


                <div class=" banner_media fade-up mb-4">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h3 class="text-capitalize mb-3">Water Electrolysis Hydrogen Producing Machine Alkaline
                                Hydrogen Generator
                            </h3>
                            <p> We supply various products in the hydrogen energy industry chain, including but not limited
                                to hydrogen production, hydrogen storage, hydrogen supply, electric maintenance and BOP
                                parts, fuel cell system assemblies, fuel cell vehicles, etc.</p>
                            <p>We have an experienced professional technology research and development team, which can
                                provide professional services from product selection and matching, system design, product
                                customization and development and technical support.</p>
                        </div>

                        <div class="col-lg-4 mb-lg-0 mb-4 orderlg-2 order-1">
                            <img src="{{ asset('frontend/assets/img/carousel/alkaline.webp') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wow fadeInUp box">
        <div class="m-lg-5 m-3">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h3 class="text-capitalize mb-3">
                        Robotic Solar Panel Cleaning Machine for Maintaining Photovoltaic Farms

                    </h3>
                    <p class="mb-2">Discover the state-of-the-art Solar Panel Cleaning Robot. This innovative and
                        advanced robot offers an automated and efficient solution for maintaining and cleaning solar panels.
                    </p>

                    <p class="mb-2">
                        Equipped with two rotating nylon brush rollers and two section water spray nozzles, this robot
                        ensures thorough cleaning of your solar panels. Its long water pipe allows for easy reach and
                        coverage.
                    </p>
                    <p class="mb-2">
                        With cutting-edge technology and a high-efficiency cleaning mechanism, this robot guarantees optimal
                        performance and longevity of your solar panels. Say goodbye to manual cleaning and let our advanced
                        cleaning system take care of your solar panel maintenance needs.

                    </p>
                    <p class="mb-2">Experience the future of solar panel maintenance with the Light-Weighted Solar Panel
                        Cleaning Robot machine.

                    </p>

                </div>

                <div class="col-lg-6 mb-lg-0 mb-4 order-lg-2 order-1">
                    <img src="{{ asset('frontend/assets/img/carousel/robot.webp') }}" alt=""
                        class="w-100 rounded">
                </div>
            </div>

        </div>
    </section>







    {{--
    <section class="bg-gold p-md-5 p-4 wow fadeInUp box">
        <div class="conatiner">

            <div class="row ">
                <h2 class="text-capitalize mb-3 text-white">Forging Global Partnerships for Sustainable Growth

                </h2>
                <p class="mb-3 text-white">We have forged strong global partnerships to co-create New Energy solutions for
                    India and the world.
                </p>

                <div class=" banner_media mb-4 fade-up">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h3 class="text-capitalize mb-3">Sterling & Wilson Solar</h3>
                            <p class="mb-3">SNEL has acquired a 40% stake in Sterling & Wilson Solar, one of the largest
                                EPC and O&M providers globally, to provide turnkey solutions in the New Energy value chain.

                            </p>

                            <p>To learn more, please visit <a href="https://sterlingandwilson.com/"
                                    class="explore-btn m-2" target=_blank>www.sterlingandwilson.com</a>

                            </p>
                        </div>

                        <div class="col-lg-4 mt-lg-0 mt-4 recron_block order-lg-2 order-1 mb-lg-0 mb-4">
                            <img src="{{ asset('frontend/assets/img/logos/sterling.jpg') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>


                <div class=" banner_media mb-4 fade-up">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h3 class="text-capitalize mb-3">NexWafe
                            </h3>
                            <p class="mb-3">SNEL has invested USD 29 million (EUR 25 million) in Germany’s NexWafe and
                                partnered with them for the joint technology development and commercialization of
                                high-efficiency monocrystalline “green solar wafers”.

                            </p>
                            <p class="mb-3">NexWafe’s unique patented technology is expected to drastically lower costs
                                and make solar photovoltaics the lowest-cost form of renewable energy available and build
                                large-scale wafer manufacturing facilities in India.

                            </p>

                            <p>To learn more, please visit <a href="https://www.nexwafe.com/" class="explore-btn m-2"
                                    target=_blank>www.nexwafe.com</a>

                            </p>
                        </div>

                        <div class="col-lg-4 mt-lg-0 mt-4 recron_block order-lg-2 order-1 mb-lg-0 mb-4">
                            <img src="{{ asset('frontend/assets/img/logos/nexwafe.jpg') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>


                <div class=" banner_media mb-4 fade-up">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h3 class="text-capitalize mb-3">Stiesdal A/S</h3>
                            <p class="mb-3">SNEL is collaborating with Denmark’s Stiesdal A/S on manufacturing of their
                                HydroGen Electrolyzers in India, which will produce hydrogen at a significantly lower cost
                                compared to current levels, thus paving the way for rapid decarbonization and
                                commercialization of affordable Green Hydrogen.

                            </p>

                            <p>To learn more, please visit <a href="https://www.stiesdal.com/" class="explore-btn m-2"
                                    target=_blank>www.stiesdal.com</a>

                            </p>
                        </div>

                        <div class="col-lg-4 mt-lg-0 mt-4 recron_block order-lg-2 order-1 mb-lg-0 mb-4">
                            <img src="{{ asset('frontend/assets/img/logos/stiesdal.jpg') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>

                <div class=" banner_media mb-4 fade-up">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h3 class="text-capitalize mb-3">Caelux Corporation
                            </h3>
                            <p class="mb-3">SNEL is investing USD 12 million for a 20% stake in Caelux to accelerate its
                                product and technology development, including construction of its pilot line in the United
                                States for expediting the commercial development of its technology. SNEL and Caelux have
                                also entered into a strategic partnership agreement for technical collaboration and
                                commercialization of Caelux’s technology.

                            </p>
                            <p class="mb-3">Caelux is an industry leader in the research and development of
                                perovskite-based solar technology. Its proprietary technology enables high efficiency solar
                                modules that can produce 20% more energy.</p>

                            <p>To learn more, please visit <a href="https://www.caelux.com/" class="explore-btn m-2"
                                    target=_blank>www.caelux.com</a>

                            </p>
                        </div>

                        <div class="col-lg-4 mt-lg-0 mt-4 recron_block order-lg-2 order-1 mb-lg-0 mb-4">
                            <img src="{{ asset('frontend/assets/img/logos/caelux.jpg') }}" alt=""
                                class="w-100 cards-img">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{--
    <section class="bg-gold p-md-5 p-4 wow fadeInUp box">
        <div class="conatiner">
            <div class="row ">
                <div class=" banner_media mb-4 fade-up">
                    <div class="row d-flex align-items-center px-xl-2">
                        <div class="col-lg-6 ">
                            <h2 class="text-capitalize mb-3">New Materials
                            </h2>
                            <p class="mb-2">Consistent with our ambition to decarbonise our businesses and our vision for
                                New Materials, we will build in phases India’s first and one of the world’s largest carbon
                                fibre plants at Hazira with a capacity of 20,000 metric tonnes per annum (MTPA) based on
                                Acrylonitrile feedstock.

                            </p>
                            <p class="mb-2">Our carbon fibre platform will include carbon fibre and carbon fibre
                                reinforced plastics. Our target is to be among the top three players globally in the carbon
                                fibre and carbon fibre reinforced plastic composites.

                            </p>
                            <p class="mb-2">Our foray into manufacturing carbon fibre at large scale also provides us
                                with a unique advantage to integrate and reduce the cost of wind turbines, as carbon fibre
                                is a significant cost driver in the manufacturing of wind blades.

                            </p>
                            <p class="mb-2">We aim to complete the first phase of the carbon fibre plant during 2025. The
                                plant will have flexibility to produce highly profitable specialty grades to cater to
                                diverse end uses.

                            </p>
                            <p>
                                Besides other applications, carbon fibre composites are also used to meet the rapidly
                                growing light weighting requirements of mobility and renewable energy. Thus, carbon fibre
                                promises to be a multi-decade growth engine for our Oil-to-Chemicals business.


                            </p>
                        </div>

                        <div class="col-lg-6 mt-lg-0 mt-4 recron_block mb-lg-0 mb-4">

                            <figure><img alt="" class="img-fluid"
                                    src="{{ asset('frontend/assets/img/blog/figure.jpg') }}"></figure>
                            <p class="mb-2">We are championing sustainability through circular economy and are India’s
                                leader in recycling polyesters and plastics. We will strengthen our leadership position in
                                PET recycling by more than doubling our bottle recycling capacity to 5 billion bottles a
                                year.

                            </p>
                            <p class="mb-2">We have developed an innovative chemical recycling pathway to enable
                                conversion of waste plastics to valuable refinery feedstock.

                            </p>
                            <p>Our scientists have also developed pathways to produce biodegradable and compostable plastics
                                to completely replace single-use plastics. We are on our way towards attaining global
                                leadership in recycling and producing sustainable materials.

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{--
        <section class="bg-gold pt-3 p-md-5 p-4 wow fadeInUp box">
        <div class="conatiner">
            <div class="row ">
                <h2 class="energy text-white mb-3">Solar Panel Production Line</h2>
                <div class=" banner_media mb-4 fade-up">
                    <div class="col-6 d-flex align-items-center px-xl-2">
                            <div class="col-lg-12 ">
                                <h3 class="text-capitalize mb-3">300MW-500MW solar panel conveyor line
                                </h3>
                                <p>The 300-500MW solar panel production line produces solar panels with an annual output of 300MW - 500MW. At large-scale, utility-scale, and large solar farm, this level of production is exactly what big manufacturers are looking to meet when producing for the world and the domestic market.
                                </p>
                                <p>300-500MW solar panel production line </p>
                                <p>FACTORY SIZE：6000-10000㎡ </p>
                                <p>POWER REQUEST：1200-2500KW</p>
                            </div>

                            <div class="col-lg-12 mt-lg-0 mt-4">
                                <img src="{{ asset('frontend/assets/img/carousel/300-500.jpg') }}" alt=""
                                    class="w-100 cards-img">
                            </div>
                    </div>
                </div>



                <div class=" banner_media mb-4 fade-up">
                    <div class="col-6 d-flex align-items-center px-xl-2">
                            <div class="col-lg-12 order-lg-2 order-1">
                                <h3 class="text-capitalize mb-3">50MW-100MW solar panel manufacturing equipment

                                </h3>
                               <p class="mb-2">50MW-100MW solar panel production line is perfect for medium to large manufacturers looking to satisfy domestic and export demand for solar energy products. These solar panel manufacturing lines cover everything from raw material handling to the final assembly and testing of solar panels.

                               </p>
                                <p>50-100MW solar panel production line </p>
                                <p>FACTORY SIZE：2000-3000㎡ </p>
                                <p>POWER REQUEST：400-600KW</p>
                            </div>

                            <div class="col-lg-12 mt-lg-0 mt-4 order-lg-1 order-2">
                                <img src="{{ asset('frontend/assets/img/carousel/50-100.png') }}" alt=""
                                    class="w-100 cards-img">
                            </div>
                    </div>
                </div>


                <div class=" banner_media mb-4 fade-up">
                    <div class="row d-flex align-items-center px-xl-2">
                            <div class="col-lg-6">
                                <h3 class="text-capitalize mb-3">5MW-20MW solar panel production line

                                </h3>
                               <p class="mb-2">
                                A 5MW-20MW solar panel production line is a manufacturing setup that produces solar panels with an annual output capacity of between 5 megawatts (MW) and 20 MW. Generally, these production lines encompass several phases of the production cycle, ranging from the treatment of raw materials, positioning, and assembly, to the testing of solar panels. These are usually suitable for mid-size production lines for local markets and larger projects.

                               </p>

                            </div>

                            <div class="col-lg-6 mt-lg-0 mt-4 ">
                                <img src="{{ asset('frontend/assets/img/carousel/5-20.webp') }}" alt=""
                                    class="w-100 cards-img">
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


    <section class="bg-gold py-3 px-md-5 px-3 wow fadeInUp box">
        <div class="conatiner">
            <div class="row justify-content-center production-line mx-auto">
                <h2 class="energy text-white my-4 text-center mt-0 pt-4">Solar Panel Production Line</h2>

                <div class="col-lg-4 banner_media fade-up p-0 mb-4">
                    <div class=" p-0 m-0 pro-line">
                        <img src="{{ asset('frontend/assets/img/carousel/300-500.jpg') }}" alt=""
                            class="w-100">
                    </div>

                    <div class="mt-2 p-sm-3 p-2">
                        <h3 class="text-capitalize mb-3">300MW-500MW solar panel conveyor line
                        </h3>
                        <p>The 300-500MW solar panel production line produces solar panels with an annual output of 300MW -
                            500MW. At large-scale, utility-scale, and large solar farm, this level of production is
                            exactly what big are looking to meet when producing for the world and the domestic
                            market.
                        </p>

                    </div>
                </div>


                <div class="col-lg-4 banner_media fade-up p-0 mb-4 mx-lg-3">
                    <div class=" p-0 m-0 pro-line">
                        <img src="{{ asset('frontend/assets/img/carousel/50-100.png') }}" alt=""
                            class="w-100">
                    </div>

                    <div class="mt-2 p-sm-3 p-2">
                        <h3 class="text-capitalize mb-3">50MW-100MW solar panel equipment

                        </h3>
                        <p class="mb-2">50MW-100MW solar panel production line is perfect for medium to large
                            looking to satisfy domestic and export demand for solar energy products. These
                            solar panel lines cover everything from raw material handling to the final
                            assembly and testing of solar panels.

                        </p>

                    </div>
                </div>


                <div class="col-lg-4 banner_media fade-up p-0 mb-4">
                    <div class=" p-0 m-0 pro-line">
                        <img src="{{ asset('frontend/assets/img/carousel/5-20.jpg') }}" alt=""
                            class="w-100">
                    </div>

                    <div class="mt-2 p-sm-3 p-2">
                        <h3 class="text-capitalize mb-3">5MW-20MW solar panel production line

                        </h3>
                        <p class="mb-2">
                            A 5MW-20MW solar panel production line is a setup that produces solar panels with
                            an annual output capacity of between 5 megawatts (MW) and 20 MW. Generally, these production
                            lines encompass several phases of the production cycle, ranging from the treatment of raw
                            materials, positioning, and assembly, to the testing of solar panels.

                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="bg-custom pb-5 pt-4 ">

        <div class="container   bg-custom">
            <h2 class="text-center energy mb-4">Advantages</h2>

            <div id="carouselExampleDark" class="carousel bg-white carousel-dark slide rounded ">

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->

                        <!-- Instead of image, div with style and min-height -->
                        <div class="custom-h-slider">
                            <div class="carousel-caption d-block">
                                <h5 class="mb-3">High Efficiency And Automation</h5>
                                <p>The production line adopts advanced automation equipment and processes to ensure the
                                    efficiency and stability of the production process. This can not only significantly
                                    improve production efficiency and reduce labor costs, but also reduce human errors and
                                    improve product quality.</p>
                            </div>
                        </div><!-- end of div style min-height: 140px; -->
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <!-- Instead of image, div with style and min-height -->
                        <div class="custom-h-slider">
                            <div class="carousel-caption d-block">
                                <h5 class="mb-3">Quality Control</h5>
                                <p>A strict quality control system is an important feature of the production line, which
                                    ensures that each solar panel meets quality requirements. Through strict selection of
                                    raw materials, precise control of the production process and strict testing of finished
                                    products, the stability and reliability of the products are ensured.</p>
                            </div>
                        </div><!-- end of div style min-height: 140px; -->
                    </div>
                    <div class="carousel-item">
                        <!-- Instead of image, div with style and min-height -->
                        <div class="custom-h-slider">
                            <div class="carousel-caption d-block">
                                <h5 class="mb-3">Cost Optimization</h5>
                                <p>Large-scale production helps reduce the cost of unit products and improve market
                                    competitiveness. At the same time, by optimizing the production process and technology,
                                    unnecessary waste can be further reduced and costs can be reduced.</p>
                            </div>
                        </div><!-- end of div style min-height: 140px; -->
                    </div>

                    <div class="carousel-item">
                        <!-- Instead of image, div with style and min-height -->
                        <div class="custom-h-slider">
                            <div class="carousel-caption d-block">
                                <h5 class="mb-3">Environmental Protection And Sustainability</h5>
                                <p>As a clean energy product, solar panel production lines also focus on environmental
                                    protection and sustainable development. During the production process, we try to
                                    minimize the impact on the environment and achieve green.</p>
                            </div>
                        </div><!-- end of div style min-height: 140px; -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div><!-- end .container -->
    </section>


    <section class=" py-md-5 py-4 px-md-5 px-3 wow fadeInUp box">
        <div class="conatiner position-relative overflow-hidden">
            <div class="circle-shape"></div>
            <div class="circle-shape-2"></div>
            <div class="row  bg-img">
                <div class=" banner_media bg-blue-2  ">
                    <div class="row d-flex align-items-center px-xl-2 justify-content-center">
                        <div class="col-lg-10  text-center  pb-sm-4 pt-sm-5 mt-lg-0 mt-3">
                            <p class="mb-2 text-white fs-22 px-2">Solar Techmach is company who sells only production
                                plant
                                and
                                machinerys related to solar energy and also renewable energy like hydrogen gas oxygen gas
                                from waster by using electrolysis.
                            </p>
                            <p class="text-white fs-22 px-2 mb-2">We are only sellers of imported Solar & Renewable
                                energies
                                related
                                production, equipments, machines, plants, spare parts machienrys.
                            </p>
                            <p class="text-white fs-22 px-2">In case of investments with ready shed & building or land &
                                keen desire to import, please email us at <a href="mailto:sales@solartechmach.com "
                                    class="text-white fs-22 hover-mail">
                                    sales@solartechmach.com </a></p>

                            <div class="text-center pt-4">
                                <a href="{{ url('/contact-us') }}" class="main-btn">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-ponds py-5 pb-2 wow fadeInUp box">
        <div class="conatiner">
            <div class="row ">
                <h2 class="text-capitalize mb-md-5 mb-3 text-center energy">Technical Data
                </h2>
                <div class=" mb-lg-1 mb-3 fade-up pt-3 pb-md-5 pb-3">
                    <div class="text-center ">
                        <a href="#" class="main-btn">Open PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
