@extends('layout')

@section('content')

<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>Service Details!</h4>
            <h2>Feel your journey <br> with <span>Short pump cab!</span></h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="taxi-details bd-bottom padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="taxi-details-img">
                    <img src="{{ asset('/') }}img/car-2.png" alt="taxi">
                    <div class="price"><i class="las la-tachometer-alt"></i>$0.85/km</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h4><span></span>Introducing</h4>
                    <h2>Mercedes-Maybach Haute Voiture - 2024</h2>
                    <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies. Our portfolio includes dozens of successfully completed projects of houses of different storeys, with high–quality finishes and good repairs. Book your taxi from anywhare today!</p>
                </div>
                <ul class="taxi-features">
                    <li><span><i class="las la-taxi"></i>Car ID:</span> 7762</li>
                    <li><span><i class="las la-compass"></i>Transmission:</span> Auto</li>
                    <li><span><i class="las la-route"></i>Mileage:</span> 170K</li>
                    <li><span><i class="las la-tools"></i>Engine:</span> 6.5L LP petrol</li>
                    <li><span><i class="las la-sync"></i>Air Condition:</span> Yes</li>
                    <li><span><i class="las la-briefcase"></i>Luggage Carry:</span> 4</li>
                </ul>
                <a href="book-taxi.html" class="default-btn mt-30">Book Your Ride</a>
            </div>
        </div>
    </div>
</section>
<!--/.taxi-details-->

<section class="service-details bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <div class="service-details-info">
                        <h2>Comfortable Business Transport Services!</h2>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more. Arkit a trusted name for providing assistants. Initially their main objective was to ensure the service they provide these people are loyal to their industry.</p>
                        <p>Unless you are the one who really cares about this, it is not terribly important. What all matters are how your hybrid mobile application development is going to work in the long run as no one will care about how it was built.</p>
                        <ul class="service-features">
                            <li>
                                <div><i class="las la-shipping-fast"></i></div>
                                <div>
                                    <h3>Fast &amp; Easy Pickups</h3>
                                    <p>Everything your taxi business needs is already here!</p>
                                </div>
                            </li>
                            <li>
                                <div><i class="las la-taxi"></i></div>
                                <div>
                                    <h3>Instant Car Provide</h3>
                                    <p>Everything your taxi business needs is already here!</p>
                                </div>
                            </li>
                            <li>
                                <div><i class="las la-tachometer-alt"></i></div>
                                <div>
                                    <h3>Save Expert Drive</h3>
                                    <p>Everything your taxi business needs is already here!</p>
                                </div>
                            </li>
                            <li>
                                <div><i class="las la-user-astronaut"></i></div>
                                <div>
                                    <h3>24/7 Support</h3>
                                    <p>Everything your taxi business needs is already here!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
