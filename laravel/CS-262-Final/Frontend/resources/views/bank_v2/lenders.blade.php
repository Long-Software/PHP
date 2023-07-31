@extends('layout.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Lenders Page</title>
@endsection
@section('content')
    <section class="title">
        <div class="page-header" style="background-image: url({{ asset('frontend/assets/img/slider-1-1.jpg') }}); ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" title="" href="#" class="home">
                                        <span property="name" style="color: #15549a;">Home</span>
                                    </a>
                                    <meta property="position" content="1">
                                </span>
                                <li>/</li>
                                <span property="itemListElement" typeof="ListItem">
                                    <span property="name"><b>Lenders</b> </span>
                                    <meta property="position" content="2">
                                </span>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pin-side30">
                            <div class="row">
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <h1 class="page-title">
                                        Lenders
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="sticky-wrappper" id="sub-nav-sticky-wrapper" style="heigth: 0.666667px">
                            <div class="sub-nav" id="sub-nav">
                                <div id="menu-button">subnav</div>
                                <ul class="nav nav-justified"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lenders">
        <div class="wrapper-lender">
            <div class="container">
                <div class="row">
                    <div class="column-container col-sm-12">
                        <div class="column-inner">
                            <div class="wrapper">
                                <div class="row lender-row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clear">
                                        <div class="lender-listing">
                                            <!--Lender Listing-->
                                            <div class="lender-head">
                                                <div class="lender-logo">
                                                    <img width="200" height="40" style="border: 0;"
                                                        src="{{ asset('frontend/assets/img/ACLEDA.jpg') }}" alt=""
                                                        decoding="async">
                                                </div>
                                                <div class="lender-reviews">
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                </div>
                                            </div>
                                            <div class="lender-title">
                                                <h4>ACLEDA Bank</h4>
                                            </div>

                                            <div class="lender-rate-box">
                                                <div class="lender-ads-rate">
                                                    <small>Advertised Rate</small>
                                                    <h3 class="lender-rate-value">3.74%</h3>
                                                </div>
                                                <div class="lender-compare-rate">
                                                    <small>Comparison Rate</small>
                                                    <h3 class="lender-rate-value">5.74%</h3>
                                                </div>
                                            </div>

                                            <div class="lender-feature-list">
                                                <ul class="listnone bullet bullet-check-circle-default">
                                                    <li>Extra low interest rate</li>
                                                    <li>No ongoing fees</li>
                                                    <li>No upfront fees</li>
                                                    <li>Extra repayment + redraw services</li>
                                                </ul>
                                            </div>
                                            <div class="lender-actions">
                                                <a href="https://www.acledabank.com.kh/kh/eng/product#personal"
                                                    class="btn btn-default" style="width: 100%;">Apply Now</a>
                                                <a href="#" class="btn-link">More Information</a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clear">
                                        <div class="lender-listing">
                                            <!--Lender Listing-->
                                            <div class="lender-head">
                                                <div class="lender-logo">
                                                    <img width="200" height="40" style="border: 0;"
                                                        src="{{ asset('frontend/assets/img/ABA.jpg') }}" alt=""
                                                        decoding="async">
                                                </div>
                                                <div class="lender-reviews">
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                </div>
                                            </div>

                                            <div class="lender-title">
                                                <h4>ABA Bank</h4>

                                            </div>

                                            <div class="lender-rate-box">
                                                <div class="lender-ads-rate">
                                                    <small>Advertised Rate</small>
                                                    <h3 class="lender-rate-value">3.74%</h3>
                                                </div>
                                                <div class="lender-compare-rate">
                                                    <small>Comparison Rate</small>
                                                    <h3 class="lender-rate-value">5.74%</h3>
                                                </div>
                                            </div>

                                            <div class="lender-feature-list">
                                                <ul class="listnone bullet bullet-check-circle-default">
                                                    <li>Extra low interest rate</li>
                                                    <li>No ongoing fees</li>
                                                    <li>No upfront fees</li>
                                                    <li>Extra repayment + redraw services</li>
                                                </ul>
                                            </div>
                                            <div class="lender-actions">
                                                <a href="https://www.acledabank.com.kh/kh/eng/product#personal"
                                                    class="btn btn-default" style="width: 100%;">Apply Now</a>
                                                <a href="#" class="btn-link">More Information</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clear">
                                        <div class="lender-listing">
                                            <!--Lender Listing-->
                                            <div class="lender-head">
                                                <div class="lender-logo">
                                                    <img width="200" height="40" style="border: 0;"
                                                        src="{{ asset('frontend/assets/img/CANADIA.png') }}"
                                                        alt="" decoding="async">
                                                </div>
                                                <div class="lender-reviews">
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                </div>
                                            </div>
                                            <div class="lender-title">
                                                <h4>Canadia Bank</h4>
                                            </div>

                                            <div class="lender-rate-box">
                                                <div class="lender-ads-rate">
                                                    <small>Advertised Rate</small>
                                                    <h3 class="lender-rate-value">3.74%</h3>
                                                </div>
                                                <div class="lender-compare-rate">
                                                    <small>Comparison Rate</small>
                                                    <h3 class="lender-rate-value">5.74%</h3>
                                                </div>
                                            </div>

                                            <div class="lender-feature-list">
                                                <ul class="listnone bullet bullet-check-circle-default">
                                                    <li>Extra low interest rate</li>
                                                    <li>No ongoing fees</li>
                                                    <li>No upfront fees</li>
                                                    <li>Extra repayment + redraw services</li>
                                                </ul>
                                            </div>
                                            <div class="lender-actions">
                                                <a href="https://www.acledabank.com.kh/kh/eng/product#personal"
                                                    class="btn btn-default" style="width: 100%;">Apply Now</a>
                                                <a href="#" class="btn-link">More Information</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
