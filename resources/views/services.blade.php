@extends('layout')

@section('content')

<section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Our Services!</h4>
                <h2>Start your journey with <br><span>Short pump cab Taxi</span> Company!</h2>
                <p>Everything your taxi business <br>needs is already here! </p>
            </div>
        </div>
    </section>
    <!--/.page-header-->

    <section class="service-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('/') }}img/service-1.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Regular Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Short pump cab made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('/') }}img/service-2.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Airport Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Short pump cab made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('/') }}img/service-3.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Luggage Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Short pump cab made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
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
                            <p>Everything your taxi business needs is already here! Short pump cab made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
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
                            <p>Everything your taxi business needs is already here! Short pump cab made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('/') }}img/service-5.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('/') }}img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Local Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Short pump cab made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.service-section-->

@endsection
