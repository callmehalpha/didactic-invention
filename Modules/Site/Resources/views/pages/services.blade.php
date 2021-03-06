@extends('site::layouts.master',[$elementActive = 'services'])
@section('content')
    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="banner-overlay">
            <div class="banner-text text-center">
                <div class="container">
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <!-- Title Starts -->
                            <h2 class="title-head">our <span>services</span></h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="/"> home</a></li>
                                <li>services</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area Ends -->
    <!-- Section Services Starts -->
    <section class="services">
        <div class="container">
            <div class="row">
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img id="download-bitcoin" src="{{asset('images/icons/orange/download-bitcoin.png')}}" alt="download bitcoin">
                        <div class="service-box-content">
                            <h3>Bitcoin Escrow Service</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img id="add-bitcoins" src="{{asset('images/icons/orange/add-bitcoins.png')}}" alt="add bitcoins">
                        <div class="service-box-content">
                            <h3>Bitcoin Mining</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img id="buy-sell-bitcoins" src="{{asset('images/icons/orange/buy-sell-bitcoins.png')}}" alt="buy and sell bitcoins">
                        <div class="service-box-content">
                            <h3>Software Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img id="strong-security" src="{{asset('images/icons/orange/strong-security.png')}}" alt="strong security"/>
                        <div class="service-box-content">
                            <h3>Bitcoin Transaction</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img id="world-coverage" src="{{asset('images/icons/orange/world-coverage.png')}}" alt="world coverage"/>
                        <div class="service-box-content">
                            <h3>Bitcoin Exchange</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img id="payment-options" src="{{asset('images/icons/orange/payment-options.png')}}" alt="payment options"/>
                        <div class="service-box-content">
                            <h3>Bitcoin Investment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->

            </div>
        </div>
    </section>
    <!-- Section Services Ends -->

@endsection
