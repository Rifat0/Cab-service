@extends('layout')

@section('content')
<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>Service Details!</h4>
            <h2>Our expert drivers will <br>make your <span>Ride Safe!</span></h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="team-section padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-1.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Richmond</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-2.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Glen Allen</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-3.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Short Pump</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-4.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Henrico</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-5.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Ashland</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-6.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Ruther Glen</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-7.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Midlothian</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('/') }}img/team-8.jpg" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3><a>Innsbrook</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.team-section-->
@endsection
