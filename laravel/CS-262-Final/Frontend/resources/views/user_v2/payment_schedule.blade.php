@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Payment Schedule</title>
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
                                    <span property="name"><b>Payment Schedule</b> </span>
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
                                        Payment Schedule
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
    <br>
    <section class="schedule">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="wrapper-content pin-side40">
                                <div class="loan_history_block">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Name</th>
                                            <th>Bank Name</th>
                                            <th>Amount</th>
                                            <th>Payment Schedule</th>
                                            <th>Loan Plan</th>
                                            <th>Interest Rate</th>
                                            <th>Payment</th>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Maybank</td>
                                            <td>2000$</td>
                                            <td>04/15/2023</td>
                                            <td>Personal Loan</td>
                                            <td>5%</td>
                                            <td>Payment=3000$</td>
                                        </tr>
                                        <tr>
                                            <td>Jane Doe</td>
                                            <td>Maybank</td>
                                            <td>2000$</td>
                                            <td>04/15/2023</td>
                                            <td>Personal Loan</td>
                                            <td>5%</td>
                                            <td>Payment=3000$</td>
                                        </tr>
                                        <tr>
                                            <td>Bob Smith</td>
                                            <td>Maybank</td>
                                            <td>2000$</td>
                                            <td>04/15/2023</td>
                                            <td>Personal Loan</td>
                                            <td>5%</td>
                                            <td>Payment=3000$</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
