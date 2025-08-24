@extends('layout')

@section('content')
    <div class="slider-section">
        <div class="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-img"><img src="{{ asset('/') }}img/slider-bg.jpg" alt="img" class="kenburns"
                            style="animation-duration: 12000ms; "></div>
                    <div class="car-holder">
                        <img src="{{ asset('/') }}img/car-1.png" alt="car" data-animation="car-animation" data-duration="1.5s">
                        <div class="shape">
                            <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                            <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                            <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                        </div>
                    </div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-caption medium">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption big">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Short pump cab
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption small">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                            Book your taxi from anywhere today!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img"><img src="{{ asset('/') }}img/slider-bg.jpg" alt="img" class="kenburns"
                            style="animation-duration: 12000ms; "></div>
                    <div class="car-holder">
                        <img src="{{ asset('/img/car-1.png') }}" alt="car" data-animation="car-animation" data-duration="1.5s">
                        <div class="shape">
                            <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                            <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                            <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                        </div>
                    </div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-caption medium">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption big">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Short pump cab
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption small">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                            Book your taxi from anywhere today!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider navigation buttons -->
            <div class="slider-controls">
                <div class="slider-control slider-button-prev"><span><i
                            class="las la-long-arrow-alt-left"></i></span>Prev</div>
                <div class="slider-pagination"></div>
                <div class="slider-control slider-button-next">Next<span><i
                            class="las la-long-arrow-alt-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--/.slider-section-->

    <x-aboutCompany />

    <x-bookingForm />

    <x-testimonial />

    <section class="service-section bg-grey padding">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>What We Offer</h4>
                <h2 class="white">Start your journey with<br>Short pump cab Taxi Company!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                    master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="swiper-outside">
                <div class="service-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                                <div class="service-thumb">
                                    <img src="{{ asset('/') }}img/service-1.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Regular Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Short pump cab made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="400ms">
                                <div class="service-thumb">
                                    <img src="{{ asset('/') }}img/service-2.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Airport Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Short pump cab made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="service-thumb">
                                    <img src="{{ asset('/') }}img/service-3.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Luggage Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Short pump cab made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="{{ asset('/') }}img/service-4.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">City Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Short pump cab made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="{{ asset('/') }}img/service-5.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Business Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Short pump cab made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div><!-- Carousel Dots -->
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>
    <!--/.service-section-->
@endsection
